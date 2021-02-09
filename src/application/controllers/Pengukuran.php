<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengukuran extends CI_Controller
{
    public function index()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $this->load->view('pengukuran');
        }
    }

    public function tambah_pengukuran()
    {
        $nik = $this->session->nik;
        $tgl_ukur = $this->input->post('tgl_ukur');
        $berat_badan = $this->input->post('berat_badan');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $lingkar_kepala = $this->input->post('lingkar_kepala');
        $lingkar_lengan = $this->input->post('lingkar_lengan_atas');

        $query = $this->pengukuran_model->input($nik, $tgl_ukur, $berat_badan, $tinggi_badan, $lingkar_kepala, $lingkar_lengan);

        if ($query == false) {
            $this->session->set_flashdata('status', 'false');
            redirect('pengukuran');
        } else {
            $this->session->set_flashdata('status', 'true');
            redirect('pengukuran');
        }
    }
}
