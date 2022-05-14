<?php
  //Get at form values
  $FName = $_POST['FName'];
  $LName = $_POST['LName'];
  $UserEmail = $_POST['UserEmail'];
  $UserMsg = $_POST['UserMsg'];

  //If email and message field is not empty
  if(!empty($UserEmail) && !empty($UserMsg)){ 
    //If user entered email is valid
    if(filter_var($UserEmail, FILTER_VALIDATE_EMAIL)){
      $receiver = "kaur2shine@gmail.com"; //email receiver email address
      $subject = "From: $FName $LName <$UserEmail>"; //subject of the email (Format: From: Example <example@gmail.com>)
      $body = "Name: $FName $LName\nEmail: $UserEmail\n\nMessage:\n$UserMsg\n\nRegards,\n$FName $LName"; //concating all user values inside body variable
      $sender = "From: $UserEmail"; //sender email
      //mail() is inbuilt php function to send mail
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }

?>

