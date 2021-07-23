<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengaturanModel extends CI_Model
{

	public function data()
	{
		return $this->db->get('setting')->row();
	}

	public function simpan()
	{
		$id = $this->input->post('id', true);
		$data = [
			'mulai' => $this->input->post('mulai', true),
			'selesai' => $this->input->post('selesai', true),
		];
		$this->db->where('id', $id);
		$this->db->update('setting', $data);
//		$this->db->update('setting', ['id' => $id], $data);
	}


}

/* End of file PengaturanModel.php */
/* Location: ./application/models/PengaturanModel.php */
