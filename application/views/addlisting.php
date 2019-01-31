<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    .radel-text-input input:focus ~ label, .rdl-up {
        top: -45px;
        font-size: 13px;
        color: rgb(255,91,79);
    }

    .radel-text-input input ~ label {
        position: relative;
        top: -25px;
        transition-duration: 0.2s;
        color: gray;
        font-weight: 300;
        cursor: text;
    }
    .radel-text-input input {
        width: 100%;
        border: none;
        border-bottom: 1px solid gray;
        outline: none;
        margin-top: 10px;
    }
    .switch-field {
        padding-top: 0px;
        overflow: hidden;
        height: 70px;
    }
    .switch-field input {
        position: absolute !important;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        width: 1px;
        border: 0;
        overflow: hidden;
    }
    .switch-field label {
        float: left;
    }
    label{
        font-weight: 400;
    }
    .switch-field label {
        display: inline-block;
        width: 25px;
        height:20px;
        background-color: #e4e4e4;
        /*        font-size: 14px;*/
        font-weight: normal;
        text-align: center;
        text-shadow: none;
        padding: 2px 6px;
        /*        border: 1px solid rgba(0, 0, 0, 0.2);*/
        /*        -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
                box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);*/
        -webkit-transition: all 0.1s ease-in-out;
        -moz-transition:    all 0.1s ease-in-out;
        -ms-transition:     all 0.1s ease-in-out;
        -o-transition:      all 0.1s ease-in-out;
        transition:         all 0.1s ease-in-out;
    }
    .switch-field label:hover {
        cursor: pointer;
    }
    .switch-field input:checked + label {
        background-color: #3faf00;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .radio_no input:checked + label {
        background-color: #cc4c4c;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .switch-field label:first-of-type {
        border-radius: 0px;
    }
    .switch-field label:last-of-type {
        border-radius:0px;
    }
    .switch-field-label{
        padding-left: 10px;
    }
    .extras-align{
        padding-left:0px;
    }
    .floor-align{
        padding-top:22px;
    }
    .addlisting-title{
        color:#5a5a5a;
    }
    .addlisting-subtitles{
        text-decoration:underline;text-align: center;font-size: 23px;margin-bottom: 15px;margin-top: 25px;
    }
    .sell-rent-switch{
        text-align:center;height: 50px;
    }
    .dropdown-align{
        height:58px;padding-top: 16px;
    }
    .additional-info-subtitile{
        font-size:19px;
    }
    .upload-image{
        height: 150px;
    }
    #prop_available_from{
        padding-top: 10px;
        width: 35%;
        text-align: center;
        height: initial;
    }
    .prop_mandatory{
        color: red;
        font-weight: bolder;
    }
    .addlisting-submit{
        background-color: rgba(0,0,0,0);
        border-radius: 30px;
        border: 1px solid green;
        letter-spacing:3px;
    }
    .addlisting-submit:hover{
        background-color: rgba(194, 240, 194,1);
        transition-duration: 0.5s;
    }
    .prop-price-buy{
        display: none;
    }
</style>
<div class="col-md-12">
    <h3 class="addlisting-title">Add new property listing</h3>
</div>
<div class="col-md-12 addlisting-subtitles">Property Information</div>
<div class="col-md-12 sell-rent-switch">
    <label class="radio-inline">
        <input type="radio" name="rent-sale" class="for-rent" checked>For Rent
    </label>
    <label class="radio-inline">
        <input type="radio" name="rent-sale" class="for-sale">For Sell
    </label>
</div>
<div class="col-md-5 col-md-offset-1">
    <div class="radel-text-input dropdown-align">
        <label><span class="prop_mandatory">* </span>Property Type</label>
        <select>
            <option disabled selected value> -- select an option -- </option>
            <option value="apt_flat">Apartments/Flats</option>
            <option value="ind_house">Independent Floor/House</option>
            <option value="villa_duplex">Villa/Duplex</option>
            <option value="penthouse">Penthouse</option>
        </select>
    </div>
    <div class="radel-text-input">
        <input type="text" name="built_area">
        <label><span class="prop_mandatory">* </span>Built Up Area</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="total_bedroom">
        <label><span class="prop_mandatory">* </span>No. of Bedroom</label>
    </div>
    <div class="prop-price-buy">
        <div class="radel-text-input">
            <input type="number" name="prop_price">
            <label><span class="prop_mandatory">* </span>Price Details</label>
        </div>
        <div class="container" style="margin-top:-20px;">
            <div>
                <input type="checkbox" id="store_room">
                <label for="store_room">Negotiable</label>
            </div>
            <div>
                <input type="checkbox" id="store_room">
                <label for="store_room">Including maintainance charges</label>
            </div>
        </div>
    </div>
    <div class="prop-price-rent">
        <div class="radel-text-input">
            <div class="col-md-6">
                <input type="number">
                <label><span class="prop_mandatory">* </span>monthly rent</label>
            </div>
            <div class="col-md-6">
                <input type="number">
                <label><span class="prop_mandatory">* </span>security deposit</label>
            </div>
        </div>
        <div class="col-md-12" style="margin-top:-20px;">
            <div>
                <input type="checkbox" id="store_room">
                <label for="store_room">Negotiable</label>
            </div>
            <div>
                <input type="checkbox" id="store_room">
                <label for="store_room">Including maintainance charges</label>
            </div>
        </div>
    </div>
</div>
<div class="col-md-5">
    <div class="radel-text-input dropdown-align">
        <label><span class="prop_mandatory">* </span>BHK Type</label>
        <select>
            <option disabled selected value> -- select an option -- </option>
            <option value="1rk">1RK</option>
            <option value="1bhk">1BHK</option>
            <option value="2bhk">2BHK</option>
            <option value="3bhk">3BHK</option>
            <option value="4+bhk">4+ BHK</option>
        </select>
    </div>
    <div class="radel-text-input">
        <input type="text" name="carpet_area">
        <label><span class="prop_mandatory">* </span>Carpet Area</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="total_balcony">
        <label><span class="prop_mandatory">* </span>No. of Balcony</label>
    </div>
    <div>
        <span><span class="prop_mandatory">* </span>Available From : </span><input id="prop_available_from" type="date" name="bday">
    </div>
</div>
<div class="col-md-12 addlisting-subtitles">Address Details</div>
<div class="col-md-5 col-md-offset-1">
    <div class="radel-text-input">
        <input type="text" name="prop_name">
        <label><span class="prop_mandatory">* </span>Building Name / No.</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="addr_ln1">
        <label><span class="prop_mandatory">* </span>Address</label>
    </div>
    <div class="radel-text-input">
        <input type="number" name="prop_pincode">
        <label><span class="prop_mandatory">* </span>Pincode</label>
    </div>
</div>
<div class="col-md-5">
    <div class="radel-text-input">
        <input type="text" name="prop_locality">
        <label><span class="prop_mandatory">* </span>Locality</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="prop_city">
        <label><span class="prop_mandatory">* </span>City</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="prop_state">
        <label><span class="prop_mandatory">* </span>State</label>
    </div>


</div>
<!--AMENITIES-->
<span class="clearfix"></span>
<div class="col-md-12 addlisting-subtitles">Amenities</div>
<div class="container">
    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_parking_no" name="amn_parking" checked value="true">
            <label for="amn_parking_no"></label>
        </span>
        <input type="radio" id="amn_parking_yes" name="amn_parking" value="false">
        <label for="amn_parking_yes"></label>
        <span class="switch-field-label">Parking</span>
    </div>

    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_gym_no" name="amn_gym" checked value="true">
            <label for="amn_gym_no"></label>
        </span>
        <input type="radio" id="amn_gym_yes" name="amn_gym" value="false">
        <label for="amn_gym_yes"></label>
        <span class="switch-field-label">Gym</span>
    </div>

    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_cctv_guildelines_no" name="amn_cctv_guildelines" checked value="true">
            <label for="amn_cctv_guildelines_no"></label>
        </span>
        <input type="radio" id="amn_cctv_guildelines_yes" name="amn_cctv_guildelines" value="false">
        <label for="amn_cctv_guildelines_yes"></label>
        <span class="switch-field-label">CCTV Guildelines</span>
    </div>

    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_club_house_no" name="amn_club_house" checked value="true">
            <label for="amn_club_house_no"></label>
        </span>
        <input type="radio" id="amn_club_house_yes" name="amn_club_house" value="false">
        <label for="amn_club_house_yes"></label>
        <span class="switch-field-label">Club House</span>
    </div>

    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_indoor_games_no" name="amn_indoor_games" checked value="true">
            <label for="amn_indoor_games_no"></label>
        </span>
        <input type="radio" id="amn_indoor_games_yes" name="amn_indoor_games" value="false">
        <label for="amn_indoor_games_yes"></label>
        <span class="switch-field-label">Indoor Games</span>
    </div>

    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_kids_area_no" name="amn_kids_area" checked value="true">
            <label for="amn_kids_area_no"></label>
        </span>
        <input type="radio" id="amn_kids_area_yes" name="amn_kids_area" value="false">
        <label for="amn_kids_area_yes"></label>
        <span class="switch-field-label">Kids Area</span>
    </div>

    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_lift_no" name="amn_lift" checked value="true">
            <label for="amn_lift_no"></label>
        </span>
        <input type="radio" id="amn_lift_yes" name="amn_lift" value="false">
        <label for="amn_lift_yes"></label>
        <span class="switch-field-label">Lift</span>
    </div>

    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_swimming_no" name="amn_swimming" checked value="true">
            <label for="amn_swimming_no"></label>
        </span>
        <input type="radio" id="amn_swimming_yes" name="amn_swimming" value="false">
        <label for="amn_swimming_yes"></label>
        <span class="switch-field-label">Swimming</span>
    </div>

    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_water_harvesting_no" name="amn_water_harvesting" checked value="true">
            <label for="amn_water_harvesting_no"></label>
        </span>
        <input type="radio" id="amn_water_harvesting_yes" name="amn_water_harvesting" value="false">
        <label for="amn_water_harvesting_yes"></label>
        <span class="switch-field-label">Water Harvesting</span>
    </div>

    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_power_backup_no" name="amn_power_backup" checked value="true">
            <label for="amn_power_backup_no"></label>
        </span>
        <input type="radio" id="amn_power_backup_yes" name="amn_power_backup" value="false">
        <label for="amn_power_backup_yes"></label>
        <span class="switch-field-label">Power Backup</span>
    </div>

    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_water_sewage_no" name="amn_Water_Sewage" checked value="true">
            <label for="amn_water_sewage_no"></label>
        </span>
        <input type="radio" id="amn_water_sewage_yes" name="amn_Water_Sewage" value="false">
        <label for="amn_water_sewage_yes"></label>
        <span class="switch-field-label">Water Sewage</span>
    </div>

    <div class="col-md-2 col-sm-3 col-xs-6 col-sm-3 switch-field">
        <span class="radio_no">
            <input type="radio" id="amn_party_hall_no" name="amn_party_hall" checked value="true">
            <label for="amn_party_hall_no"></label>
        </span>
        <input type="radio" id="amn_party_hall_yes" name="amn_party_hall" value="false">
        <label for="amn_party_hall_yes"></label>
        <span class="switch-field-label">Party Hall</span>
    </div>
</div>

<div class="col-md-12 addlisting-subtitles">Additional Information</div>
<div class="col-md-3 col-md-offset-1">
    <p class="additional-info-subtitile">Preferred Tennats:</p>
    <div class="col-md-12">
        <div>
            <input type="checkbox" id="family">
            <label for="family">Family</label>
        </div>
        <div>
            <input type="checkbox" id="bachelor">
            <label for="bachelor">Bachelor</label>
        </div>
        <div>
            <input type="checkbox" id="commercial">
            <label for="commercial">Commercial</label>
        </div>
    </div>
</div>
<div class="col-md-4">
    <p class="additional-info-subtitile"><span class="prop_mandatory">* </span>Facing:</p>
    <div class="col-md-4 col-xs-4">
        <input type="radio" id="prop_north" name="prop_facing">
        <label for="prop_north">North</label><br>
        <input type="radio" id="prop_south" name="prop_facing">
        <label for="prop_south">South</label><br>
        <input type="radio" id="prop_east" name="prop_facing">
        <label for="prop_east">East</label><br>
        <input type="radio" id="prop_west" name="prop_facing">
        <label for="prop_west">West</label>
    </div>
    <div class="col-md-8 col-xs-8">
        <input type="radio" id="prop_northeast" name="prop_facing">
        <label for="prop_northeast">North-East</label><br>
        <input type="radio" id="prop_northwest" name="prop_facing">
        <label for="prop_northwest">North-West</label><br>
        <input type="radio" id="prop_southeast" name="prop_facing">
        <label for="prop_southeast">South East</label><br>
        <input type="radio" id="prop_southwest" name="prop_facing">
        <label for="prop_southwest">South West</label>
    </div>
</div>
<div class="col-md-4">
    <p class="additional-info-subtitile"><span class="prop_mandatory">* </span>Property Feature</p>
    <div class="col-md-6">
        <input type="radio" id="prop_unfurnished" name="prop_furnished">
        <label for="prop_unfurnished">Unfurnished</label><br>
        <input type="radio" id="prop_semifurnished" name="prop_furnished">
        <label for="prop_semifurnished">Semi Furnished</label><br>
        <input type="radio" id="prop_fullyfurnished" name="prop_furnished">
        <label for="prop_fullyfurnished">Fully Furnished</label><br>
    </div>
</div>
<div class="col-md-11 col-md-offset-1">
    <div class="col-md-3 extras-align" style="padding-left:0px;">
        <p class="additional-info-subtitile">Extras:</p>
        <div class="col-md-12">
            <div>
                <input type="checkbox" id="store_room">
                <label for="store_room">Has store room.</label>
            </div>
            <div>
                <input type="checkbox" id="prayer_room">
                <label for="prayer_room">Has prayer room</label>
            </div>
            <div>
                <input type="checkbox" id="power_backup">
                <label for="power_backup">Has power backup</label>
            </div>
        </div>
    </div>
    <div class="col-md-3 floor-align">
        <div class="radel-text-input">
            <input type="text" name="prop_floorno">
            <label>Floor no.</label>
            <div class="radel-text-input">
                <input type="text" name="prop_totalfloor">
                <label>Total Floors</label>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-4 upload-image">
        <div>
            <span class="prop_mandatory">* </span><label class="addlisting-subtitles" for="file">Choose Images to Upload</label>
            <input type="file" id="file" name="file" multiple>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-10" style="height:70px; text-align: center;">
            <button type="button" class="addlisting-submit btn btn-default btn-lg">Submit</button>
        </div>
    </div>
    <script>
        $('.radel-text-input input').change(function () {
            if ($(this).val() !== '') {
                $(this).next().addClass('rdl-up');
                $(this).next().css('top', '-45px');
            } else {
                $(this).next().removeClass('rdl-up');
                $(this).next().css('top', '');
            }
        });
        $('.radel-text-input label').click(function () {
            $(this).prev().focus();
        });
    </script>

    <script>
        $(document).ready(function () {
            $(".for-rent").click(function () {
                $(".prop-price-buy").hide();
                $(".prop-price-rent").show();
            });
            $(".for-sale").click(function () {
                $(".prop-price-rent").hide();
                $(".prop-price-buy").show();
            });
        });
    </script>