<?php
if(!empty($_POST["send"])){
    $name =  $_POST["name"];
    $email =  $_POST["email"];
    $subject =  $_POST["subject"];
    $message =  $_POST["message"];
    $toEmail = "spsahilchowdhary@gmail.com";

    $mailHeaders = "Your Name: " . $name .
    "/r/n Your Email: " . $email .
    "/r/n Subject: " . $subject .
    "/r/n Message: " . $message . "/r/n" ;
    if(mail($toEmail, $name, $mailHeaders)){
      $message = "Your Information is recieved successfully."
    }

  }
?>