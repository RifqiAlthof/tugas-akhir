
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function getUser()
    {
     $this->db->select('*, user.id as id_user, user.nama as nama_user, rt.nama as nama_rt');
     $this->db->from('user');
     $this->db->join('rt', 'rt.id = id_rt', 'left');
     return $this->db->get();
    }

    public function simpan()
    {   
        $data = [
            'id_RT' => $this->input->post('id_rt'),
            'nama' => $this->input->post('nama', true),
            'nik' => password_hash($this->input->post('nik', true), PASSWORD_DEFAULT),
            'ttl' => $this->input->post('ttl'),
            'level' => $this->input->post('level', true),
        ];
        $this->db->insert('user', $data);
    }


	public function update()
	{
		$data = [
            'id' => $this->input->post('id'),
            'id_RT' => $this->input->post('id_rt'),
            'nama' => $this->input->post('nama', true),
            'ttl' => $this->input->post('ttl'),
            
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
	}
}
