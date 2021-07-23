<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengaturanModel extends CI_Controller {

	
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

/* End of file PengaturanModel.php */
/* Location: ./application/models/PengaturanModel.php */
