<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Imunisasi_model extends CI_Model
{
    function showimunisasi($nik)
    {
        $nik_balita = $this->authentication_model->showbalita($nik)->row()->nik_balita;

        $this->db->select('*');
        $this->db->from('imunisasi');
        $this->db->join('balita', 'imunisasi.nik_balita = balita.nik_balita');
        $this->db->where('imunisasi.nik_balita', $nik_balita);
        return $this->db->get();
    }

    function update($nik, $tgl, $jenis)
    {
        $nik_balita = $this->authentication_model->showbalita($nik)->row()->nik_balita;

        $where = array(
            'nik_balita' => $nik_balita,
            'jenis_imunisasi' => $jenis
        );

        $data = array(
            'tgl_imunisasi' => $tgl,
            'status_imunisasi' => 'Sudah'
        );

        $this->crud_model->update($where, $data, 'imunisasi');

        return $this->db->affected_rows();
    }

    function add($nik_balita) {
        $data = array(
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'Hepatitis B',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'Polio',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'BCG',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'DTP',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'Pneumokokus',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'Rotavirus',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'Influenza',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'Campak',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'MMR/MR',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'Varisela',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'HPV',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'JE',
                'status_imunisasi' => 'Belum'
            ),
            array(
                'nik_balita' => $nik_balita,
                'jenis_imunisasi' => 'Dengue',
                'status_imunisasi' => 'Belum'
            ),
        );

        $input = $this->db->insert_batch('imunisasi', $data);
        if ($input) {
            return  true;
        } else {
            return  false;
        }
    }
}
