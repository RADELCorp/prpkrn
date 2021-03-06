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
    .row > .column {
        padding: 0 8px;
    }


    .column {
        width: 10%;
        height: 100px;
        background-position: center;
        background-size: cover; 
        cursor: pointer;
        margin: 4px;
        display:inline-block;
    }

    /* The Modal (background) */
    .modal {
        z-index: 4;
        width: 100%;
        height: 100%;
        overflow: auto;

    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 1200px;
    }

    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    img {
        margin-bottom: -4px;
    }

    .caption-container {
        text-align: center;
        background-color: white;
        height: 10px;
        color: white;
    }
    .mySlides {
        height: 450px;
        width: 100%;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
    }

</style>


<div class="container">
    <!--            <div class="row">-->
    <div class="col-md-12" style="">
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
</div>

<!--NEW LIGHT BOX ADD IT HERE-->
<div class="modal-content" style="padding-top:20px;">
    <div class="mySlides" style="background-image:url('<?php echo base_url('assets/img/11.jpg'); ?>');">
        <div class="numbertext">1 / 4</div>
    </div>
    <div class="mySlides" style="background-image: url('<?php echo base_url('assets/img/12.jpg'); ?>');">
        <div class="numbertext">1 / 4</div>
    </div>
    <div class="mySlides" style="background-image: url('<?php echo base_url('assets/img/13.jpg'); ?>');">
        <div class="numbertext">1 / 4</div>
    </div>
    <div class="mySlides" style="background-image: url('<?php echo base_url('assets/img/14.jpg'); ?>');">
        <div class="numbertext">1 / 4</div>
    </div>
    <div class="mySlides" style="background-image: url('<?php echo base_url('assets/img/15.jpg'); ?>');">
        <div class="numbertext">1 / 4</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)" style="background-color:black;">&#10094;</a>
    <a class="next" onclick="plusSlides(1)" style="background-color:black;">&#10095;</a>

    <div class="caption-container">

    </div>

    <div class="text-center" style="width:100%;text-align: center">
        <div class="column" style="background-image: url('<?php echo base_url('assets/img/11.jpg'); ?>');" onclick="currentSlide(1)"></div>
        <div class="column" style="background-image: url('<?php echo base_url('assets/img/12.jpg'); ?>');" onclick="currentSlide(2)"></div>
        <div class="column" style="background-image: url('<?php echo base_url('assets/img/13.jpg'); ?>');" onclick="currentSlide(3)"></div>
        <div class="column" style="background-image: url('<?php echo base_url('assets/img/14.jpg'); ?>');" onclick="currentSlide(4)"></div>
        <div class="column" style="background-image: url('<?php echo base_url('assets/img/12.jpg'); ?>');" onclick="currentSlide(5)"></div>

        <!--                    <div class="column" style="background-image: url('images/15.jpg');" onclick="currentSlide(5)"></div>
                            <div class="column" style="background-image: url('images/11.jpg');" onclick="currentSlide(6)"></div>
                            <div class="column" style="background-image: url('images/13.jpg');" onclick="currentSlide(7)"></div>-->
    </div>
</div>
<!--LIGHT BOX ENDS HERE-->
<div class="container">
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
<script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            console.log('Stage1');
        }
        slides[slideIndex - 1].style.display = "block";
    }
</script>
