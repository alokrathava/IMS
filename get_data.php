<?php
require 'config.php';

$barcode_id = $_POST['barcode_id'];
//$barcode_id = 8901207504013;
//$sq = "select * from stockin where stockin_id='$stockin_id'";

$sq = "select * from `product` where product_id='$barcode_id'";

$qu = mysqli_query($conn, $sq) or die(mysqli_error());
$row1 = mysqli_fetch_array($qu);
if($row1 > 0){
$name = $row1['product_name'];
$barcode_id = $row1['product_id'];
$product_detail = $row1['product_detail'];
$product_category = $row1['product_category'];

$category_sql = "SELECT * FROM `category` WHERE id='$product_category'";
$result = mysqli_query($conn,$category_sql);
$row = mysqli_fetch_array($result);

$category = $row['category_type'];
//	echo $price;

//echo $name . "/" . $price . "/" . $barcode_id;
echo $name . "/" . $barcode_id."/".$product_detail."/".$category;
}else{
    $name = "No Data Found";
}

?>
