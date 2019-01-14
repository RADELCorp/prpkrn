<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
        //($this->auth->is_user_logged_in() ? '' : $_SESSION['error_msg'] = '* Please login to access your profile.' AND redirect('/'));
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/sidebar-footer');
    }

    public function addlisting() {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('addlisting');
        $this->load->view('templates/sidebar-footer');
    }

}
