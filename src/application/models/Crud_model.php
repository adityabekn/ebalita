<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_model extends CI_Model
{
    function ceklogin($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function add($table, $data)
    {
        $input = $this->db->insert($table, $data);
        if ($input) {
            return  true;
        } else {
            return  false;
        }
    }

    public function delete($where, $table)
    {
        @$a = $this->db->where($where);
        @$b = $this->db->delete($table);
        if ($a && $b) {
            return  true;
        } else {
            return  false;
        }
    }

    public function update($where, $data, $table)
    {
        @$a = $this->db->where($where);
        @$b = $this->db->update($table, $data);
        if ($a && $b) {
            return  true;
        } else {
            return  false;
        }
    }
}
