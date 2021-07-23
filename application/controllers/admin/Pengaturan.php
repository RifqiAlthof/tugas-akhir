<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PengaturanModel');
		if ($this->session->userdata('level') != 'admin') {
			redirect('auth');
		}
	}

	public function index()
	{
		$pengaturan = $this->PengaturanModel->data();
		if ($pengaturan == null) {
			$data['pengaturan'] = '';
		}
		$data['pengaturan'] = $pengaturan;
		$data['title'] = 'Pengaturan';
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/pengaturan');
		$this->load->view('templates/admin_footer');
	}

	public function simpan()
	{
		$this->PengaturanModel->simpan();
//		if ($this->db->affected_rows() > 0) {
		$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible ">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               		<h4><i class="icon fa fa-warning"></i> Berhasil disimpan</h4>		
              </div>
				');
		redirect('admin/pengaturan/index');
//		}
	}

}

/* End of file Pengaturan.php */
/* Location: ./application/controllers/admin/Pengaturan.php */
