<?php

session_start();
require 'config.php';
require "vendor/autoload.php";

// Data Fetch
$product_Id = mysqli_real_escape_string($conn, $_POST['product_id']);
$product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
$product_Detail = mysqli_real_escape_string($conn, $_POST['product_detail']);
$product_Category = mysqli_real_escape_string($conn, $_POST['Category']);
$product_qty = mysqli_real_escape_string($conn, $_POST['product_qty']);

$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $Bar->getBarcode($_GET['product_id'], $Bar::TYPE_CODE_128);


// echo $product_Id,$product_name,$product_Detail,$product_Category,$product_qty;

$insert_product_sql = "INSERT INTO `product` (product_id,product_name,product_detail,product_category,product_qty) VALUES ('$product_Id','$product_name','$product_Detail','$product_Category','$product_qty')";
//echo $insert_product_sql;
$result = $conn->query($insert_product_sql);
if ($result) {
    echo $code;
    header('Location:addproduct.php');
} else {
    header('Location:addproduct.php');
}


?>





