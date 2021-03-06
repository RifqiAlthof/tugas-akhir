<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function _construct()
	{
		parent::__construct();
		$this->load->model('HomeModel');
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['kandidat'] = $this->db->get('kandidat')->result();
		$data['kandidat1'] = $this->db->get_where('suara', ['nama_kandidat' => 'calon ke-1'])->num_rows();
		$data['kandidat2'] = $this->db->get_where('suara', ['nama_kandidat' => 'calon ke-2'])->num_rows();
		$data['kandidat3'] = $this->db->get_where('suara', ['nama_kandidat' => 'calon ke-3'])->num_rows();
		$data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row();

		$d = $this->db->query("SELECT * from setting")->row();
		$today = date('Y-m-d h:i:s');
		$mulai = date('Y-m-d h:i:s', strtotime($d->mulai));
		$selesai = date('Y-m-d h:i:s', strtotime($d->selesai));

		$data['waktu'] =[
			'today' => $today,
			'mulai' => $mulai,
			'selesai' => $selesai
		];
		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}

	public function visimisi($id_kandidat)
	{
		$data['title'] = 'Visi & Misi';
		$data['kandidat'] = $this->db->get_where('kandidat', ['id' => $id_kandidat])->row();
		$data['visimisi'] = $this->db->get_where('visimisi', ['id_kandidat' => $id_kandidat])->row();
		$this->load->view('templates/header', $data);
		$this->load->view('visimisi', $data);
		$this->load->view('templates/footer');
	}

	public function pilih_kandidat()
	{
		$this->load->model('HomeModel');
		$this->HomeModel->pilih_kandidat();
		$this->HomeModel->update_status_user();
		if ($this->db->affected_rows() > 0) {
			$result = ['success' => true];
		} else {
			$result = ['success' => false];
		}

		echo json_encode($result);
	}

	public function profil()
	{
		$data['title'] = 'Profil Taman Seruni';
		$this->load->view('templates/header2', $data);
		$this->load->view('templates/profil2');
		$this->load->view('templates/footer');

	}

	public function pengaturan()
	{
		$data['title'] = 'Pengaturan';
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/pengaturan');
		$this->load->view('templates/admin_footer');
	}

	public function simpan()
	{
		$this->HomeModel->simpan();
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible ">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               		<h4><i class="icon fa fa-warning"></i> Berhasil disimpan</h4>		
              </div>
				');
			redirect('admin/pengaturan');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
