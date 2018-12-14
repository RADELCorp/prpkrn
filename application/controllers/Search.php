<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/searchPageBody');
        $this->load->view('templates/footer');
    }

}
