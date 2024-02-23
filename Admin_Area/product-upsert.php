<?php
include('../Database_connect/connect.php');
// die();

if (isset($_POST)) {
    $operation = $_POST['operation'];
    if ($operation == 'INSERT') {
        $product_title = $_POST['product_title'];
        $product_description = $_POST['product_description'];
        $product_category = $_POST['product_category'];
        $product_price = $_POST['product_price'];

        $product_image = $_FILES['product_image']['name'];
        $temp_image = $_FILES['product_image']['tmp_name'];

        if ($product_title == '' or $product_description == '' or $product_category == '' or $product_price == '' or $product_image == '') {
            echo json_encode(["status" => false, "message" => "Please Fill All The Fields"]);
            return;
        } else {
            // Move the uploaded images to a specific directory
            $upload_directory = "Product Images/";
            $upload_path = $upload_directory . $product_image;

            if (move_uploaded_file($temp_image, $upload_path)) {
                // Insert the product data into the 'products' table
                $insert_products = "INSERT INTO `products` (product_name, product_description, product_category, product_image, product_price) VALUES ('$product_title', '$product_description', '$product_category', '$product_image', '$product_price')";

                // Execute the insert query
                $result_query = mysqli_query($con, $insert_products);

                // Check if the insertion was successful and return a response
                if ($result_query) {
                    echo json_encode(array(
                        "status" => true,
                        "message" => "Successfully inserted the product"
                    ));
                } else {
                    echo json_encode(array(
                        "status" => false,
                        "message" => "Failed to insert the product: " . mysqli_error($con)
                    ));
                }
            } else {
                echo json_encode(array(
                    "status" => false,
                    "message" => "Failed to move uploaded file"
                ));
            }
        }
    }

    if($operation == 'DELETE'){
    $id=$_POST['deleteId'];

    $sql="delete from `products` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo json_encode([
            'status' => true,
            'message' => 'Successfull'
        ]);
        // header('location:admin-products.php');
    }else{
        echo json_encode([
            'status' => false,
            'message' => mysqli_error($con)
        ]);
    }
}

}


