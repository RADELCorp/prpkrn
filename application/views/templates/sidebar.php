<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/css/Sidebar-Menu-1.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/Sidebar-Menu.css'); ?>">
<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"> <a href="#">Home </a></li>
            <li> <a href="#">Dashboard </a></li>
            <li> <a href="#">My Listings </a></li>
            <li> <a href="<?php echo base_url('profile/addlisting'); ?>">Add Listing </a></li>
            <li> <a href="#">Enquiries </a></li>
        </ul>
    </div>
    <div class="page-content-wrapper">
        <div class="container-fluid"><a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a></div>  