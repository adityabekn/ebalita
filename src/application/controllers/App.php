<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{
    public function index()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $this->load->view('app');
        }
    }

    public function pengaturan()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $this->load->view('pengaturan');
        }
    }

    public function tentang()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $this->load->view('tentang');
        }
    }

    public function bantuan()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $this->load->view('bantuan');
        }
    }
}
