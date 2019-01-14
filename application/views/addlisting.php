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
</style>
<div class="col-md-12">
    <h2>Add new property listing</h2>
</div>
<div class="col-md-5">
    <div class="radel-text-input">
        <input type="text" name="prop_name">
        <label>Property name</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="addr_ln1">
        <label>Address Line 1</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="addr_ln2">
        <label>Address Line 2</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="prop_locality">
        <label>Locality</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="prop_city">
        <label>City</label>
    </div>
    <div class="radel-text-input">
        <input type="number" name="prop_pincode">
        <label>Pincode</label>
    </div>
</div>
<div class="col-md-5">
    <div class="radel-text-input">
        <input type="number" name="prop_price">
        <label>Price</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="prop_area">
        <label>Area</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="prop_status">
        <label>Status</label>
    </div>
    <div class="radel-text-input">
        <input type="number" name="prop_bhk">
        <label>BHK</label>
    </div>
    <div class="radel-text-input">
        <input type="number" name="bath_num">
        <label>Number of bathrooms</label>
    </div>
    <div class="radel-text-input">
        <input type="text" name="prop_description">
        <label>Description</label>
    </div>
</div>
<script>
    $('.radel-text-input input').change(function () {
        if ($(this).val() != '') {
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