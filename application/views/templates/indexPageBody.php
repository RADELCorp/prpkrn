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

    .rowAlign {
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .btn {
        border: none;
        padding: 7px 28px;
        font-size: 16px;
        display: inline-block;
        color: white;
        background: blue;
    }

    .search {
        padding: 7px 28px;
    }

    .head {
        padding-top: 30px;
    }

    /*            ANIMATION_FOR_OUR_LISTING*/
    .zoom {
        padding-left: 0px;
        height: 350px;
        background-repeat: no-repeat;
        background-size: cover;
        border: 2px solid white;
        background-color: green;
        transition: transform .4s;
        margin: 0 auto;
    }

    .zoom:hover {
        -ms-transform: scale(1.3);
        -webkit-transform: scale(1.3); 
        transform: scale(1.3); 
        z-index: 2;
        cursor: pointer;
    }


    /*            GRID_CENTERED*/
    .row-centered {
        text-align:center;
    }

    .col-centered {
        display:inline-block;
        float:none;
        text-align:left;
        text-align: center;
        background-color: #ccc;
    }



    /*            PLACEHOLDER_COLOR_CHANGE*/
    ::-webkit-input-placeholder { 
        text-align: center;
        color: grey;
        font-size: 13px;
    }

    /*            SEARCH_BUTTON_STYLING*/
    .btn {
        background-color: #4CAF50;
    }
    buttonEffect {
        -webkit-transition-duration: 0.4s; 
        transition-duration: 0.4s;
    }

    buttonEffect:hover {
        background-color: #2E7D32; /* Green */
        color: white;
    }
    u {
        text-decoration: none;
        border-bottom: 1px solid white;
    }
    .featured {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-repeat: no-repeat;
        background-size: cover;
        border: 2px solid white;
        height: 250px;
        height: 100%;
        background-position: center;
    }
    .fea {
        /*                 border: 2px solid white;*/
        height: 250px;
        padding-left: 5px;
        padding-right: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    .featured:hover {
        opacity: 0.7;
        transition-duration: 0.4s;
        cursor: pointer;
    }
    .ourListing {
        transition: box-shadow .3s;
        height: 300px;
        padding-left: 1.5%;
        padding-right: 1.5%;
        padding-top: 1.5%;
        padding-bottom: 1.5%;
    }
    .listings {
        /*                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
        /*border: 1px solid black;*/
        background-repeat: no-repeat;
        background-size: cover;
        border: 2px solid white;
        height: 100%;
        transition: box-shadow .3s;
        transition: transform .3s;
        background-position: center;

    }
    .listings:hover {
        transform: scale(1.1); 
        z-index: 2;
        cursor: pointer;
        border: 2px solid white;
        box-shadow: 0 0 11px rgba(33,33,33,.2); 
    }


    .row > .zoom {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .linktag {
        color: white;
    }
</style>

<div class="row rowAlign" style="margin-top:0px;">
    <div class="col-md-12" style="background: rgba(0, 0, 0, 0.8);height: 175px;padding-left: 0px;padding-right: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

        <div class="col-md-5" style="height: 100%;">
            <center>
                <p class="head" style="color:white;">
                <div style="color:white;text-align: left;padding-left: 9%;padding-bottom: 2px;">
                    <a href="#" class="linktag"><u>For Sale </u></a>/
                    <a href="#" class="linktag"><u>For Rent</u></a>
                </div>
                <input class="search" type="texbox" style="background: transparent; border: 1px solid #fff;font-size: 14px;padding-bottom: 9px;margin-right: -4px;height: 40px;color: white;width: 70%" placeholder="Locality, Pincode, Name etc.">
                <button class="btn" style="width: 30%;height: 40px;border-radius: 0px;">Search</button>
                <div style="color:white;text-align: left;padding-left: 14%;">
                    <span id="typed" style="white-space:pre;font-size: 20px;color: white" class="typed">
                    </span>
                </div>
                </p>
            </center>
        </div>

        <div class="col-md-7" style="height: 100%;">
            <center>

            </center>
        </div>
    </div>
</div>

<div class="row rowAlign" style="margin-top: 20px">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 fea">
        <div class="featured" style="background-image:url('<div id="myModal" class="modal" style="padding-top:40px;">
            <div class="modal-content">

                <div class="mySlides" style="background-image: url('images/11.jpg');">
                    <div class="numbertext">1 / 4</div>
                </div>
                <div class="mySlides" style="background-image: url('images/12.jpg');">
                    <div class="numbertext">1 / 4</div>
                </div>
                <div class="mySlides" style="background-image: url('images/13.jpg');">
                    <div class="numbertext">1 / 4</div>
                </div>
                <div class="mySlides" style="background-image: url('images/14.jpg');">
                    <div class="numbertext">1 / 4</div>
                </div>
                <div class="mySlides" style="background-image: url('images/11.jpg');">
                    <div class="numbertext">1 / 4</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)" style="background-color:black;">&#10094;</a>
                <a class="next" onclick="plusSlides(1)" style="background-color:black;">&#10095;</a>

                <div class="caption-container">

                </div>

                <div class="text-center" style="width:100%;text-align: center">
                    <div class="column" style="background-image: url('images/11.jpg');" onclick="currentSlide(1)"></div>
                    <div class="column" style="background-image: url('images/12.jpg');" onclick="currentSlide(2)"></div>
                    <div class="column" style="background-image: url('images/13.jpg');" onclick="currentSlide(3)"></div>
                    <div class="column" style="background-image: url('images/14.jpg');" onclick="currentSlide(4)"></div>
<!--                    <div class="column" style="background-image: url('images/15.jpg');" onclick="currentSlide(5)"></div>
                    <div class="column" style="background-image: url('images/11.jpg');" onclick="currentSlide(6)"></div>
                    <div class="column" style="background-image: url('images/13.jpg');" onclick="currentSlide(7)"></div>-->
                </div>

            </div>

            <script>

                var slideIndex = 3;
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
                    var dots = document.getElementsByClassName("demo");
                    var captionText = document.getElementById("caption");
                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    captionText.innerHTML = dots[slideIndex - 1].alt;
                }
            </script>
        </div>assets/img/11.jpg'); ?>');"></div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 fea" >
        <div class="featured" style="background-image:url('<?php echo base_url('assets/img/12.jpg'); ?>');"></div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 fea">
        <div class="featured" style="background-image:url('<?php echo base_url('assets/img/13.jpg'); ?>');"></div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 fea">
        <div class="featured" style="background-image:url('<?php echo base_url('assets/img/14.jpg'); ?>');"></div>
    </div>
</div>

<div class="row rowAlign" style="margin-top: 0px">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 fea">
        <div class="featured" style="background-image:url('<?php echo base_url('assets/img/15.jpg'); ?>');"></div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 fea">
        <div class="featured" style="background-image:url('<?php echo base_url('assets/img/16.jpg'); ?>');"></div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 fea">
        <div class="featured" style="background-image:url('<?php echo base_url('assets/img/17.jpg'); ?>');"></div>
    </div>
</div>

<div style="padding-top:20px;">
    <center>
        <h4 style="padding-top:80px; font-size: 27px">OUR LISTINGS</h4>
    </center>
</div>
<div class="row rowAlign" style="margin-top: 5px;margin-bottom: 40px">         
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ourListing">
        <div class="listings" style="background-image:url('<?php echo base_url('assets/img/buy.jpeg'); ?>');"></div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ourListing" >
        <div class="listings" style="background-image:url('<?php echo base_url('assets/img/rent.jpeg'); ?>');"></div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ourListing">
        <div class="listings" style="background-image:url('<?php echo base_url('assets/img/services.jpeg'); ?>');"></div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ourListing">
        <div class="listings" style="background-image:url('<?php echo base_url('assets/img/projects.jpeg'); ?>');"></div>
    </div>

</div>

<script>
    //                FOR AUTO TYPING ANIMATION
    $("#typed").typed({
        strings: ["Apartments.", "572306.", "JP Nagar 5th phase."],
        typeSpeed: 130,
        startDelay: 0,
        backSpeed: 100,
        backDelay: 100,
        loop: true,
        cursorChar: "|",
        contentType: 'html'
    });
</script>


