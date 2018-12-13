<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
    body {
        font-family: 'Raleway', sans-serif;
        background-color: white;
    }
    .social { color:#ffffff;
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
    .img-fluid{
        max-width: 100%;
        height: 100%;
        display: block; 
    }

    .rowAlign {
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .owl-prev,
    .owl-next {
        position: absolute;
        top: 40%;
        transform: translateY(-50%);
        width: 50px;
        height: 80px;
    }

    .owl-prev {
        left: -6rem;
    }

    .owl-next {
        right: -6rem;
    }
    div.vertical{
        margin-top: 30px;
        margin-bottom: 30px;
        width: 2px;
        background-color: whitesmoke;
        height: 170px; 
        float: left; 
    }
    .social { 
        color:#ffffff;
    }
    .box{
        font-family: 'Raleway', sans-serif;
    }
    h5{
        line-height: 1.75
    }
</style>


<div class="container">
    <!--            <div class="row">-->
    <div class="col-md=12" style="height: 50px">
        <div class="col-sm-1">
            <button class="btn" style="width:60px; height:60px; margin-top:20px; margin-bottom: 10px">
                <span class="glyphicon glyphicon-arrow-left"></span> </button>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <h2 style=" font-weight: bold; "> Viemann Complex </h2>
                    <h6 style="font-weight: light";> Jayanagar 4th block, Bengaluru </h6>
                </div>
            </div>
            <div class="col-md-1" style="margin-top:30px; margin-right: -30%"> 
                <button class="btn">
                    <span class="glyphicon glyphicon-star-empty"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-12" style="height: 500px;background-image:url(<?php echo base_url('assets/img/aaa.jpg'); ?>);background-repeat: no-repeat;background-size: cover;border: 2px solid white; margin-bottom: 1%"> </div>
    <div style="text-align:center; margin-left: 7%; margin-right: 7%">    
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">
                <div> <img src="<?php echo base_url('assets/img/aaa.jpg'); ?>"></div>
                <div> <img src="<?php echo base_url('assets/img/bbb.jpg'); ?>"></div>
                <div> <img src="<?php echo base_url('assets/img/aaa.jpg'); ?>"></div>
                <div> <img src="<?php echo base_url('assets/img/bbb.jpg'); ?>"></div>
                <div> <img src="<?php echo base_url('assets/img/aaa.jpg'); ?>"></div>
                <div> <img src="<?php echo base_url('assets/img/bbb.jpg'); ?>"></div>
            </div>
        </div>
    </div>
    <br/> <br/>
    <div class="col-md-12 box" style="text-align: left;background-color:#212121; margin-top: 2%; color: #EEEEEE">
        <div class="vl"></div>
        <div class="col-md-6" style="text-align: left; height:200px; ">
            <h3 style="text-align: justify; font-weight: bold"><u>DESCRIPTION</u> </h3>
            <h5 style="position: relative; text-align: justify; line-height: 1.5">
                The premium 5, 4 & 3 BHK apartments from Tulip Infratech, Tulip Ace homes have been developed to surpass even the company's other residential projects in terms of excellence. Tulip Infratech, known for delivering high-class services has gone too far in its approach this time and has come up with homes that talk for themselves just like a pole star shines bright among a cluster of million other stars.
            </h5>
        </div>
        <div class="vertical"></div>
        <div class="col-md-5" style="text-align: left; font-weight: bold; height:200px;">
            <h3 style="text-align: left; font-weight: bold; margin-left: 3% "><u>PROPERTY INFORMATION </u></h3>
            <div class="col-md-6" style="line-height:1.75">
                <h5>Price : 1,50,00,000 INR </h5>  
                <h5>Status : Available </h5> 
                <h5>Year of completion : 2018</h5>
            </div>
            <div class="col-md-6" style="line-height: 1.75">
                <h5> Area : 2,800 sq.ft </h5>
                <h5> BHK : 4 </h5>
                <h5> Furnishing : Full</h5>
            </div>

        </div>
    </div>
    <div class="col-md-12 location" style="text-align:center">
        <br/>
        <h3 style="font-weight:bold"> Our Location </h3>
        <br/>
    </div>
    <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15554.77134221551!2d77.5905968!3d12.92745305!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77fa77df36f6afa7!2sRADEL+CORP!5e0!3m2!1sen!2sin!4v1542622320218" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br/>
    </div>  
</div>
<div class="text" style="text-align:left; margin-left: 15%">
    <h3><br/> <u>Similar properties</u> </h3>
    <br/>
</div>
<div class="container">
    <div style="text-align:center; margin-left: 7%; margin-right: 7%">
        <div class="col-md-12" style="height:20%">
            <div class="owl-carousel owl-theme">
                <div> <img src="<?php echo base_url('assets/img/aaa.jpg'); ?>"><h6>Gallery Apartments<br/>Rs. 3,52,00,000</h6></div>
                <div> <img src="<?php echo base_url('assets/img/bbb.jpg'); ?>"><h6>Aster<br/>Rs. 2,852,00,000</h6></div>
                <div> <img src="<?php echo base_url('assets/img/aaa.jpg'); ?>"><h6>Kriti<br/>Rs. 72,00,000</h6></div>
                <div> <img src="<?php echo base_url('assets/img/bbb.jpg'); ?>"><h6>Skyline<br/>Rs. 47,00,000</h6></div>
                <div> <img src="<?php echo base_url('assets/img/aaa.jpg'); ?>"><h6>Holy Hill<br/>Rs. 1,12,00,000</h6></div>
                <div> <img src="<?php echo base_url('assets/img/bbb.jpg'); ?>"><h6>N-Paradise<br/>Rs. 1,00,00,000</h6></div>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        $(".category-wrapper").owlCarousel({
            items: 4,
            loop: true,
            margin: 30,
            nav: true,
            smartSpeed: 900,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
        });
    </script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>