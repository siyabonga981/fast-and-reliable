<?php
if (isset($_POST['Submit'])){
  $name = $_POST['name'];
  $email =  $_POST['email'];
  $subject = "Enquiry From Website";
  $message = $_POST['message'];

  $to = 'quotes@fastandreliableremovals.co.za';
  $sub = $subject;
  $message = "Name: " .$name."\n"."Subject: " .$sub."\n". "Message: "."\n".$message;
  $headers = $email;
  $headers .= "Reply-To: Support <$to>\r\n";
    $headers .= "Return-Path: Support <$to>\r\n";
    $headers .= "From: $email <$email>\r\n";
    $headers .= "Organization: Fast and Reliable Services \r\n";
    $headers .= "Content-Type: text/plain\r\n";


    if(mail($to, $subject, $message, $headers )){
      echo "<div style='color: #fff; background: #000; padding:100px; height: 150px; text-align: center;'>
      <h2> Sent Successfully! Thank you ".$name.  ". We will contact you shortly <br> Click <a style='color: red;' href='https://fastandreliableremovals.co.za'>here</a> to go back to the home page.
      </h2>
      </div>
      " ;
  
    }else {
      echo "Something went wrong!";
    }
  }
  ?>
  