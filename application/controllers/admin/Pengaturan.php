<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function index()
	{
	
		$data['title'] = 'Pengaturan';
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/pengaturan');
		$this->load->view('templates/admin_footer');
	
	
	}

}

/* End of file Pengaturan.php */
/* Location: ./application/controllers/admin/Pengaturan.php */
