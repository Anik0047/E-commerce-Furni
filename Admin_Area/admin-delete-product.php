<?php

include('../Database_connect/connect.php');


if(isset($_GET['deletedid'])){
    $id=$_GET['deletedid'];

    $sql="delete from `products` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:admin-products.php');
    }else{
        die(mysqli_errno($con));
    }
}

?>