<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detailsashwin extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->library('javascript');
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/detailsPageBodyAshwin');
        $this->load->view('templates/footer');
    }

}
