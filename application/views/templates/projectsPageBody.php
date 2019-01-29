<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
    .navigation-clean-button{  
        background:#212121;
        padding-top:6px;
        padding-bottom:10px;
        color:whitesmoke;
        border-radius:0;
        box-shadow:none;
        border:0;
        margin-bottom:0;
    }

    .navigation-clean-button .navbar-brand{
        font-weight:bold;
        color:inherit;
    }
    .navigation-clean-button .navbar-brand:hover{
        color:#9E9E9E;
    }
    body {
        font-family: 'Raleway', sans-serif;
        background-color: whitesmoke;
    }
    .overlaytext {
        position: absolute;
        bottom: 0% ;
        left: 0%;
        background-color: whitesmoke;
        background: rgba(238, 238, 238, 0.8);
        width: 100%;
        height: 18%;
        font-size: 14px;
        color: whitesmoke;        //Darshan's code  
    }
    .feat{
        background-repeat: no-repeat;
        background-size: cover; 
        height:300px; 
        width: 31%;
        background-position: center;
    }
    .feat:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-repeat: no-repeat;
        background-size: cover;
        border: 1px solid white;
        height: 300px;   //Darshan's code
    }
    .placeholder-control::placeholder { 
        color: grey;
        font-size: 13px;
    }
</style>
    

<div class="container">
    <h2 style="text-align:center">Our Projects</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-left: 24%; margin-top: 2%">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg placeholder-control" placeholder="Apartments, Place.." />
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-lg" type="button">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="margin-top: 4%; text-align: center">
            <div class="col-md-3 col-xs-4 feat" style="margin-right: 3%;background-image: url(<?php echo base_url('assets/img/1.jpg'); ?>);">
                <div class="overlaytext"><p style="font-size: 17px;color: black;margin-top: 4%">Lorem ipsum</p></div>
            </div>
            <div class="col-md-3 col-xs-4 feat" style="margin-right: 3%;background-image: url(<?php echo base_url('assets/img/2.jpg'); ?>);">
                <div class="overlaytext"><p style="font-size: 17px;color: black;margin-top: 4%">Lorem ipsum</p></div>
            </div>
            <div class="col-md-3 col-xs-4 feat" style="background-image: url(<?php echo base_url('assets/img/3.jpg'); ?>);">
                <div class="overlaytext"><p style="font-size: 17px;color: black;margin-top: 4%">Lorem ipsum</p></div>
            </div>
            <div class="col-md-3 col-xs-4 feat" style="margin-right: 3%;background-image: url(<?php echo base_url('assets/img/4.jpg'); ?>);margin-top: 3%">
                <div class="overlaytext"><p style="font-size: 17px;color: black;margin-top: 4%">Lorem ipsum</p></div>
            </div>
            <div class="col-md-3 col-xs-4 feat" style="margin-right: 3%;background-image: url(<?php echo base_url('assets/img/5.jpg'); ?>);margin-top: 3%">
                <div class="overlaytext"><p style="font-size: 17px;color: black;margin-top: 4%">Lorem ipsum</p></div>
            </div>
            <div class="col-md-3 col-xs-4 feat" style="background-image: url(<?php echo base_url('assets/img/1.jpg'); ?>);margin-top: 3%">
                <div class="overlaytext"><p style="font-size: 17px;color: black;margin-top: 4%">Lorem ipsum</p></div>
            </div>
            <div class="col-md-3 col-xs-4 feat" style="margin-right: 3%;background-image: url(<?php echo base_url('assets/img/2.jpg'); ?>);margin-top: 3%; margin-bottom: 5%">
                <div class="overlaytext"><p style="font-size: 17px;color: black;margin-top: 4%">Lorem ipsum</p></div>
            </div>
            <div class="col-md-3 col-xs-4 feat" style="margin-right: 3%;background-image: url(<?php echo base_url('assets/img/3.jpg'); ?>);margin-top: 3%; margin-bottom: 5%">
                <div class="overlaytext"><p style="font-size: 17px;color: black;margin-top: 4%">Lorem ipsum</p></div>
            </div>
            <div class="col-md-3 col-xs-4 feat" style="background-image: url(<?php echo base_url('assets/img/4.jpg'); ?>);margin-top: 3%; margin-bottom: 5%">
                <div class="overlaytext"><p style="font-size: 17px;color: black;margin-top: 4%">Lorem ipsum</p></div>
            </div>
        </div> 
    </div>
</div>
<nav aria-label="..." style="text-align:center">
    <ul class="pagination">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>