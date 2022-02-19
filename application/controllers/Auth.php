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
        $this->load->view('Templates/header', $data);
        $this->load->view('Auth/Login');
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
            $this->load->view('Templates/header', $data);
            $this->load->view('Auth/addAcountUser_view');
            $this->load->view('Templates/footer');
        } else {
            $data['title'] = 'Buat Akun';
            $this->load->view('Templates/header', $data);
            $this->load->view('Auth/addAcountUser_view');
            $this->load->view('Templates/footer');
        }
    }

    public function pocessRegistrationUser()
    {
        $data = [
            'user_name'     => $this->input->post('user_name'),
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'role_id'       => 1,
            'data_state'    => 0,
        ];

        $this->Auth_model->insertRegistration($data);
        redirect('auth');
    }
}
