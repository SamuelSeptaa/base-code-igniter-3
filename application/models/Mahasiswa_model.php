<?php

class Mahasiswa_model extends CI_Model{

    public function getAllMahasiswa($limit, $start, $keyword = null){

        if($keyword){
            $this->db->like('nama', $keyword);
        }
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('mahasiswa', $limit, $start)->result_array();
    }

    public function inputData(){
        $data = [
            'nama' => $this->input->post('nama',true),
            'nim' => $this->input->post('nim', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp', true),
        ];

        $this->db->insert('mahasiswa', $data);
    }


    public function hapusMahasiswa($id){
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

    public function getSpecifiedMhs($id){
        return $this->db->get_where('mahasiswa', array('id' => $id))->row_array();
    }

    public function getMhsByName($limit, $start){
        $this->db->like('nama', $this->input->post('nama'));
        return $this->db->get('mahasiswa', $limit, $start )->result_array();
    }

    public function countAllMhs(){
        return $this->db->count_all_results('mahasiswa');

        //return $this->db->get('mahasiswa')->num_rows();
    }
    public function editData($id)
    {
        $data = array(
            'nama' => $this->input->post('nama',true),
            'nim' => $this->input->post('nim', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp', true),
        );
        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
    }
}