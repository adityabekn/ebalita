<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_balita extends CI_Controller
{
    public function index()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $data['balita'] = $this->authentication_model->showbalita($this->session->nik)->row();
            $data['bb'] = $this->pengukuran_model->showukurlimit($this->session->nik)->row();
            $this->load->view('profil-balita', $data);
        }
    }

    public function editprofil()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $data['balita'] = $this->authentication_model->showbalita($this->session->nik)->row();
            $this->load->view('profil-balita-edit', $data);
        }
    }

    public function simpanprofil()
    {
        $nama = $this->input->post('nama_balita');
        $nik = $this->input->post('nik_balita');
        $tgl = $this->input->post('tgl_balita');
        $kelamin = $this->input->post('kelamin_balita');
        $nik_orangtua = $this->input->post('nik_orangtua');

        $where = array(
            'nik_orangtua' => $nik_orangtua
        );

        $data = array(
            'nik_balita' => $nik,
            'nama_balita' => $nama,
            'tgl_balita' => $tgl,
            'kelamin_balita' => $kelamin
        );

        $this->crud_model->update($where, $data, 'balita');

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('status', 'true');
            redirect('profil_balita');
        } else {
            $this->session->set_flashdata('status', 'false');
            redirect('profil_balita');
        }
    }
}
