<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        p.inline {
            display: inline-flex;
            float: left;
            align-items: stretch;
            /*vertical-align: top;*/
            margin: 0;
            padding: 0;
            height: auto;

            /*display: -webkit-box;*/
            /*display: -webkit-flex;*/
            /*display: -ms-flexbox;*/
            /*display: flex;*/

        }

        span {
            font-size: 13px;
        }
    </style>
    <style type="text/css" media="print">
        @page {
            size: auto;   /* auto is the initial value */
            margin: 0mm;  /* this affects the margin in the printer settings */

        }
    </style>
</head>
<body onload="window.print();">
<!--<body>-->
<div style="margin-left: 5%">
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
    $code = $Bar->getBarcode($_POST['product_id'], $Bar::TYPE_CODE_128);

    $insert_product_sql = "INSERT INTO `product` (product_id,product_name,product_detail,product_category,product_qty) VALUES ('$product_Id','$product_name','$product_Detail','$product_Category','$product_qty')";

    $result = $conn->query($insert_product_sql);
    echo "<br> <div class='row'>";
    if ($result) {
        for ($i = 1; $i <= $_POST['product_qty']; $i++) {
            echo " <div class='col-sm-3'>" . $code . " " . $product_Id . " </div>";
        }
        echo " </div>";
//        echo "<a href='addproduct.php' style='btn btn-success btn-lg'>Add Products</a>";
    } else {

    }


    ?>
</div>

<script>
    let redirect_Page = () => {
        let tID = setTimeout(function () {
            window.location.href = "addproduct.php";
            window.clearTimeout(tID);		// clear time out.
        }, 5000);
    }

    // Using regular methods.
    /* function redirect_Page () {
        var tID = setTimeout(function () {
            window.location.href = "https://www.encodedna.com/javascript/operators/default.htm";
            window.clearTimeout(tID);		// clear time out.
        }, 5000);
    } */
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>