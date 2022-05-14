<!DOCTYPE html>
<html lang="en">

<head>
  <title>Touch Typing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" type="text/css" href="webstyle.css">  
  <meta name="author" content="Mehtab Kaur">
  <meta name="description" content="Learning how to touch type">
  <meta name="keywords" content="typing, learn, touch, type, speed, wpm, accuracy, keyboards">
</head>

<body>
  <header>
    <a class="logo" href="index.html">MasterTyping</a>
    <nav>
      <ul class=navbar>
        <li><a href="index.html">Home</a></li>
        <li><a href="get-started.html">Get Started</a></li>
        <li><a href="my-experience.html">My Experience</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>

  <div class="content contact-page">
    <h1 class="heading contact-heading">Contact Me</h1>
    <div class="info-container" >
         <p class= "introduction">
            My name is Mehtab Kaur and I am a student at the <a href="https://www.uoguelph.ca/"target="_blank">University of Guelph</a>!
        </p>
        <p>If you have any questions or comments, here is how you can get in touch with me:</p>
        <p class=contact-info>
          <i class="material-icons">email</i> <a href="mailto:kaur2shine@gmail.com">kaur2shine@gmail.com</a>
        </p>
        <p class="contact-info">
          <i class="material-icons">call</i> <a href="tel:519-404-1920">519-404-1920</a>
        </p>
        <p>
          You can also add me on my social media:
        </p>
        <p class="contact-info">
          <a class="fab fa-instagram"></a>
          <a href="https://www.instagram.com/kaur2shine/?hl=en"target="_blank">Instagram</a>
        </p>
        <p class="contact-info">
          <a class="fab fa-discord"></a>
          <a href="https://discordapp.com/users/724357846094970901"target="_blank">Discord</a>
        </p>
    </div>
  
    <div class="form">
        <!-- leave action empty so results display on same page -->
      <form action = "" method = "post">
        <div class="input-container ic1">
          <input id="firstname" name = "FName" class="input" type="text" placeholder="First Name" required />
        </div>

        <div class="input-container ic2">
          <input id="lastname" name = "LName" class="input" type="text" placeholder="Last Name" required/>
        </div>

        <div class="input-container ic2">
          <input id="email" name = "UserEmail" class="input" type="email" placeholder="Email" required/>
        </div>

        <div class="input-container ic3">
          <textarea id = "message" name = "UserMsg" class="input" type="text" placeholder="Message" required></textarea>
        </div>
        <button type="submit" action = "message.php" method = "post" class="send-message">Send Message</button>
      </form>

        <?php

        if (isset($_POST['FName']) && isset($_POST['LName'])) {
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
                    echo '<div id="confirmation"> Message sent successfully! ✓ </div>';
                    //echo '<script type="text/javascript"> alert("Message sent successfully! ✓ ") </script>';
                }
                else{
                    echo '<div class = "errorMsg"> Sorry, failed to send your message! </div>';
                }
                }
                else{
                    echo '<div class = "errorMsg"> Enter a valid email address! </div>';
                    //echo '<script type="text/javascript"> alert("Enter valid email address") </script>';
                }
            }else{
                echo '<div class = "errorMsg"> Email and message field is required! </div>';
            }
        }

        ?>

    </div>
    <!-- Script  -->
    <!-- <script type="text/javascript" src="js/script.js"></script> -->
  </div>

  <footer>
    <div class="footer-sec">
      <p class=name>MasterTyping</p>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="get-started.html">Get Started</a></li>
      <li><a href="my-experience.html">My Experience</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
    <p class=copyright>Copyright &copy; MasterTyping - All rights reserved</p>
    </div>
  </footer>

</body>
</html>
