<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertumbuhan extends CI_Controller
{
    public function index()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $this->load->view('pertumbuhan');
        }
    }

    public function berat_badan()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $data['bb'] = $this->pengukuran_model->showukur($this->session->nik)->result();
            $this->load->view('berat-badan', $data);
        }
    }

    public function tinggi_badan()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $data['tb'] = $this->pengukuran_model->showukur($this->session->nik)->result();
            $this->load->view('tinggi-badan', $data);
        }
    }

    public function lingkar_kepala()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $data['lk'] = $this->pengukuran_model->showukur($this->session->nik)->result();
            $this->load->view('lingkar-kepala', $data);
        }
    }

    public function lingkar_lengan()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $data['ll'] = $this->pengukuran_model->showukur($this->session->nik)->result();
            $this->load->view('lingkar-lengan-atas', $data);
        }
    }
}
