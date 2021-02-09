<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info_sehat extends CI_Controller
{
    public function index()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $this->load->view('info-sehat');
        }
    }
}
