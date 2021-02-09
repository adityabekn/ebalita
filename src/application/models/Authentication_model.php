<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication_model extends CI_Model
{
    function login($email, $pass)
    {
        $where = array(
            'email_orangtua' => $email,
            'password_orangtua' => $pass
        );

        $query = $this->crud_model->ceklogin('orangtua', $where);

        if ($query->num_rows() > 0) {
            $nik = $query->row()->nik_orangtua;
            $nama = $query->row()->nama_orangtua;

            $this->session->log_stat = true;
            $this->session->nik = $nik;
            $this->session->nama = $nama;

            return true;
        }

        return false;
    }

    function showbalita($nik)
    {
        $this->db->select('*');
        $this->db->from('balita');;
        $this->db->where('nik_orangtua', $nik);
        return $this->db->get();
    }

    function showorangtua($nik)
    {
        $this->db->select('*');
        $this->db->from('orangtua');;
        $this->db->where('nik_orangtua', $nik);
        return $this->db->get();
    }

    function signup($nama_orangtua, $nik_orangtua, $tgl_orangtua, $email_orangtua, $password_orangtua, $nama_balita, $nik_balita, $tgl_balita, $kelamin_balita)
    {
        $where = array(
            'nik_orangtua' => $nik_orangtua,
            'nama_orangtua' => $nama_orangtua,
            'tgl_orangtua' => $tgl_orangtua,
            'email_orangtua' => $email_orangtua,
            'password_orangtua' => $password_orangtua
        );

        $where1 = array(
            'nik_balita' => $nik_balita,
            'nik_orangtua' => $nik_orangtua,
            'nama_balita' => $nama_balita,
            'tgl_balita' => $tgl_balita,
            'kelamin_balita' => $kelamin_balita
        );

        $where2 = array(
            'nik_balita' => $nik_balita,
            'tgl_pengukuran' => $tgl_balita
        );

        $query = $this->crud_model->add('orangtua', $where);

        $query1 = $this->crud_model->add('balita', $where1);

        $query2 = $this->imunisasi_model->add($nik_balita);

        $query3 = $this->crud_model->add('pengukuran', $where2);

        if ($query == true and $query1 == true and $query2 == true and $query3 == true) {
            $cek = 'true';
            return $cek;
        } else {
            $cek = 'false';
            return $cek;
        }
    }

    function ceknik($nik_orangtua)
    {
        $where = array(
            'nik_orangtua' => $nik_orangtua
        );

        $query = $this->crud_model->ceklogin('orangtua', $where);

        if ($query->num_rows() > 0) {
            return 'false';
        } else {
            return 'true';
        }
    }

    function cekemail($email_orangtua)
    {
        $where = array(
            'email_orangtua' => $email_orangtua
        );

        $query = $this->crud_model->ceklogin('orangtua', $where);

        if ($query->num_rows() > 0) {
            return 'false';
        } else {
            return 'true';
        }
    }

    function ceknikbalita($nik_balita)
    {
        $where = array(
            'nik_balita' => $nik_balita
        );

        $query = $this->crud_model->ceklogin('balita', $where);

        if ($query->num_rows() > 0) {
            return 'false';
        } else {
            return 'true';
        }
    }
}
