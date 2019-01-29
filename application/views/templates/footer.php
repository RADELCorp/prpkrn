<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    body {
        font-family: 'Raleway', sans-serif;
        background-color: white;
    }
    .rowAlign {
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
    }

    .footertext {
        color: white
    }
    .footertitle {
        font-size:18px;        
    }
    .footerSubHeadings {
        font-size:13px;
    }
    .footertext > .row {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    footer-terms-conditions{
        cursor: pointer;color: grey;
    }
</style>

<div class="footertext">
    <div class="row rowAlign" style="background-color:black;padding-top: 15px;">
        <div class="col-md-12 col-sm-12">
            <div class="col-md-3 col-sm-3 col-xs-12 hidden-xs" style="padding-left: 8%">
                <p class="footertitle"><b>EXPLORE</b></p>
                <hr style="margin-top:1%" width="45px;" align="left">
                <div class="footerSubHeadings">
<!--                    <p>HOME</p>-->
                    <p>ABOUT US</p>
                    <p>CAREER</p>
                    <p>BLOGS</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 hidden-xs" style="padding-left: 8%">
                <p class="footertitle"><b>VISIT</b></p>
                <hr style="margin-top:1%" width="45px;" align="left">
                <p class="footerSubHeadings"> No 2, Ground floor,<br> 29th Main Road,<br> Kuvempu Nagar,<br> BTM Layout 2nd Stage,<br> Bengaluru,<br> Karnataka 560076</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 hidden-xs" style="padding-left: 8%">
                <p class="footertitle"><b>CONTACT US</b></p>
                <hr style="margin-top:1%" width="45px;" align="left">
                <div class="footerSubHeadings">
                    <p>+91-8945687598</p>
                    <p>+91-8945687598</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 hidden-xs" style="padding-left: 6%">
                <p class="footertitle"><b>FOLLOW</b></p>
                <hr style="margin-top:1%" width="45px;" align="left">
                <div class="footerSubHeadings col-sm-12" style="margin-left: -6%">
                    <a href="#">  
                        <div class="col-sm-3" style="background-image: url('<?php echo base_url('assets/img/instagram.png'); ?>'); background-size: contain; background-repeat: no-repeat; height:25px"></div>
                    </a>
                    <a href="#">  
                        <div class="col-sm-3" style="background-image: url('<?php echo base_url('assets/img/facebook.png'); ?>'); background-size: contain; background-repeat: no-repeat; height:25px"></div>
                    </a>
                    <a href="#">  
                        <div class="col-sm-3" style="background-image: url('<?php echo base_url('assets/img/twitter.png'); ?>'); background-size: contain; background-repeat: no-repeat; height:25px"></div>
                    </a>
                    <a href="#">  
                        <div class="col-sm-3" style="background-image: url('<?php echo base_url('assets/img/google.png'); ?>'); background-size: contain; background-repeat: no-repeat; height:25px"></div>
                    </a>
                </div>
            </div>
            <hr style="margin-top:1%" width="95%;">
            <div class="col-xs-12" style="">
                <p class="footertitle text-center">2018 &copy; Propkorner</p>
                <h5  class="footer-terms-conditions text-center"><a href="#">*Terms and Conditions*</a></h5>
            </div>
        </div>
    </div>        
</div>
</body>
</html>
