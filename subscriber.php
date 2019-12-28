
<?php 
 //session_start();
 require 'phpmailer/PHPMailerAutoload.php'; 
function Connect()
{
$dbhost = "localhost";
 $dbuser = "trueword_user";
 $dbpass = "opeyemioluwa0316";
 $dbname = "trueword_db";
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 


     return $conn;
}

$conn = Connect();






if(isset($_POST['submit']))
{


$email    = $conn->real_escape_string($_POST['email']);

$timezone  = +1; //(GMT -5:00) EST (U.S. & Canada)
$time_date = gmdate("d-M-Y H:i a", time() + 3600*($timezone+date("I")));
   


   //echo $email;
//echo gmdate("Y/m/j H:i:s", time() + 3600*($timezone+date("I"))); 
//var_dump($_POST);

 //echo $referer;
// WARNING: THIS CODE IS INSECURE. DO NOT USE THIS CODE.
 /*$password = "";
 $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
 
 for($i = 0; $i < 8; $i++)
 {
      $random_int = mt_rand();
     $password .= $charset[$random_int % strlen($charset)];
}

$confpass = $password;*/
  
  $query   = "INSERT into subscribers (email,date_posted) VALUES('" . $email . "','" . $time_date . "')";



 // echo $query;
$success = $conn->query($query);


 if($success)
{

echo '<script>alert("Congratulations! You have successfully subscribed.");</script>';
   //echo "<div align='center'>Congratulations! You have successfully registered for the GYLF conference in Madagascar.</div>";


//location.replace(document.referrer); take you to the previous page you came from
  echo '<script>

  location.replace(document.referrer);
</script>';


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'truewordblog.site';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@truewordblog.site';                 // SMTP username
$mail->Password = 'Opeyemioluwa_0316';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('noreply@truewordblog.site', "True Word Blog");
$mail->addAddress($email, $fullname);     // Add a recipient
$mail->addAddress($email);               // Name is optional
$mail->addReplyTo('info@truewordblog.site', "True Word Blog");
//$mail->addCC('iexcel4ever@gmail.com');
//$mail->addBCC('mike.hsch@gmail.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Registration Successful';
$mail->Body    = "

Dear $fullname,<br><br>


Congratulations! You have successfully registered for the GYLF Online Conference scheduled to hold on the 10th of November 2018 by
12:00PM GMT +1.<br><br>


<p>Kindly follow the link below to confirm your registration.<br>





Find below login details.<br><br>


<b>Email:</b> $email<br>
<b>Password:</b> $password <br><br>



Thank you<br>

The Global Youth Leaders' Forum.

"





;
$mail->AltBody = "

Congratulations! You have successfully registered for the GYLF Training Centre.<br><br>
<p>Kindly follow the link below to confirm your registration.<br>

<a href='http://www.globalyouthleadersforum.org/confirmconf.php?passkey=".$com_code."'>Confirm Registration</a><br><br><br>



Thank you<br>

The Global Youth Leaders' Forum.



";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  echo '<script>alert("Congratulations! You have successfully registered for the GYLF Online Conference, check your email to confirm registration.");</script>';
   //echo "<div align='center'>Congratulations! You have successfully registered for the GYLF conference in Madagascar.</div>";
  echo '<script>
  window.location.href = "http://www.globalyouthleadersforum.org/gylf_member_invite.php";
</script>';
}

 
$conn->close();

}

}
   
?>


