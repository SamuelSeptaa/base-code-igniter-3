<?php

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('flash', 'Your need to login');
            redirect('/');
        }

        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Mahasiswa';



        $this->load->library('pagination');



        $config['per_page'] = 5;

        if ($this->input->post('nama')) {
            $data['keyword'] = $this->input->post('nama');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama', $data['keyword']);
        $this->db->from('mahasiswa');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];

        $this->pagination->initialize($config);

        $data['start_at'] = $this->uri->segment(3);
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa(5, $data['start_at'], $data['keyword']);


        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['judul'] = 'Halaman Tambah Mahasiswa';

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|is_unique[mahasiswa.nim]');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->inputData();
            $this->session->set_flashdata('flash', $this->input->post('nama') . ' ditambahkan');
            redirect('mahasiswa/tambah');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusMahasiswa($id);

        $this->session->set_flashdata('flash', 'Data Dihapus');

        redirect('mahasiswa');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getSpecifiedMhs($id);

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->editData($id);
            $this->session->set_flashdata('flash', $this->input->post('nama') . ' berhasil diubah');
            redirect('mahasiswa/edit/' . $this->input->post('id'));
        }
    }

    public function reset()
    {
        $this->session->set_userdata('keyword', null);

        redirect('mahasiswa');
    }

    public function home()
    {
        $data['judul'] = 'Home/Beranda';

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/home');
        $this->load->view('templates/footer');
    }
}
