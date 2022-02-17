<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('email')) {
            redirect('/mahasiswa/home');
        }
        $this->load->model('User_model', 'user');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Login';
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('auth/index');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['passcode'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id'],
                ];
                $this->session->set_userdata($data);
                redirect('mahasiswa/indexx');
            } else {
                $this->session->set_flashdata('flash', 'Your password isnt correct');
                redirect('/');
            }
        } else {
            $this->session->set_flashdata('flash', 'Your email hasnt been registered');
            redirect('/');
        }
    }

    public function register()
    {
        $data['judul'] = 'Halaman Register';

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]', [
            'is_unique' => 'Email already taken, login instead'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/footer');
        } else {
            $this->user->register();
            $this->session->set_flashdata('flash', 'Your account has been successfully created, please login');
            redirect('/');
        }
    }
}
