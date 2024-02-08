<?php

$con=mysqli_connect('localhost','root','','e-commerce-furni');

// Check connection
if(!$con){
    die(mysqli_error($con));
}

?>