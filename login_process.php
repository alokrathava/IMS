<?php
require 'config.php';
session_start();

//    Data Fetch
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
//    $pwd = md5(mysqli_real_escape_string($conn,$_POST['password']));
//    echo $email,$password,pwd;

//Query
$select_sql = "SELECT *  FROM admin WHERE a_mail='$email' AND a_password='$password'";
//echo $select_sql;
$result = $conn->query($select_sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $a_id = $row['a_id'];
        $a_name = $row['a_name'];
        $a_mail = $row['a_mail '];
    }
    $_SESSION['a_id'] = $a_id;
    $_SESSION['a_name'] = $a_name;
    $_SESSION['a_mail'] = $a_mail;
    header('Location:index.php');

}else{
    echo 'No Data Found';
    header('Location:login.php');
}


?>