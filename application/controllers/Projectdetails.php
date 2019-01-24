<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Projectdetails extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->library('javascript');
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/projectsDetailsPage');
        $this->load->view('templates/footer');
        $this->load->view('templates/lightbox_script');
    }

}
