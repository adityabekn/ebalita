<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function pengukuran_post()
    {
        $nik = $this->post('nik_balita');
        $lk = $this->post('lk_pengukuran');
        $ll = $this->post('ll_pengukuran');

        $data = array(
            'nik_balita' => $nik,
            'tgl_pengukuran' => date('Y-m-d'),
            'bb_pengukuran' => 0,
            'tb_pengukuran' => 0,
            'lk_pengukuran' => $lk,
            'll_pengukuran' => $ll
        );

        $query = $this->crud_model->add('pengukuran', $data);

        if ($query == true) {
            $this->response([
                'status' => true,
                'message' => 'Success'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Failed'
            ], 404);
        }



        // $this->response($result, 200);


        // Users from a data store e.g. database
        // $users = [
        //     ['id' => 0, 'name' => 'John', 'email' => 'john@example.com'],
        //     ['id' => 1, 'name' => 'Jim', 'email' => 'jim@example.com'],
        // ];

        // $id = $this->get('id');

        // if ($id === null) {
        //     // Check if the users data store contains users
        //     if ($users) {
        //         // Set the response and exit
        //         $this->response($users, 200);
        //     } else {
        //         // Set the response and exit
        //         $this->response([
        //             'status' => false,
        //             'message' => 'No users were found'
        //         ], 404);
        //     }
        // } else {
        //     if (array_key_exists($id, $users)) {
        //         $this->response($users[$id], 200);
        //     } else {
        //         $this->response([
        //             'status' => false,
        //             'message' => 'No such user found'
        //         ], 404);
        //     }
        // }
    }
}
