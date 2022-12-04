<?php

$con = new mysqli('localhost', 'root', '','dolphin_crm'); 
if(!$con){
    die (mysqli_error($con));