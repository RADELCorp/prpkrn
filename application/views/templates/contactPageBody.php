<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
    body {
        font-family: 'Raleway', sans-serif;
        background-color: whitesmoke;
    }
</style>

<div>
    <div class="container">
        <div class="heading">
            <h2 style="text-align: center"><b>CONTACT US</b></h2>
        </div>
        <div class="col-md-12 col-sm-12" style="background-image: url(<?php echo base_url('assets/img/12.jpg'); ?>);background-position: center; background-repeat: no-repeat; background-size : cover;  height:300px;">

        </div>
        <div class="col-md-12">
            <div class="col-md-4 col-sm-4" style="background-color: #E0E0E0; margin-top: 3%; padding-top: 2%; padding-bottom: 2%">
                <h3 style="text-align: center"><b>Reach Us</b></h3>
                <p style="text-align: center"><br/>  608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011 </p>
                <h5 style="text-align: center"><b><br/>E-mail : propkorner@radelcorp.in</b></h5>
                <h5 style="text-align: center"><b><br/>Contact number : 9876543210</b></h5>
            </div>
            <div class="location col-md-8 col-sm-8" style="overflow:hidden; margin-top: 3%">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.671762154574!2d77.58255041482154!3d12.92880569088396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77fa77df36f6afa7!2sRADEL+CORP!5e0!3m2!1sen!2sin!4v1545375166728" width="140%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="col-md-7 col-sm-7" style="background-color: #E0E0E0; margin-top: 3%; padding-top: 2%; padding-bottom: 2%;">
                  <div class="form-group form-inline">
                    <label for="name">Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="name" class="form-control" id="name" style="width: 80%; ">
                </div>
                  <div class="form-group form-inline">
                    <label for="email">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="email" class="form-control" id="email" style="width: 80%;">
                </div>
                <div class="form-group form-inline">
                    <label for="number">Mobile :&nbsp;&nbsp;</label>
                    <input type="text" class="form-control" id="number" style="width: 80%; margin-left: 1%">
                </div>
                <div class="form-group form-inline">
                    <label for="message">Message :</label>
                    <textarea class="form-control md-textarea" rows="5" id="comment" style="width:80%"></textarea>
                </div>
                <div style="text-align: right">
                    <button type="button" onclick="message()" class="btn btn-primary">Submit</button>
                    
                </div>
            </div>
            <div class="col-md-5 col-sm-5" style="text-align:center">
                <h1>
                   <br/> <br/>Write to us <br/>and we will <br/>get back to you :)
                </h1>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function message() {
        alert("Submit successful")
    }
</script>   