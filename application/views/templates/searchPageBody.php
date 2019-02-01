<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
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

    .feat{
        margin-bottom: 15px;
        background-repeat: no-repeat;
        background-size: cover;
        height:250px;
        padding: 10px;
    }
    .placeholder-control::placeholder {
        color: grey;
        font-size: 13px;
    }
    .overlay0 {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        overflow: hidden;
        width: 100%;
        height: 15%;
        transition: .3s;
    }

    .container:hover .overlay0 {
        height: 55%;
    }
    .overlay1 {
        position: absolute;
        bottom: 15%;
        max-height: 30%;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.8);
        overflow: hidden;
        width: 100%;
        transition: 0.3s;
    }

    .container:hover .overlay1 {
        bottom: 55%;
    }
    .search-listing-container{
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        position: relative;
        cursor: pointer;
    }
    .overlay0 .hoverthumbnail{
        padding: 25px;
    }
    .overlay0 .amount{
        font-size: 17px;
        padding: 5px;
        font-family: serif;
    }
    .overlay0 .bhk{
        font-size: 10px;
        padding : 6px;
        margin-top: 2px;
    }
    .rupee-symbol::after{
        content: '\20B9';
        color: green;
    }
    .status {
        text-align: center;
        font-size: 12px;
        color: white;
        font-weight: bold;
        background: rgba(0, 0, 0, 0.7);
        height: auto;
    }
    .bhk, .residential, .price{
        padding:4px;
    }
    .filters{
        background-color: #eeeeee;
        height: auto;
        margin-top: 10px;
        padding-bottom: 10px;
        margin-left: 15px;
        letter-spacing: 2px;
        font-family: lato;
    }
    .fil{
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 14px;
    }
    .fil input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #e0e0e0;
    }
    .fil:hover input ~ .checkmark {
        background-color: #ccc;
    }
    .fil input:checked ~ .checkmark {
        background-color: #2196F3;
    }
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }
    .fil input:checked ~ .checkmark:after {
        display: block;
    }
    .fil .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        transform: rotate(45deg);
    }
    @media(max-width:600px){
        .container .overlay0 {
            height: 55%;
        }
        .container .overlay1 {
            bottom: 55%;
        }
        .overlay0 .hoverthumbnail {
            padding: 7px;
        }
        .overlay0 .bhk{
            font-size: 12px;
            padding : 6px;
            margin-top: 2px;
        }
    }
    @media (max-width:600px){
        .filters{
            display:none;
        }
    }
    .accordion {
        margin-left: 30%;
        padding: 6px;
        width: 40%;
        border: none;
        outline: none;
        transition: 0.4s;
    }

    .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
    }
    @media (min-width:600px){
        .accordion{
            display:none;
        }
    }
</style>
<div class="container" style="padding: 10px; text-align: center">
    <div>
        <input type="text" placeholder="Locality, Pincode,etc." style="width: 70%;height: 40px;padding: 5px;">
        <button class="btn" style="height:40px; border-radius: 0px;">Search</button>
    </div>
</div>
<div class="col-md-12">
    <button class="accordion btn btn-primary" id="accordion">
        <div class="row">
            <h4 style="text-align: center; letter-spacing: 1.5px;"><b>FILTERS</b></h4>
            <span id="fildown" class="glyphicon glyphicon-chevron-down" onclick="filtoggle(this)" style="text-align: right"></span>
        </div>
    </button>

    <div class="panel">
        <div class="bhk col-md-12 col-xs-12">
            <h5><br/><b>BHK TYPE</b></h5>
            <label class="container fil col-md-4 col-xs-6">
                <input type="checkbox">1
                <span class="checkmark"></span>
            </label>
            <label class="container fil col-md-4 col-xs-6">
                <input type="checkbox">2
                <span class="checkmark"></span>
            </label>
            <label class="container fil col-md-4 col-xs-6">
                <input type="checkbox">3
                <span class="checkmark"></span>
            </label>
            <label class="container fil col-md-4 col-xs-6">
                <input type="checkbox">4
                <span class="checkmark"></span>
            </label>
            <label class="container fil col-md-6 col-xs-6">
                <input type="checkbox">4+
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="residential col-md-12 col-xs-12">
            <h5><b>RESIDENTIAL</b></h5>
            <label class="container fil">
                <input type="checkbox">Flat
                <span class="checkmark"></span>
            </label>
            <label class="container fil">
                <input type="checkbox">Villa/Independent House
                <span class="checkmark"></span>
            </label>
            <label class="container fil">
                <input type="checkbox">Penthouse
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="price col-md-12 col-xs-12">
            <h5><b>PRICE</b></h5>
            <label class="container fil">
                <input type="checkbox">4,000 - 8,000
                <span class="checkmark"></span>
            </label>
            <label class="container fil">
                <input type="checkbox">8,000 - 15,000
                <span class="checkmark"></span>
            </label>
            <label class="container fil">
                <input type="checkbox">15,000 - 25,000
                <span class="checkmark"></span>
            </label>
            <label class="container fil">
                <input type="checkbox">25,000 +
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
</div>
<div class="col-md-12 col-xs-12">
    <div class="col-md-2 col-xs-11 filters" style="">
        <h3 style="text-align: center"><u><b>FILTERS</b></u></h3>
        <div class="bhk col-md-12 col-xs-12">
            <h5><br/><b>BHK TYPE</b></h5>
            <label class="container fil col-md-4 col-xs-6">
                <input type="checkbox">1
                <span class="checkmark"></span>
            </label>
            <label class="container fil col-md-4 col-xs-6">
                <input type="checkbox">2
                <span class="checkmark"></span>
            </label>
            <label class="container fil col-md-4 col-xs-6">
                <input type="checkbox">3
                <span class="checkmark"></span>
            </label>
            <label class="container fil col-md-4 col-xs-6">
                <input type="checkbox">4
                <span class="checkmark"></span>
            </label>
            <label class="container fil col-md-6 col-xs-6">
                <input type="checkbox">4+
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="residential col-md-12 col-xs-12">
            <h5><b>RESIDENTIAL</b></h5>
            <label class="container fil">
                <input type="checkbox">Flat
                <span class="checkmark"></span>
            </label>
            <label class="container fil">
                <input type="checkbox">Villa/Independent House
                <span class="checkmark"></span>
            </label>
            <label class="container fil">
                <input type="checkbox">Penthouse
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="price col-md-12 col-xs-12">
            <h5><b>PRICE</b></h5>
            <label class="container fil">
                <input type="checkbox">4,000 - 8,000
                <span class="checkmark"></span>
            </label>
            <label class="container fil">
                <input type="checkbox">8,000 - 15,000
                <span class="checkmark"></span>
            </label>
            <label class="container fil">
                <input type="checkbox">15,000 - 25,000
                <span class="checkmark"></span>
            </label>
            <label class="container fil">
                <input type="checkbox">25,000 +
                <span class="checkmark"></span>
            </label>

        </div>
    </div>
    <div class="col-md-9 col-xs-12">
        <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/11.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-md-3 col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr</div>
                            <div class="col-md-5 col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-md-4 col-xs-12 bhk text-center" ><i class="fa fa-phone" style="color:red;"></i>&nbsp;Contact Now</div>
                            <div class="col-xs-12 hoverthumbnail">
                                <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                                <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                                <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                                <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                                <!--<div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/12.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-md-3 col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr</div>
                            <div class="col-md-5 col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-md-4 col-xs-12 bhk text-center" ><i class="fa fa-phone" style="color:red;"></i>&nbsp;Contact Now</div>
                            <div class="col-xs-12 hoverthumbnail">
                                <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                                <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                                <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                                <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                                <!--<div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/13.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-md-3 col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr</div>
                            <div class="col-md-5 col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-md-4 col-xs-12 bhk text-center" ><i class="fa fa-phone" style="color:red;"></i>&nbsp;Contact Now</div>
                            <div class="col-xs-12 hoverthumbnail">
                                <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                                <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                                <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                                <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                                <!--<div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/14.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-md-3 col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr</div>
                            <div class="col-md-5 col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-md-4 col-xs-12 bhk text-center" ><i class="fa fa-phone" style="color:red;"></i>&nbsp;Contact Now</div>
                            <div class="col-xs-12 hoverthumbnail">
                                <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                                <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                                <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                                <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                                <!--<div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/15.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-md-3 col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr</div>
                            <div class="col-md-5 col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-md-4 col-xs-12 bhk text-center" ><i class="fa fa-phone" style="color:red;"></i>&nbsp;Contact Now</div>
                            <div class="col-xs-12 hoverthumbnail">
                                <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                                <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                                <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                                <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                                <!--<div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/16.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-md-3 col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr</div>
                            <div class="col-md-5 col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-md-4 col-xs-12 bhk text-center" ><i class="fa fa-phone" style="color:red;"></i>&nbsp;Contact Now</div>
                            <div class="col-xs-12 hoverthumbnail">
                                <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                                <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                                <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                                <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                                <!--<div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/17.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-md-3 col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr</div>
                            <div class="col-md-5 col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-md-4 col-xs-12 bhk text-center" ><i class="fa fa-phone" style="color:red;"></i>&nbsp;Contact Now</div>
                            <div class="col-xs-12 hoverthumbnail">
                                <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                                <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                                <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                                <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                                <!--<div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/13.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-md-3 col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr</div>
                            <div class="col-md-5 col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-md-4 col-xs-12 bhk text-center" ><i class="fa fa-phone" style="color:red;"></i>&nbsp;Contact Now</div>
                            <div class="col-xs-12 hoverthumbnail">
                                <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                                <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                                <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                                <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                                <!--<div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/14.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-md-3 col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr</div>
                            <div class="col-md-5 col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-md-4 col-xs-12 bhk text-center" ><i class="fa fa-phone" style="color:red;"></i>&nbsp;Contact Now</div>
                            <div class="col-xs-12 hoverthumbnail">
                                <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                                <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                                <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                                <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                                <!--<div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/15.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-md-3 col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr</div>
                            <div class="col-md-5 col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-md-4 col-xs-12 bhk text-center" ><i class="fa fa-phone" style="color:red;"></i>&nbsp;Contact Now</div>
                            <div class="col-xs-12 hoverthumbnail">
                                <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                                <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                                <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                                <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                                <!--<div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/16.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-md-3 col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr</div>
                            <div class="col-md-5 col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-md-4 col-xs-12 bhk text-center" ><i class="fa fa-phone" style="color:red;"></i>&nbsp;Contact Now</div>
                            <div class="col-xs-12 hoverthumbnail">
                                <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                                <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                                <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                                <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                                <!--<div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<script>
    var custom_values = [10000, 100000, 1000000, 10000000, 100000000];

    var my_from = custom_values.indexOf(10);
    var my_to = custom_values.indexOf(10000);

    $(".js-range-slider").ionRangeSlider({
        type: "double",
        grid: false,
        from: my_from,
        to: my_to,
        values: custom_values,
        prettify_enabled: true,
        prettify_separator: ","
    });

</script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>
<script>
    $('#accordion').click(function () {
        $('#fildown').toggle('500');
        $("i", this).toggleClass("glyphicon glyphicon-chevron-up");
    });
</script>
