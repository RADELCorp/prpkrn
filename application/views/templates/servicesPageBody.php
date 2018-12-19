<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
    body {
        font-family: 'Raleway', sans-serif;
        background-color: whitesmoke;
    }
    .footertitle {
        font-size:18px;
        padding-top: 10%;
    }
    .footertext > .row {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .footertext {
        color: white;
        font-family: 'Raleway', sans-serif;
    }
    .row + .rowAlign {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .footerSubHeadings {
        font-size:13px;
        padding-top: 1%
    }
    .rowAlign {
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .footertext > .row {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .social {
        color:#ffffff;
    }
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
    .box {
        background-image: url(images/paint.jpg);
        height:300px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        margin-bottom: 2%;
    }
    .box:hover {
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-repeat: no-repeat;
        background-size: contain;
        border: 2px solid white;
        height: 300px;   //Darshan's code
    }

</style>


<div class="col-xl-12 container">
    <div class="tex" style="text-align:center;margin-bottom: 4%">
        <h2><u>Services</u></h2>
    </div>
    <div class="col-md-12 col-sm-12">
        <a href="#"><div class="col-sm-6 col-md-4 box" style="background-image: url('<?php echo base_url('assets/img/paint.jpg'); ?>');"></div> </a> 
        <a href="#"><div class="col-sm-6 col-md-4 box" style="background-image: url('<?php echo base_url('assets/img/carpenter.jpg'); ?>');"></div> </a>
        <a href="#"><div class="col-sm-6 col-md-4 box" style="background-image: url('<?php echo base_url('assets/img/movers.jpg'); ?>');"></div> </a> 
        <!--                <a href="#"><div class="col-sm-6 col-md-4 box" style="background-image: url(images/paint.jpg);"></div> </a> 
                        <a href="#"><div class="col-sm-6 col-md-4 box" style="background-image: url(images/carpenter.jpg);"></div> </a> 
                        <a href="#"><div class="col-sm-6 col-md-4 box" style="background-image: url(images/movers.jpg);"></div> </a> -->
    </div>
</div>

