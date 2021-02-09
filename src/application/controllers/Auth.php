<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{
		if (isset($this->session->log_stat)) {
			redirect('app');
		} else {
			$this->load->view('auth');
		}
	}

	public function ceklogin()
	{
		// if (isset($this->session->log_stat)) {
		// 	redirect('home');
		// } else {
		$email = $this->input->post('email');
		$pass = $this->input->post('password');

		$query = $this->authentication_model->login($email, $pass);

		if ($query == false) {
			$this->session->set_flashdata('status', 'false');
			redirect('auth');
		} else {
			redirect('app');
		}
		// }
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

	public function signup()
	{
		$nama_orangtua = $this->input->post('nama_orangtua');
		$nik_orangtua = $this->input->post('nik_orangtua');
		$tgl_orangtua = $this->input->post('tgl_orangtua');
		$email_orangtua = $this->input->post('email_orangtua');
		$password_orangtua = $this->input->post('password_orangtua');

		$nama_balita = $this->input->post('nama_balita');
		$nik_balita = $this->input->post('nik_balita');
		$tgl_balita = $this->input->post('tgl_balita');
		$kelamin_balita = $this->input->post('kelamin_balita');

		if (!empty($nama_orangtua) && !empty($nik_orangtua) && !empty($tgl_orangtua) && !empty($email_orangtua) && !empty($password_orangtua) && !empty($nama_balita) && !empty($nik_balita) && !empty($tgl_balita) && !empty($kelamin_balita)) {
			// Cek nik orangtua
			$query = $this->authentication_model->ceknik($nik_orangtua);
			if ($query == 'true') {
				//Cek email orangtua
				$query = $this->authentication_model->cekemail($email_orangtua);
				if ($query == 'true') {
					//Cek nik balita
					$query = $this->authentication_model->ceknikbalita($nik_balita);
					if ($query == 'true') {
						//Do magic
						$query1 = $this->authentication_model->signup($nama_orangtua, $nik_orangtua, $tgl_orangtua, $email_orangtua, $password_orangtua, $nama_balita, $nik_balita, $tgl_balita, $kelamin_balita);
						if ($query1 == true) {
							$this->session->set_flashdata('status', 'true');
							redirect('auth');
						} else {
							$this->session->set_flashdata('status', 'failed');
							redirect('auth');
						}
					} else {
						$this->session->set_flashdata('status', 'duplicate');
						redirect('auth');
					}
				} else {
					$this->session->set_flashdata('status', 'duplicate');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('status', 'duplicate');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('status', 'failed');
			redirect('auth');
		}
	}
}
