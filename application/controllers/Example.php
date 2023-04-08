<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller{
    public function index()
    {
        $data = $this->db->get('barang')->result();
        var_dump($data); die;
        $data['title'] = 'Dashboard';
        $this->load->view('_layouts/header', $data);
        $this->load->view('_layouts/sidebar', $data);
        $this->load->view('_layouts/navbar');
        $this->load->view('content');
        $this->load->view('_layouts/footer');
    }
}