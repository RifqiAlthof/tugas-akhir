<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

	public function pilih_kandidat()
	{	
		$data = [
			'id_user' => $this->input->post('id_user'),
			'nama_kandidat' => $this->input->post('nama_kandidat'),

		];
		$this->db->insert('suara', $data);
	}

	public function update_status_user()
	{
		$data = ['status' => 1];
		$this->db->where('id', $this->input->post('id_user'));
		$this->db->update('user', $data);
	}

		 public function simpan()
    {   
        $data = [
            'id' => $this->input->post('id'),
            'mulai' => $this->input->post('mulai', true),
            'selesai' => $this->input->post('selesai', true),
            
        ];
        $this->db->insert('setting', $data);
    }

}