<?php

session_start();
require 'config.php';
require "vendor/autoload.php";

// Data Fetch
echo $product_Id = mysqli_real_escape_string($conn, $_POST['product_id']);
echo $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
echo $product_Detail = mysqli_real_escape_string($conn, $_POST['product_detail']);
echo $product_Category = mysqli_real_escape_string($conn, $_POST['Category']);
echo $product_qty = mysqli_real_escape_string($conn, $_POST['product_qty']);

//$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
//$code = $Bar->getBarcode($_GET['product_id'], $Bar::TYPE_CODE_128);


// echo $product_Id,$product_name,$product_Detail,$product_Category,$product_qty;

//$insert_product_sql = "INSERT INTO `product` (product_id,product_name,product_detail,product_category,product_qty) VALUES ('$product_Id','$product_name','$product_Detail','$product_Category','$product_qty')";
//echo $insert_product_sql;
//$result = $conn->query($insert_product_sql);
//if ($result) {
//$bar = $code;

//for ($i = 0; $i <= $product_qty; $i++) {
//}
//echo $code;
//    header('Location:addproduct.php');
//} else {
//    header('Location:addproduct.php');
//}


?>





