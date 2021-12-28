<?php

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    include "config.php";
     
    $emailId = $_POST['email'];
 
    $sql = "SELECT * FROM login WHERE email='" . $emailId . "'";
 
	$result = $conn->query($sql);
	



    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     
    $link = "<a href='http://localhost:8000/reset-password.php?key=".$emailId."'>Click To Reset password</a>";
 

	


    require_once "vendor/autoload.php";
    $mail = new PHPMailer;
    //Enable SMTP debugging.
    $mail->SMTPDebug = 3;                           
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();        
    //Set SMTP host name                      
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                      
    //Provide username and password
    $mail->Username = "htikehtet566@gmail.com";             
    $mail->Password = "hhsan2022";                       
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";    
                   
    //Set TCP port to connect to
    $mail->Port = 587;                 
    $mail->From ="htikehtet566@gmail.com";        
    $mail->addAddress("htikehtet566@gmail.com",'reciever_name');
    $mail->isHTML(true);
    $mail->Subject = "Reset Password";
    $mail->Body = "<i>Mail body in HTML</i>";
	$mail->Body    = 'Click On This Link to Reset Password '.$link.'';



    if(!$mail->send())
    {
    echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
	header("location: index.php");
    }
}
}
