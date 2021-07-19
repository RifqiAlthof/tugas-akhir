<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Auth';
		$data['rt'] = $this->db->get('rt')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('auth', $data);
		$this->load->view('templates/footer');
	}


	public function registrasi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			'required' => '%s masih kosong'
		]);

		$this->form_validation->set_rules('nik', 'NIK', 'trim|required', [
			'required' => '%s masih kosong'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {

			$data = [
				'id_RT' => $this->input->post('id_RT', true),
				'nama' => $this->input->post('nama', true),
				'nik' => password_hash($this->input->post('nik', true), PASSWORD_DEFAULT),
				'ttl' => $this->input->post('ttl', true),
				'level' => 'warga'
			];
			$this->db->insert('user', $data);
			if ($this->db->affected_rows() > 0) {
				
				echo "<script>
				alert('Akun berhasil di registrasi');
				window.location.href ='".site_url('auth')."';

			</script>";
			}
		}
		
	}



	public function login()
	{
		$cek_nama = $this->db->get_where('user',['nama'=> $this->input->post('nama', true)])->row();

		if ($cek_nama) { //jika nama ada
			if (password_verify($this->input->post('nik'), $cek_nama->nik)) {
				
				if ($cek_nama->level == 'admin') { //admin
					
					$data_session = [
						'id' => $cek_nama->id,
						'nama' => $cek_nama->nama,
						'level' => $cek_nama->level,
					];
					$this->session->set_userdata($data_session);
					redirect ('admin/dashboard');

				} else { // warga
					$data_session = [
						'id' => $cek_nama->id,
						'nama' => $cek_nama->nama,
						'level' => $cek_nama->level,
					];
					$this->session->set_userdata($data_session);
					redirect ('home');
				}
				

			} else {
				echo "<script>
				alert('NIK anda salah');
				window.location.href ='".site_url('Auth')."';

			</script>";
			}
			

		} else { //jika tidak
			echo "<script>
				alert('Nama anda salah');
				window.location.href ='".site_url('Auth')."';

			</script>";
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');

	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */