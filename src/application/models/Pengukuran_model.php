<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengukuran_model extends CI_Model
{
    function input($nik, $tgl, $bb, $tb, $lk, $ll)
    {
        $nik_balita = $this->authentication_model->showbalita($nik)->row()->nik_balita;

        $where = array(
            'nik_balita' => $nik_balita,
            'tgl_pengukuran' => $tgl,
            'bb_pengukuran' => $bb,
            'tb_pengukuran' => $tb,
            'lk_pengukuran' => $lk,
            'll_pengukuran' => $ll
        );

        $query = $this->crud_model->add('pengukuran', $where);

        return $query;
    }

    function showukur($nik)
    {
        $nik_balita = $this->authentication_model->showbalita($nik)->row()->nik_balita;

        $this->db->select('*, TIMESTAMPDIFF(MONTH,tgl_balita,tgl_pengukuran) as umur, TIMESTAMPDIFF(DAY,tgl_balita,tgl_pengukuran) as hari' );
        $this->db->from('pengukuran');
        $this->db->join('balita', 'pengukuran.nik_balita = balita.nik_balita');
        $this->db->where('pengukuran.nik_balita', $nik_balita);
        $this->db->order_by("tgl_pengukuran", "DESC");
        return $this->db->get();
    }

    function showukurlimit($nik)
    {
        $nik_balita = $this->authentication_model->showbalita($nik)->row()->nik_balita;

        $this->db->select('*, TIMESTAMPDIFF(MONTH,tgl_balita,tgl_pengukuran) as umur, TIMESTAMPDIFF(DAY,tgl_balita,tgl_pengukuran) as hari');
        $this->db->from('pengukuran');
        $this->db->join('balita', 'pengukuran.nik_balita = balita.nik_balita');
        $this->db->where('pengukuran.nik_balita', $nik_balita);
        $this->db->order_by("tgl_pengukuran", "DESC");
        $this->db->limit(1);
        return $this->db->get();
    }
}
