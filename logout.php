<?php
session_start();
$_SESSION['a_email'] = '';
$_SESSION['a_id'] = "";
$_SESSION['a_name'] = "";
unset($_SESSION['email']);
session_destroy();
header('location:index.php');
?>