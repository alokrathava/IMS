<?php
session_start();
require 'config.php';

// Data Fetch
$Category = mysqli_real_escape_string($conn,$_POST['category']);

// echo $product_Id,$product_name,$product_Detail,$product_Category,$product_qty;

$insert_category = "INSERT INTO category (category_type) VALUES ('$Category')";
//echo $insert_category;
$result = $conn->query($insert_category);

if ($result){
    header('Location:addcategory.php');
}else{
    header('Location:addcategory.php');
}


?>