<?php
//start alph buffering
ob_start();

//Starting sessions so that the computer can stay where it is at

session_start();

//setting the time zone

$con = mysqli_connect("localhost","root","JustinIsAwsome$0","MySpotify");

if(mysqli_connect_errno()){
    echo "Failed to connected : ", mysqli_connect_errno();

}

if ($con->connect_error) {
    echo "Connection failed: " . $con->connect_error;
} 
