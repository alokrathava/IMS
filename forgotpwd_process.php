<?php
require 'config.php';
// Data Fetch
$email = $_POST['email'];

$select_sql = "select * from admin where a_mail='$email'";
echo $select_sql;

$result = $conn->query($select_sql);

if ($result->num_rows>0) {
    if($row = $result->fetch_assoc()) {

        $Email = $row['a_mail'];
        $Pwd = $row['a_password'];
        $Name = $row['a_name'];



        // Mailer Starts from here
        require 'phpmail/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->SMTPSecure = 'STARTTLS';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'jigarpatel.devloper@gmail.com';                 // SMTP username
        $mail->Password = 'admin@1a';                           // SMTP password

        $mail->setFrom('jigarpatel.devloper@gmail.com', 'IMS');
        $mail->addAddress($Email, $Name);     // Add a recipient

        // $mail->addReplyTo('info@example.com', 'Information');
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Password of IMS';
        // Mail Body
        $mail->Body .= '<h3 style="color:black;">Your Email Is '.$Email.'.</h3>';
        $mail->Body .= '<h3 style="color:black;">Your Password Is '.$Pwd.'.</h3>';


        if ($mail->send()) {
            echo 'Success.';
            header('Location:login.php');
        } else {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }else{
        echo "Data Not Found";
        header('Location:forgotpwd.php');
    }

}



?>