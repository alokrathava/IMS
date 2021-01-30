<?php

require 'config.php';
session_start();
if (!isset($_SESSION['a_id'])) {
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span>IMS </span>Admin</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                </a>
                                <div class="message-body"><small class="pull-right">3 mins ago</small>
                                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                    <br/><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                </a>
                                <div class="message-body"><small class="pull-right">1 hour ago</small>
                                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br/><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="all-button"><a href="#">
                                    <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                </a></div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-bell"></em><span class="label label-info">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li><a href="#">
                                <div><em class="fa fa-envelope"></em> 1 New Message
                                    <span class="pull-right text-muted small">3 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-heart"></em> 12 New Likes
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-user"></em> 5 New Followers
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $_SESSION['a_name']; ?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li><a href="addproduct.php"><em class="fa fa-shopping-cart">&nbsp;</em>Add Product</a></li>
        <li><a href="addcategory.php"><em class="fa fa-shopping-cart">&nbsp;</em>Add Category</a></li>
        <li><a href="product_scan.php"><em class="fa fa-barcode">&nbsp;</em>Product Scan</a></li>
<!--        <li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>-->
<!--        <li><a href="charts.php"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>-->
<!--        <li class="active"><a href="elements.php"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>-->
<!--        <li><a href="panels.php"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>-->
<!--        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">-->
<!--                <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1"-->
<!--                                                                       class="icon pull-right"><em-->
<!--                            class="fa fa-plus"></em></span>-->
<!--            </a>-->
<!--            <ul class="children collapse" id="sub-item-1">-->
<!--                <li><a class="" href="#">-->
<!--                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1-->
<!--                    </a></li>-->
<!--                <li><a class="" href="#">-->
<!--                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2-->
<!--                    </a></li>-->
<!--                <li><a class="" href="#">-->
<!--                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3-->
<!--                    </a></li>-->
<!--            </ul>-->
<!--        </li>-->
        <li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Scan Product</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Scan Product</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form role="form" action="addcategory_process.php" method="post">
                            <div class="form-group">
                                <label>Product Id</label>
                                <input type="text" class="form-control" id="barcode_id" aria-describedby="emailHelp"
                                       name="barcode_id"
                                       autofocus autocomplete="off">
                            </div>
                    </div>
                    </form>
                    <br><br><br><br><br>
                    <h3>Product Name:</h3><span id="pname"></span>
                    <h3>Product Id:</h3><span id="productId"></span>
                    <h3>Product Detail:</h3><span id="productDetail"></span>
                    <h3>Product Category:</h3><span id="category"></span>
                </div>
            </div>
        </div><!-- /.panel-->
    </div><!-- /.col-->
</div><!-- /.row -->
</div><!--/.main-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>
<script>
    $(document).ready(function () {
        $("input").keydown(function () {
            //$("input").css("background-color", "yellow");
            barcode_id = $('input:text[name=barcode_id]').val();
//alert(barcode_id);

            $.ajax({
                type: "POST",
                url: "get_data.php",
                data: {'barcode_id': barcode_id},
                success: function (result) {
                    //  alert(result);
                    var res = result;
                    var fields = res.split('/');
                    //    alert(res);

                    $("#pname").val(fields[0]);
                    $("#productId").val(fields[1]);
                    $("#productDetail").val(fields[2]);
                    $("#category").val(fields[3]);


                    console.log(result);
                }
            });


        });

        $("input").keyup(function () {

            //$("input").css("background-color", "green");

            //$("input").css("background-color", "yellow");
            barcode_id = $('input:text[name=barcode_id]').val();
//alert(barcode_id);

            $.ajax({
                type: "POST",
                url: "get_data.php",
                data: {'barcode_id': barcode_id},
                success: function (result) {
                    //  alert(result);
                    var res = result;
                    var fields = res.split('/');
                    //alert(res);

                    var x = $("#pname").html(fields[0]);
                    var x = $("#productId").html(fields[1]);
                    var x = $("#productDetail").html(fields[2]);
                    var x = $("#category").html(fields[3]);
                    //alert(x);

                    console.log(result);
                }
            });

        });
    });
</script>
</body>
</html>

