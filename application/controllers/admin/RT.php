<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RT extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('RtModel');
		if ($this->session->userdata('level') != 'admin') {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'RT';
		$data['rows'] = $this->db->get('rt')->result();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/rt', $data);
		$this->load->view('templates/admin_footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah RT';
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/rt_tambah', $data);
		$this->load->view('templates/admin_footer');
	}


	public function simpan()
	{
		$this->RtModel->simpan();
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible ">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               		<h4><i class="icon fa fa-warning"></i> Berhasil disimpan</h4>		
              </div>
				');
			redirect('admin/rt');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit RT';
		$data['row'] = $this->db->get_where('rt', ['id' => $id])->row();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/rt_edit', $data);
		$this->load->view('templates/admin_footer');
	}

	public function update()
	{
		$this->RtModel->update();
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible ">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               		<h4><i class="icon fa fa-warning"></i> Berhasil diupdate</h4>		
              </div>
				');
			redirect('admin/rt');
		}
	}


	public function hapus($id)
	{
		$this->db->delete('rt', ['id' => $id]);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               		<h4><i class="icon fa fa-warning"></i> Berhasil dihapus</h4>		
              </div>
				');
			redirect('admin/rt');
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */