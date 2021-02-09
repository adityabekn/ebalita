<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_orangtua extends CI_Controller
{
    public function index()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $data['orangtua'] = $this->authentication_model->showorangtua($this->session->nik)->row();
            $this->load->view('profil-orangtua', $data);
        }
    }

    public function editprofil()
    {
        if (!isset($this->session->log_stat)) {
            redirect('auth');
        } else {
            $data['orangtua'] = $this->authentication_model->showorangtua($this->session->nik)->row();
            $this->load->view('profil-orangtua-edit', $data);
        }
    }

    public function simpanprofil()
    {
        $nik = $this->input->post('nik_orangtua');
        $nama = $this->input->post('nama_orangtua');
        $tgl = $this->input->post('tgl_orangtua');
        $email = $this->input->post('email_orangtua');

        $where = array(
            'nik_orangtua' => $this->session->nik
        );

        $data = array(
            'nik_orangtua' => $nik,
            'nama_orangtua' => $nama,
            'tgl_orangtua' => $tgl,
            'email_orangtua' => $email
        );

        $query = $this->authentication_model->cekemail($email);
        if ($query == 'true') {
            $this->crud_model->update($where, $data, 'orangtua');

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('status', 'true');
                $this->session->nik = $nik;
                $this->session->nama = $nama;
                redirect('profil_orangtua');
            } else {
                $this->session->set_flashdata('status', 'false');
                redirect('profil_orangtua');
            }
        } else {
            $this->session->set_flashdata('status', 'duplicate');
            redirect('profil_orangtua');
        }
    }
}
