<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Imunisasi extends CI_Controller
{
    public function index()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $data['imunisasi'] = $this->imunisasi_model->showimunisasi($this->session->nik)->result();
            $this->load->view('imunisasi', $data);
        }
    }

    public function input_imunisasi() {
        $nik = $this->session->nik;
        $tgl_imunisasi = $this->input->post('tgl_imunisasi');
        $jenis_imunisasi = $this->input->post('jenis_imunisasi');

        $query = $this->imunisasi_model->update($nik, $tgl_imunisasi, $jenis_imunisasi);
        if ($query > 0) {
            $this->session->set_flashdata('status', 'true');
            redirect('imunisasi');
        } else {
            $this->session->set_flashdata('status', 'false');
            redirect('imunisasi');
        }
    }
}
