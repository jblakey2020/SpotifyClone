<?php
//start alph buffering
ob_start();

//setting the time zone

$con = mysqli_connect("localhost","root","JustinIsAwsome$0","MySpotify");

if(mysqli_connect_errno()){
    echo "Failed to connected : ", mysqli_connect_errno();
}