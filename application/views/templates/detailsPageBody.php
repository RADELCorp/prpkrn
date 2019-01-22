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
        /*width: 1px;*/
        background-color: whitesmoke;
        height: 18ch; 
        float: left; 
    }
    .social { 
        color:#ffffff;
    }
    .box{
        font-family: 'Raleway', sans-serif;
        text-align: left;
        background-color:#F5F5F5;
        margin-top: 2%;
        color: black;
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
        background-repeat: no-repeat;
        cursor: pointer;
        margin: 4px;
        display:inline-block;
    }

    /* The Modal (background) */
    .modal {
        z-index: calc;
        width: 100%;
        height: 100%;
        overflow: auto;

    }

    /* Modal Content */
    .modal-content {
        /*        position: relative;*/
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        /*        width: 90%;*/
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
        height: 400px;
        width: 100%;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
    }
    @media(max-width:600px){
        .mySlides {
            height: 80vh;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .lightbox-nav{
            display:none;
        }
    }
    .align-ammenities{
        padding:0px;
        margin-top: 10px;
        font-size: 12px;
    }
    .align-ammenities > img{
        width:18%;
        padding: 3px;
    }

    .align-ammenities > span{
        width:18%;
        padding:  0px;
    }
    .description{
        text-align: justify;
        font-weight: bold;
        text-align: center;
    }
    .description + h6{
        position: relative;
        text-align: justify;
        line-height: 1.5;
    }
    .property-info{
        text-align: left;
        font-weight: bold;
        margin-left: 3%;    
        text-align: center;
    }
    .property-info > div{
        line-height:1.75  
    }
    .amenities{
        margin-top:6px;
    }
    .amenities-title{
        font-weight: bold;
        text-decoration: underline;
        font-size: 17px;
        margin-top: 1px;
        text-align: center;
        margin-left: -10%;
    }
    .property-name{
        font-weight: bold;
        font-size: 110%;
    }
    .property-name + p{
        font-weight: lighter;
        font-size: 10px;
        margin-top: -1%;
    }
    .amenities > .container{
        height: auto;
        padding-bottom: 25px;
    }
    .serv{
        font-size: 13px;
    }
    .form1but{
        display:none;
    }
    @media(max-width:600px){
        .form1 {
            display: none;
        }
        .form1but{
            display:inline-block;
        }
    }
    .line{
        border : 1px solid black;
    }
</style>

<div class="container">
    <div class="col-md-12 col-xs-12 col-sm-12">
        <div class="col-md-1 col-xs-3 col-sm-2">
            <a href="<?php echo base_url('search'); ?>">
                <button class="btn btn-primary btn-md">
                    <span class="glyphicon glyphicon-arrow-left"></span>
                </button>
            </a>
        </div>
        <div class="col-md-9 col-xs-6 col-sm-8">
            <div class="row">
                <p class="property-name" id="property-name"> Viemann Complex </p>
                <p id="short-location"> Jayanagar 4th block, Bengaluru </p>
            </div>
        </div>
        <div class="col-md-1 col-xs-1 col-sm-1 form1but"> 
            <button class="btn-md btn btn-primary btn-inf btn-sm" data-toggle="modal" data-target="#reqForm">
                <span class="glyphicon glyphicon-phone-alt"></span>
            </button>
        </div>
        <div class="col-md-1 col-xs-1 col-sm-1" style="margin-left: 2%">
            <button class="btn-md btn btn-primary btn-inf btn-sm">
                <span class="glyphicon glyphicon-share"></span>
            </button>
        </div>
    </div>

    <!--NEW LIGHT BOX ADD IT HERE-->
    <div class="col-md-12 col-xs-12">
        <div class="modal-content col-md-8" style="padding-top:20px;box-shadow: 0 0;border: 0;">
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
            <div class="caption-container"></div>
            <div class="text-center lightbox-nav" style="width:100%;text-align: center">
                <div class="column" style="background-image: url('<?php echo base_url('assets/img/11.jpg'); ?>');" onclick="currentSlide(1)"></div>
                <div class="column" style="background-image: url('<?php echo base_url('assets/img/12.jpg'); ?>');" onclick="currentSlide(2)"></div>
                <div class="column" style="background-image: url('<?php echo base_url('assets/img/13.jpg'); ?>');" onclick="currentSlide(3)"></div>
                <div class="column" style="background-image: url('<?php echo base_url('assets/img/14.jpg'); ?>');" onclick="currentSlide(4)"></div>
                <div class="column" style="background-image: url('<?php echo base_url('assets/img/12.jpg'); ?>');" onclick="currentSlide(5)"></div>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-3 form1" style="margin-top: 20px;background-color: #F5F5F5">
            <!--            <div id="reqForm" class="modal fade" role="dialog">-->
            <!--                <div class="modal-dialog">
                                <div class="modal-content" role="document">-->
            <div class="modal-header">
                <!--                            <button type="button" class="close" data-dismiss="modal" style="transform: rotate(45deg)">&times;</button>-->
                <h4 class="modal-title">Get contact info</h4>
            </div>
            <div class="modal-body">
                <div class="form-group form-inline">
                    <label for="name">Name : </label>
                    <input type="name" class="form-control" id="name" style="width: 100%;">
                </div>
                <div class="form-group form-inline">
                    <label for="email">Email : </label>
                    <input type="email" class="form-control" id="email" style="width: 100%;">
                </div>
                <div class="form-group form-inline">
                    <label for="number">Mobile :</label>
                    <input type="text" class="form-control" id="number" style="width: 100%;">
                </div>
                <div class="serv container">
                    <p>Select the services you need :</p>
                    <label class="chckbx"><input type="checkbox" value=""> Painters</label> &nbsp
                    <label><input type="checkbox" value=""> Movers</label> <br/>
                    <label><input type="checkbox" value=""> Carpenters</label>
                </div>
                <div class="checkbox" style="font-size: 12px">
                    <label><input type="checkbox" value="">Accept our Terms & Conditions</label>
                </div>

                <div class="checkbox" style="font-size: 12px">
                    <label><input type="checkbox">Allow us to call you regarding property details</label>
                </div>
                <div class="modal-footer">
                    <button type="submit" onclick="return reqFormSubmit()" class="btn btn-primary">Submit</button>
                    <!--                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>
</div>


<!--LIGHT BOX ENDS HERE-->
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 box">
        <div class="col-md-12" style="border-bottom:1px solid grey;">
            <div class="">
                <h4 class="description"><u>DESCRIPTION</u></h4>
                <h6 id="property-description">
                    The premium 5, 4 & 3 BHK apartments from Tulip Infratech, Tulip Ace homes have been developed to surpass even the company's other residential projects in terms of excellence. Tulip Infratech, known for delivering high-class services has gone too far in its approach this time and has come up with homes that talk for themselves just like a pole star shines bright among a cluster of million other stars.
                </h6>   
                <hr class="line">
            </div>
            <div class="">
                <h4 class="property-info"><u>PROPERTY INFORMATION </u></h4>
                <div class="col-md-6" style="text-align: center">
                    <h6 id="property-price">Price : 1,50,00,000 INR </h6>  
                    <h6 id="property-status">Status : Available </h6> 
                    <h6 id="property-yoc">Year of completion : 2018</h6>
                </div>
                <div class="col-md-6" style="text-align: center">
                    <h6 id="property-area"> Area : 2,800 sq.ft </h6>
                    <h6 id="property-bhk"> BHK : 4 </h6>
                    <h6 id="property-furnishing"> Furnishing : Full</h6>
                </div>

            </div>
        </div>
        <div class="col-md-12 amenities">
            <div class="container">
                <div class="amenities-title">AMENITIES</div>
                <div class="col-md-12" style="padding:0px;">
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/cctv.png'); ?>"/><span>CCTV</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/clubhouse.png'); ?>"/><span>CLUB HOUSE</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/gym.png'); ?>"/><span>GYM</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/indoorgames.png'); ?>"/><span>INDOOR GAMES</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/kidsarea.png'); ?>"/><span>KIDS AREA</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/lift.png'); ?>"/><span>LIFT</span>
                    </div>
                </div>
                <div class="col-md-12" style="padding:0px;">
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/swimming.png'); ?>"/><span>SWIMMING</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/waterharvesting.png'); ?>"/><span>WATER HARVESTING</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/parking.png'); ?>"/><span>PARKING</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/sewage.png'); ?>"/><span>SEWAGE</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/powerbackup.png'); ?>"/><span>POWER BACKUP</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 align-ammenities">
                        <img src="<?php echo base_url('assets/img/partyhall.png'); ?>"/><span>PARTY HALL</span>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="col-md-12 location" style="text-align:center">
        <br/>
        <h3 style="font-weight:bold"><u> Our Location</u> </h3>
        <br/>
    </div>
    <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15554.77134221551!2d77.5905968!3d12.92745305!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77fa77df36f6afa7!2sRADEL+CORP!5e0!3m2!1sen!2sin!4v1542622320218" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br/>
    </div>  

</div>
<div class="text" style="text-align:center;">
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
<div id="reqForm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" role="document">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="">&times;</button>
                <h4 class="modal-title">Fill up this request form</h4>
            </div>
            <div class="modal-body">
                <div class="form-group form-inline">
                    <label for="name">Name :</label>
                    <input type="name" class="form-control" id="name" style="width: 80%; ">
                </div>
                <div class="form-group form-inline">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" style="width: 80%;">
                </div>
                <div class="form-group form-inline">
                    <label for="number">Mobile :</label>
                    <input type="text" class="form-control" id="number" style="width: 80%; margin-left: 1%">
                </div>
            </div>
            <div style="margin-left: 3%;">
                <div class="serv " style="text-align: center">
                    <p>Select the services you need :</p>
                    <label><input type="checkbox" value=""> Painters</label>
                    <label><input type="checkbox" value=""> Movers</label>
                    <label><input type="checkbox" value=""> Carpenters</label>
                </div>
                <div class="checkbox">
                    <label ><input checked="" type="checkbox" value="">Accept our Terms & Conditions</label>
                </div>

                <div class="checkbox">
                    <label><input type="checkbox">Allow us to call you regarding property details</label>
                </div>
                <div class="modal-footer">
                    <button type="submit" onclick="return reqFormSubmit()" class="btn btn-primary">Submit & Get Info</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Ends -->

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
    function reqFormSubmit() {
        alert("Successful");
    }
</script>