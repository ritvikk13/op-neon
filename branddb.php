<?php use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
?> 



<?php
include 'db.php';
if(isset($_POST['submit']))
{    
     $Name = $_POST['Name'];
     $Number = $_POST['Number'];
     $Email = $_POST['Email']; 
     $Company = $_POST['Company']; 
     $Budget = $_POST['Budget'];  

     $sql = " INSERT INTO `Neon_brand`(`Name`, `Number`, `Email`, `Company`, `Budget`) VALUES 
      ('$Name','$Number','$Email','$Company','$Budget')";
     
     if (mysqli_query($conn, $sql)) {
       // echo "New record has been added successfully !";

       
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


     try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                            //Enable verbose debug output
        $mail->isSMTP();                                                   //Send using SMTP
        $mail->Host       = 'smtp.freesmtpservers.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                         //Enable SMTP authentication
        $mail->Username   = '';                    //SMTP username
        $mail->Password   = '';                           //SMTP password
        $mail->SMTPSecure = 'tls';                                       //Enable implicit TLS encryption
        $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set 
                                                               //`SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        
        $mail->setFrom('noreply@technosmarter.com', 'Techno Smarter');
        
        //for multiple emails
        // $toarray=explode(",",$to);
        // foreach($toarray as $row)
        // {
        //      $mail->addAddress($row); 
        // }
        //for single email 
           $mail->addAddress($Email,$Name);     //Add a recipient              //Name is optional
           
        $mail->addReplyTo('technosmarterinfo@gmail.com', 'Techno Smarter');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject =$Number ;
        $mail->Body    = $Budget;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo '<div class="success ">Message has been sent</div>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
                











}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,600,900');

*{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body{
        background: #000d1d;
        height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}
a {
  color: #fff;
  text-decoration: none;
  transition: all 0.30s linear 0s;
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding: 30px;
  text-align:center;
}
h1{
  font-family: 'Raleway', Arial Black, Sans-Serif;
  font-size:4em;
  font-weight: 900;
  letter-spacing:3px;
  color: #fafafa;
  margin:0;
  margin-top: 40px;
  margin-bottom:40px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#fafafa;
  font-family: 'Raleway', sans-serif;
  letter-spacing:1px;
  line-height: 1.5;
}
.go-home{
  background: #e83890;
  border:none;
  padding: 25px 30px;
  margin: 30px 0;
  border-radius: 5px;
  cursor: pointer;
}
.go-home:hover{
  opacity: 0.9;
}
.go-home a{
  font-family: 'Raleway', Arial Black;
  font-size: 1rem;
  font-weight: 700!important;
  text-transform: uppercase;
  letter-spacing: 2px;
  
}
.footer-like{
  margin-top: auto; 
  background: rgb(31,38,130);
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#fafafa;
  font-family: 'Raleway', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight: 600;
}

.footer-like p a:hover{
  color:#FFF;
 }

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .thankyoucontent{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  }
  
  
}
  </style>

</head>
  <body>
  <div class=thankyoucontent>
 <div class="wrapper-1">
    <div class="wrapper-2">
       <img src="https://i.ibb.co/Lkn7rkG/thank-you-envelope.png" alt="thank-you-envelope" border="0">
     <h1>Thank you!</h1>
      <p>for contacting us, we will reply promptly</p> 
      <p>once your message is received. </p>
      <button class="go-home"><a href="index.php">
        home page</a>
      </button>
    </div>
   
    <div class="footer-like">
      <p>
      </p>
    </div>
</div>
 




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>