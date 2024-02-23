<?php
include('../Database_connect/connect.php');

// Form Register insert to data

// Check if the request is POST
if (isset($_POST)) {
    // Initialize variables with form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];


    // Prepare and bind the insert statement
    $insert_user = "INSERT INTO user (name, email, number, password) VALUES ('$name', '$email', '$number', '$password')";
    // var_dump($insert_user);
    // die();
    $result_query = mysqli_query($con, $insert_user);

    // Execute the statement
    if ($result_query) {
        echo json_encode(["status" => true, "message" => "User registered successfully"]);
    } else {
        echo json_encode(["status" => false, "message" => "Error: " . $con->error]);
    }
}