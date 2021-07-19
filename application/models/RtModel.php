
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RtModel extends CI_Model {

	public function simpan()
	{
		$rt = $this->input->post('nama', true);
		$data = [];
		foreach ($rt as $key => $value) {
			$data[]= [
				'nama' => $rt[$key]
			];
		}

		$this->db->insert_batch('rt', $data);
	}

	public function update()
	{
		$data = ['nama' => $this->input->post('nama', true)];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('rt', $data);
	}

}

/* End of file RtModel.php */
/* Location: ./application/models/RtModel.php */