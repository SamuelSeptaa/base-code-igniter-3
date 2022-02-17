<?php

class Logout extends CI_Controller
{
    public function index()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('flash', 'Your have been logged out');
        redirect('/');
    }
}
