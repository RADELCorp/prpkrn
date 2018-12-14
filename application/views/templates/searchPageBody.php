<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
/*            .overlaytext {
                position: absolute;
                bottom: 0% ;
                left: 0%;
                text-align: center;
                background-color: whitesmoke;
                background: rgba(238, 238, 238, 0.8);
                width: 100%;
                height: 18%;
                font-size: 17px;
                color: black;        //Darshan's code
            }*/
            .feat{
                margin-bottom: 2%;
                background-repeat: no-repeat;
                background-size: cover;
                height:250px;
                width: 28%;
                margin-right: 3%
            }
            .filters:hover{
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                background-repeat: no-repeat;
                background-size: cover;
                border: 2px solid white;
                height: 250px;   //Darshan's code
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
                left: 0;
                right: 0;
                background-color: rgba(255, 255, 255, 0.8);
                overflow: hidden;
                width: 100%;
                height: 10%;
                transition: 0.3s;
            }

            .container:hover .overlay1 {
                bottom: 55%;
            }
            .o1{
                display: inline-block;
                padding-left: 8px; 
                padding-top: 10px;
            }
            .o2{
                display: inline-block;
                margin-left: 85px;
            }
            .o3{
               display: inline-block;
               padding-top: 10px;
               padding-left: 15px;
               font-size: 12px;
               width: 50%; 
            }
            .o4{
               display: inline-block;
               padding-left: 40px;
               font-size: 15px; 
            }
</style>


 <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="margin-left: 19%; margin-top: 2%; margin-bottom: 2.5%">
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control input-lg placeholder-control" placeholder="Apartments, Place.." />
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="button">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="row col-md-1" style="margin-top:3%; margin-left: 5%">
                            <h5>Sort :</h5>
                        </div>
                        <button class="btn btn-primary dropdown-toggle" style="margin-top:3%;margin-left: -2%" type="button" data-toggle="dropdown">Relevance
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu" style="margin-left:79%">
                            <li><a href="#">Distance</a></li>
                            <li><a href="#">Price: Low to High</a></li>
                            <li><a href="#">Price: High to Low</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 filters" style="background-color: #EEEEEE;margin-left: 4%;margin-right: 4%;height:600px; text-align: center   ">
        <h3><u>FILTERS</u></h3>
        <h4 style="text-align:left; margin-top: 15%">
            BHK
        </h4>
        <div class="row" style="margin-left: -80%">
            <div><label><input type="checkbox" value=""> 1</label></div>
            <div><label><input type="checkbox" value=""> 2</label></div>
            <div><label><input type="checkbox" value=""> 3</label> </div>
            <div><label><input type="checkbox" value=""> 4</label></div>
            <div><label><input type="checkbox" value=""> 4+</label></div>
        </div>

    </div>
    <div class="row col-md-offset-3">
        <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/1.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 1,50,00,000</div>
                        <div class="o2">3 BHK, 4500sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/2.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div class="o2">2 BHK, 2500sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
      <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/3.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 85,00,000</div>
                        <div style="display: inline-block;margin-left: 80px;">3 BHK, 3200sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/4.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 2,50,00,000</div>
                        <div style="display: inline-block;margin-left: 80px;">4 BHK, 5000sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/5.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div class="o2">3 BHK, 4500sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
       <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/1.jpg'); ?>)";>
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div class="o2">3 BHK, 4500sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
      <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/2.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div class="o2">3 BHK, 4500sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/1.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div class="o2">3 BHK, 4500sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
      <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/4.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div class="o2">3 BHK, 4500sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
       <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/5.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div class="o2">3 BHK, 4500sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/3.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div class="o2">3 BHK, 4500sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
       <div>
            <div class="container feat col-md-2" style="background-image: url(<?php echo base_url('assets/img/4.jpg'); ?>)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div class="o1"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div class="o2">3 BHK, 4500sqft.</div>
                        <div class="o3">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div class="o4"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <nav aria-label="..." style="text-align:center">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
