<?php
 
 
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
?>


 <!--?php
         $dbhost = 'localhost';
         $dbuser = 'id9210197_trueword_db_username';
         $dbpass = 'opeyemioluwa';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         mysqli_close($conn);
      ?>