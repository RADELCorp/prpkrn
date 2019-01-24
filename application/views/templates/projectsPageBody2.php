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
        height:300px;
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
    .feat:hover .overlay0 {
        height: 35%;
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
    .feat:hover .overlay1 {
        bottom: 35%;
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
        font-size: 12px;
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
</style>
<div class="container">
    <h2 style="text-align:center">Our Projects</h2>
    <div class="" style="padding: 10px; text-align: center">
        <input type="text" placeholder="Locality, Pincode,etc." style="width: 70%;height: 40px;padding: 5px;">
        <button class="btn" style="height:40px; border-radius: 0px;">Search</button>
    </div>
    <div class="col-md-12 col-xs-12">
        <a href="<?php echo base_url('Projectdetails'); ?>">
            <div class="container feat col-md-4 col-xs-3">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/11.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;color: black;"><b>Platina Exotica</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr - 8 Cr.</div>
                            <div class="col-xs-6 bhk text-right" ><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-xs-12 hoverthumbnail" style="text-align:center;">
                                <p><b> Brigade Private Limited </b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('Projectdetails'); ?>">
            <div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/12.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-xs-6 amount"><span class="rupee-symbol"></span>1.5 Cr - 8 Cr.</div>
                            <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-xs-12 hoverthumbnail" style="text-align:center;">
                                <p><b> Brigade Private Limited </b> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('Projectdetails'); ?>">
            <div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/13.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr - 8 Cr.</div>
                            <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-xs-12 hoverthumbnail" style="text-align:center;">
                                <p><b> Brigade Private Limited </b> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('Projectdetails'); ?>">
            <div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/14.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr - 8 Cr.</div>
                            <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-xs-12 hoverthumbnail" style="text-align:center;">
                                <p><b> Brigade Private Limited </b> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('Projectdetails'); ?>">
            <div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/15.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr - 8 Cr.</div>
                            <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-xs-12 hoverthumbnail" style="text-align:center;">
                                <p><b> Brigade Private Limited </b> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('Projectdetails'); ?>">
            <div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/16.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr - 8 Cr.</div>
                            <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-xs-12 hoverthumbnail" style="text-align:center;">
                                <p><b> Brigade Private Limited </b> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('Projectdetails'); ?>">
            <div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/17.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1.5 Cr - 8 Cr.</div>
                            <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-xs-12 hoverthumbnail" style="text-align:center;">
                                <p><b> Brigade Private Limited </b> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('Projectdetails'); ?>">
            <div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/13.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-xs-6 amount"><span class="rupee-symbol"></span>1.5 Cr - 8 Cr.</div>
                            <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                           <div class="col-xs-12 hoverthumbnail" style="text-align:center;">
                                <p><b> Brigade Private Limited </b> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('Projectdetails'); ?>">
            <div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/14.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-xs-6 amount"><span class="rupee-symbol"></span>1.5 Cr - 8 Cr.</div>
                            <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-xs-12 hoverthumbnail" style="text-align:center;">
                                <p><b> Brigade Private Limited </b> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('Projectdetails'); ?>">
            <div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/15.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                            <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-xs-12 hoverthumbnail" style="text-align:center;">
                                <p><b> Brigade Private Limited </b> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url('Projectdetails'); ?>">
            <div class="container feat col-md-4 col-sm-6">
                <div class="search-listing-container" style="background-image: url(<?php echo base_url('assets/img/16.jpg'); ?>)">
                    <div class="col-md-3 col-md-offset-9 status">Ready To Move</div>
                    <div class="overlay1">
                        <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum home.</b></div>
                    </div>
                    <div class="overlay0">
                        <div style="color:white;float: left;font-size: 14px;">
                            <div class="col-xs-6 amount"><span class="rupee-symbol"></span> 1,50,00,000</div>
                            <div class="col-xs-6 bhk text-right"><i class="fa fa-map-marker" style="color:red;"></i>&nbsp;Jayanagar,Bengaluru</div>
                            <div class="col-xs-12 hoverthumbnail" style="text-align:center;">
                                <p><b> Brigade Private Limited </b> </p>
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

