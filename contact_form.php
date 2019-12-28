
<?php 
 //session_start();
 //require 'phpmailer/PHPMailerAutoload.php'; 
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

	//echo "enter";
$fullname    = $conn->real_escape_string($_POST['fullname']);
$email    = $conn->real_escape_string($_POST['email']);
$message   = $conn->real_escape_string($_POST['message']);

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
  
  $query   = "INSERT into contact_form (fullname,email,message,date_posted) VALUES('" . $fullname . "','" . $email . "','" . $message . "','" . $time_date . "')";



 // echo $query;
$success = $conn->query($query);


 if($success)
{

echo '<script>alert("Message Sent!");</script>';
   //echo "<div align='center'>Congratulations! You have successfully registered for the GYLF conference in Madagascar.</div>";
  echo '<script>
  location.replace(document.referrer);
</script>';
}

}
   
?>


