<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Getlistings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('listing');
    }

    public function index() {
        $success = $this->listing->getlistings($_POST);
    }

    public function property($id = '000') {
        $success = $this->listing->get_property_info($id);
    }

}
