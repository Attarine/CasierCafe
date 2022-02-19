<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('sistem');
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $data['title'] = 'Login System';

        if ($this->session->userdata('id_petugas')) {
            redirect('petugas/home');
        }
        $this->form_validation->set_rules('username', 'username', 'required', [
            'required'  => 'Username wajib diisi !'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required', [
            'required'  => 'Password wajib diisi !'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('Templates/header', $data);
            $this->load->view('Auth/Login');
            $this->load->view('Templates/footer');
        } else {
            $this->proses_login();
        }
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $auth = $this->Auth_model->getUser($username);
        if ($auth) {
            if ($password == $auth['password']) {
                $data = [
                    'user_id'   => $auth['user_id'],
                    'username'  => $auth['username'],
                    'user_name' => $auth['user_name'],
                    'role_id'   => $auth['role_id'],
                ];
                $this->session->set_userdata($data);
                redirect('auth/home');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
               Maaf Username atau password anda salah
              </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Maaf Username atau password anda salah
          </div>');
            redirect('auth');
        }
    }

    public function home()
    {
        $data['title']  = 'Dashboard';

        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/topbar');
        $this->load->view('Auth/Home');
        $this->load->view('Templates/footer');
    }

    public function addAcountUser()
    {
        $this->form_validation->set_rules('user_name', 'Nama Lengkap', 'required|trim', [
            'required'     => 'Nama lengkap wajib diisi !'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required'      => 'Username Wajib diisi !'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length'    => 'Password Terlalu Pendek !',
            'required'      => 'Password wajib diisi !'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Buat Akun';
            $data['user_role']  = $this->Auth_model->getRoleID();
            $this->load->view('Templates/header', $data);
            $this->load->view('Auth/addAcountUser_view');
            $this->load->view('Templates/footer');
        } else {
            $this->pocessRegistrationUser();
        }
    }

    public function pocessRegistrationUser()
    {
        $data = [
            'user_name'     => $this->input->post('user_name'),
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'role_id'       => $this->input->post('role_id'),
            'data_state'    => 0,
            'created_on'    => date("Y-m-d H:i:s")
        ];

        $this->Auth_model->insertRegistration($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Buat Akun Berhasil !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('auth');
    }

    public function LogOut()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('user_name');
        redirect('auth');
    }
}
