<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    /*STYLING THE LOGIN MODAL*/
    .modalSignin {
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.7);
        position:absolute;
        top:0;
        z-index: 11;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
        position: fixed;
    }
    .modalRegister {
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0);
        position:absolute;
        top:0;
        z-index: 11;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
        position: fixed;

    }
    .modal-content-signin {
        width: 350px;
        height: 400px;
        background-color: white;
        position: relative;
    }
    .modal-content-register {
        width: 350px;
        height: 450px;
        background-color: white;
        position: relative;
    }
    .close {
        position: absolute;
        top: 0;
        right: 14px;
        font-size: 42px;
        transform: rotate(45deg);
        cursor: pointer;
    }
    .closeRegister {
        position: absolute;
        top: 18px;
        right: 18px;
        font-size: 21px;
        /*transform: rotate(45deg);*/
        cursor: pointer;
    }
    .backRegister {
        position: absolute;
        top: 18px;
        left: 18px;
        font-size: 20px;
        /*                background-color:red;*/
        /*                transform: rotate(45deg);*/
        cursor: pointer;
    }
    i {
        color: whitesmoke;
    }
    i:hover {
        cursor: pointer;
        color: green;
        transition-duration: 0.5s;
    }
    .loginPopup {
        border-radius: 5px;
        background: transparent;
        border:0px;
        border-bottom: 1px solid grey;
        font-size: 14px;
        padding-bottom: 10px;
        height: 40px;
        margin-bottom: 10px;
        background: #f7f9fc;
    }
</style>
<div class="row rowAlign" style="margin-bottom:0px;padding-bottom: 0px;z-index: 5;margin: 0">
    <nav class="navbar navbar-inverse" style="height:55px;border-radius: 0px;z-index: 10">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">PropKorner</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right" style="background-color: black;">
                  <!--<li><<i class="glyphicon glyphicon-user" id="loginButton" style="margin-top: 20px;margin-right: 20px;font-size:20px;"></i></li>-->
                    <li><a id="prop_addlisitng" href="<?php echo base_url('profile/addlisting'); ?>" style="cursor:pointer;color: white;"><span class="glyphicon glyphicon-pencil"></span> Add Listing</a></li>
                    <li><a href="<?php echo base_url('contact'); ?>" style="cursor:pointer;color: white;"><span class="glyphicon glyphicon glyphicon-earphone"  id="contactUs"></span> Contact Us</a></li>
                    <li><a id="loginButton" style="cursor:pointer;color: white;"><span class="glyphicon glyphicon-log-in"  id="loginButton"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="modalSignin">
    <div class="modal-content-signin">
        <div class="close" style="color:black" >+</div>
        <div class="modalhead" style="font-size: 19px;color: green;text-align:center;margin-top: 50px;;">Sign In!</div>
        <hr style="margin-top:1%;background-color: lightcoral;height: 1.5px;border: none;" width="10%;">
        <form action="">
            <center>
                <input type="email" class="loginPopup" placeholder="Email id" size="32%"><br>
                <input class="loginPopup" type="password" style="padding-bottom: 10px;margin-bottom: 5px;" placeholder="Password" size="32%"><br>
                <div style="margin-bottom:15px;font-size: 13px;"><input type="checkbox" onclick="showPassword()">Show Password</div>
                <button class="btn" style="width:247px;background-color: #81C784;border: 1px solid grey;height: 40px;margin-bottom: 10px;"><a href="" >Sign In</a></button>
                <div>
                    <a href="#" style="color:red;margin-bottom: 8px;font-size: 13px;">Forgot Password?</a><br>
                    <a class="registerNewUser" href="#" style="color:green;font-size: 14px;">New User? Register!</a>
                </div>
            </center>
        </form>
    </div>
</div>

<div class="modalRegister">
    <div class="modal-content-register">
        <div class="backRegister glyphicon glyphicon-menu-left" style="color:grey" ></div>
        <div class="closeRegister glyphicon glyphicon-remove-circle" style="color:grey" ></div>
        <div class="modalhead" style="font-size: 19px;color: green;text-align:center;margin-top: 20px;;">Register!</div>
        <hr style="margin-top:1%;background-color: lightcoral;height: 1.5px;border: none;" width="10%;">
        <form action="">
            <center>
                <input type="text" class="loginPopup" placeholder="First Name" size="32%">
                <input type="text" class="loginPopup" placeholder="Last Name" size="32%">
                <input type="email" class="loginPopup" placeholder="Email" size="32%"><br>
                <input class="loginPopup" type="password" placeholder="Password" size="32%">
                <input class="loginPopup" type="password" style="padding-bottom: 15px;margin-bottom: 20px;" placeholder="Confirm Password" size="32%"><br>

                <button class="btn" style="width:247px;background-color: #81C784;border: 1px solid grey;height: 40px;margin-bottom: 8px;"><a href="" >Register</a></button>
                <div>
                    <a class="alreadyHaveAccount" href="#" style="color:red;margin-bottom: 15px;font-size: 13px;color: rosybrown">Already have an account? Sign in!</a><br>

                </div>
            </center>
        </form>
    </div>
</div>
<script>
    document.getElementById('loginButton').addEventListener('click', function () {
        document.querySelector('.modalSignin').style.display = 'flex';
    });

    document.querySelector('.close').addEventListener('click', function () {
        document.querySelector('.modalSignin').style.display = 'none';
    });

    document.querySelector('.registerNewUser').addEventListener('click', function () {
        document.querySelector('.modalRegister').style.display = 'flex';
    });
    document.querySelector('.backRegister').addEventListener('click', function () {
        document.querySelector('.modalRegister').style.display = 'none';
    });
    document.querySelector('.alreadyHaveAccount').addEventListener('click', function () {
        document.querySelector('.modalRegister').style.display = 'none';
    });
    document.querySelector('.closeRegister').addEventListener('click', function () {
        document.querySelector('.modalRegister').style.display = 'none';
        document.querySelector('.modalSignin').style.display = 'none';
    });
    function showPassword() {
        var x = document.getElementById("passkey");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>