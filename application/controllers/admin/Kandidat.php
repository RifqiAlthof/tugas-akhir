<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('KandidatModel');
		if ($this->session->userdata('level') != 'admin') {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Kandidat';
		$data['rows'] = $this->db->get('kandidat')->result();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kandidat', $data);
		$this->load->view('templates/admin_footer');
	}

	public function tambah()
	{
		$data['title'] = 'Kandidat';
		$data['nama_kandidat'] = $this->db->get('kandidat')->result();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kandidat_tambah', $data);
		$this->load->view('templates/admin_footer');
	}

	public function simpan()
	{
		$this->KandidatModel->simpan();
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible ">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               		<h4><i class="icon fa fa-warning"></i> Berhasil disimpan</h4>		
              </div>
				');
			redirect('admin/kandidat');
		}
	}	

	public function edit($id)
	{
		$data['title'] = 'Edit Kandidat';
		$data['row'] = $this->db->get_where('kandidat', ['id' => $id])->row();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kandidat_edit', $data);
		$this->load->view('templates/admin_footer');
	}

	public function update()
	{
		$this->KandidatModel->update();
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible ">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               		<h4><i class="icon fa fa-warning"></i> Berhasil diupdate</h4>		
              </div>
				');
			redirect('admin/kandidat');
		}
	}

	public function hapus($id)
	{
		$this->db->delete('kandidat', ['id' => $id]);
			if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible ">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               		<h4><i class="icon fa fa-warning"></i> Berhasil dihapus</h4>		
              </div>
				');
			redirect('admin/kandidat');
		}
	}


	

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */