<?php
if (isset($_POST['Submit'])){
  $name = $_POST['name'];
  $email =  $_POST['email'];
  $phone = $_POST['phone'];
  $pickup = $_POST['pickup'];
  $floorNumber = $_POST['floorNumber'];
  $destination = $_POST['destination'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $liftAvailable = $_POST['liftAvailable'];
  $liftWorking = $_POST['liftWorking'];
  $packing = $_POST['packing'];
  $subject = "Quote";

  $to = 'quotes@fastandreliableremovals.co.za';
  $sub = $subject;
  $message = "Subject: " .$sub."\n"."Name: ".$name."\n"."Phone: ".$phone."\n". "Pickup: "."\n".$pickup."\n". "Floor Number: "."\n".$floorNumber."\n". "Destination: "."\n".$destination."\n". "Date: "."\n".$date."\n". "Time: "."\n".$time."\n". "Lift Available: "."\n".$liftAvailable."\n". "Lift Working: "."\n".$liftWorking."\n". "Packing: "."\n".$packing;
  $headers = $email;
  $headers .= "Reply-To: Support <$to>\r\n";
    $headers .= "Return-Path: Support <$to>\r\n";
    $headers .= "From: $email <$email>\r\n";
    $headers .= "Organization: Fast and Reliable Removals \r\n";
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
  