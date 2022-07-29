<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Visualisasi Informasi';
        $data['produk'] = $this->db->get('produk')->result_array();

        $this->load->view('produk', $data);
    }
}
