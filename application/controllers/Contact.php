<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('contact');
    }

    public function map($number = '', $x = '') {
        echo $number;
        echo $x;
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/footer');
    }

}
