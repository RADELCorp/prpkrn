<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    #custom-search-input{
        padding: 3px;
        border: solid 1px #E4E4E4;
        border-radius: 6px;
        background-color: #fff;
    }

    #custom-search-input input{
        border: 0;
        box-shadow: none;
    }

    #custom-search-input button{
        margin: 2px 0 0 0;
        background: none;
        box-shadow: none;
        border: 0;
        color: #666666;
        padding: 0 8px 0 10px;
        border-left: solid 1px #ccc;
    }

    #custom-search-input button:hover{
        border: 0;
        box-shadow: none;
        border-left: solid 1px #ccc;
    }

    #custom-search-input .glyphicon-search{
        font-size: 23px;
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
        padding: 10px;
    }
    .overlay0 .amount, .overlay0 .bhk{
        font-size: 15px;
        padding: 5px;
    }
    .rupee-symbol::after{
        content: '\20B9';
        color: green;
    }
</style>
<div class="container" style="padding: 10px; text-align: center">
    <div>
        <input type="text" placeholder="Apartment, Area etc.," style="width: 70%;height: 40px;padding: 5px;">
        <button class="btn" style="height:40px; border-radius: 0px;">Search</button>
    </div>
</div>
<div class="col-md-2 filters text-center" style="background-color: #fff;">
    <h3><u>FILTERS</u></h3>
</div>
<div class="row col-md-10">
    <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
            <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/11.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;color: black;"><b>Platina Exotica</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                        <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                        <div class="col-xs-12 hoverthumbnail">
                            <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                            <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                            <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                            <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                            <div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
            <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/12.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                        <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                        <div class="col-xs-12 hoverthumbnail">
                            <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                            <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                            <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                            <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                            <div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
            <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/13.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                        <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                        <div class="col-xs-12 hoverthumbnail">
                            <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                            <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                            <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                            <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                            <div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
            <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/14.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                </div>
               <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                        <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                        <div class="col-xs-12 hoverthumbnail">
                            <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                            <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                            <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                            <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                            <div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
            <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/15.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                        <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                        <div class="col-xs-12 hoverthumbnail">
                            <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                            <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                            <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                            <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                            <div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
            <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/16.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                        <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                        <div class="col-xs-12 hoverthumbnail">
                            <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                            <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                            <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                            <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                            <div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
            <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/17.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                </div>
               <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                        <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                        <div class="col-xs-12 hoverthumbnail">
                            <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                            <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                            <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                            <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                            <div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
            <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/13.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                        <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                        <div class="col-xs-12 hoverthumbnail">
                            <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                            <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                            <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                            <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                            <div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
            <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/14.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                        <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                        <div class="col-xs-12 hoverthumbnail">
                            <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                            <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                            <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                            <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                            <div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
            <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/15.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                        <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                        <div class="col-xs-12 hoverthumbnail">
                            <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                            <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                            <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                            <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                            <div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="<?php echo base_url('details'); ?>"><div class="container feat col-md-4 col-sm-6">
            <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/16.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                </div>
               <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                        <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                        <div class="col-xs-12 hoverthumbnail">
                            <div class="col-xs-3" style="text-align:center">AREA<br>1080Sqft.</div>
                            <div class="col-xs-3" style="text-align:center">BHK<br>4</div>
                            <div class="col-xs-3" style="text-align:center">BATH<br>3</div>
                            <div class="col-xs-3" style="text-align:center">PARKING<br>YES</div>
                            <div class="col-xs-12" style="text-align:center;padding-top:18px;">STATUS : Ready To Move</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

