<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		if ($this->session->userdata('level') != 'admin') {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'User';
		$data['rows'] = $this->UserModel->getUser()->result();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/user', $data);
		$this->load->view('templates/admin_footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah_User';
		$data['rt'] = $this->db->get('rt')->result();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/user_tambah', $data);
		$this->load->view('templates/admin_footer');
	}

	public function simpan()
	{
		$this->UserModel->simpan();
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible ">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               		<h4><i class="icon fa fa-warning"></i> Berhasil disimpan</h4>		
              </div>
				');
			redirect('admin/user');
		}
	}

	

	public function edit($id)
	{
		$data['title'] = 'Edit user';
		$data['rt'] = $this->db->get('rt')->result();
		$data['row'] = $this->db->get_where('user', ['id' => $id])->row();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/user_edit', $data);
		$this->load->view('templates/admin_footer');
	}

	public function update()
	{
		$this->UserModel->update();
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible ">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               		<h4><i class="icon fa fa-warning"></i> Berhasil diupdate</h4>		
              </div>
				');
			redirect('admin/user');
		}
	}


	public function hapus($id)
	{
		$this->db->delete('user', ['id' => $id]);
			if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible ">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               		<h4><i class="icon fa fa-warning"></i> Berhasil dihapus</h4>		
              </div>
				');
			redirect('admin/user');
		}
	}

	// public function pdf()
	// {
	// 	$this->load->library('dompdf_gen');

 //        $data['rt'] = $this->db->get('rt')->result();
 //        $this->load->view('admin/v_pdf', $data);

 //        $paperSize = 'A4';
 //        $orientation = 'landscape';
 //        $html = $this->output->get_output();

 //        $this->dompdf->set_paper($paperSize, $orientation);
 //        $this->dompdf->load_html($html);
 //        $this->dompdf->render();
 //        $this->dompdf->stream("laporan_mahasiswa.pdf", array('Attachment' => 0));
	// }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */