<?php

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('sistem');
        $this->load->library('form_validation');
        $this->load->model('Menu_model');
    }

    public function listFood()
    {
        $data['title']  = 'Menu Makanan';
        $data['food']   = $this->Menu_model->getCoreFood();

        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/topbar');
        $this->load->view('Menu/listFood_view');
        $this->load->view('Templates/footer');
    }

    public function listDrink()
    {
        $data['title']  = 'Menu Minuman';

        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/topbar');
        $this->load->view('Menu/listDrink_view');
        $this->load->view('Templates/footer');
    }

    public function tambahFood()
    {
        $data['title']  = 'Tambah Makanan';

        $this->form_validation->set_rules('food_name', 'Nama Makanan', 'required', [
            'required'  => 'Nama Makanan wajib diisi !'
        ]);
        $this->form_validation->set_rules('food_price', 'Harga Makanan', 'required', [
            'required'  => 'Harga Makanan wajib diisi !'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('Templates/header', $data);
            $this->load->view('Templates/topbar');
            $this->load->view('Menu/tambahFood_view');
            $this->load->view('Templates/footer');
        } else {
            $this->proses_tambah();
        }
    }

    public function proses_tambah()
    {
        $data = [
            'food_name'             => $this->input->post('food_name'),
            'food_price'            => $this->input->post('food_price'),
            'created_id'            => $this->session->userdata('user_id'),
            'data_store'            => 0,
            'created_on'            => date("Y-m-d H:i:s")
        ];
        $this->Menu_model->insertCoreFood($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Tambah Makanan Berhasil !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('menu/food');
    }
}
