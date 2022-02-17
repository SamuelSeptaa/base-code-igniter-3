<?php

class User_model extends CI_Model
{
    public function register()
    {
        $user = array(
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
            'passcode' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => 1,
        );

        $this->db->insert('user', $user);
    }
}
