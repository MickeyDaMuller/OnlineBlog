
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

	$description = mysqli_real_escape_string($conn,$_POST['description']);
      $title = mysqli_real_escape_string($conn,$_POST['title']); 
       $time_date = mysqli_real_escape_string($conn,$_POST['date_posted']); 
 //$timezone  = +1; //(GMT -5:00) EST (U.S. & Canada)
//$time_date = gmdate("d-M-Y H:i a");
      $space = " ";

     // var_dump($_POST);
  
$errors = array();
$uploadedFiles = array();
$extension = array("jpeg","jpg","png","gif","docx","doc","pdf","csv","xlsx");
$bytes = 1024;
$KB = 1024;
$totalBytes = $bytes * $KB;
$UploadFolder = "UploadFolder";
 
$counter = 0;
 
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
    $temp = $_FILES["files"]["tmp_name"][$key];
    $name = $_FILES["files"]["name"][$key];
    
//echo $name;

     
    if(empty($temp))
    {
        break;
    }
     
    $counter++;
    $UploadOk = true;
     
    if($_FILES["files"]["size"][$key] > $totalBytes)
    {
        $UploadOk = false;
        array_push($errors, $name." file size is larger than the 1 MB.");
      echo '<script>alert("File size is larger than the 1 MB..")</script>';
    }
     
    $ext = pathinfo($name, PATHINFO_EXTENSION);
    if(in_array($ext, $extension) == false){
        $UploadOk = false;
        array_push($errors, $name." is invalid file type. Only jpeg, jpg, png, gif, docx, doc, pdf, csv, xlsx");
        echo '<script>alert("Invalid file type. Only jpeg, jpg, png, gif, docx, doc, pdf, csv, xlsx")</script>';
    }
     
    
     
    if($UploadOk == true){

if(file_exists($UploadFolder."/".$name) == true){
        //$UploadOk = false;
        //array_push($errors, $name." file is already exist.");

//echo "gooo upload";

  $name1 = uniqid().$name;
        $query   = " INSERT INTO `blog_post` ( `title`, `description`, `img_name`, `date_posted`) VALUES ('" .$title. "','" .$description. "','http://truewordblog.site/UploadFolder/" .$name1. "','" .$time_date. "')";

      
//echo $query;
$success = mysqli_query($conn,$query);

        move_uploaded_file($temp,$UploadFolder."/".$name1);
        array_push($uploadedFiles, $name1);
    }


      else{

$query   = "INSERT INTO `blog_post` ( `title`, `description`, `img_name`, `date_posted`) VALUES ('" .$title. "','" .$description. "','http://truewordblog.site/UploadFolder/" .$name. "','" .$time_date. "')";
//echo $query;
$success = mysqli_query($conn,$query);

        move_uploaded_file($temp,$UploadFolder."/".$name);
        array_push($uploadedFiles, $name);
      }
    }
}
 
if($counter>0){
    if(count($errors)>0)
    {
        echo "<b>Errors:</b>";
        echo "<br/><ul>";
        foreach($errors as $error)
        {
            echo "<li>".$error."</li>";
        }
        echo "</ul><br/>";
    }
     
    if(count($uploadedFiles)>0){

echo '<script>alert("Upload successful!")</script>';
echo "<center>Upload successful!</center>";

       /* echo "<b>Uploaded Files:</b>";
        echo "<br/><ul>";
        foreach($uploadedFiles as $fileName)
        {
            echo "<li>".$fileName."</li>";
        }
        echo "</ul><br/>";
         
        echo count($uploadedFiles)." file(s) are successfully uploaded.";*/
    }                               
}
else{
    
  echo '<script>alert("Please, Select file(s) to upload!")</script>';
  echo "<center>Please, Select file(s) to upload!</center>";
}


}
   
?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>


	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138586477-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138586477-1');
</script>




   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Admin Page - TrueWord Blog</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">        

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138586477-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138586477-1');
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-1419754308772098",
          enable_page_level_ads: true
     });
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1419754308772098",
    enable_page_level_ads: true
  });
</script>

<script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>

<amp-auto-ads type="adsense"
              data-ad-client="ca-pub-1419754308772098">
</amp-auto-ads>

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.html">Author</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li><a href="index.html" title="">Home</a></li>									
					<li class="has-children">
						<a href="category.html" title="">Categories</a>
						<ul class="sub-menu">
			            <li><a href="category.html">Wordpress</a></li>
			            <li><a href="category.html">HTML</a></li>
			            <li><a href="category.html">Photography</a></li>
			            <li><a href="category.html">UI</a></li>
			            <li><a href="category.html">Mockups</a></li>
			            <li><a href="category.html">Branding</a></li>
			         </ul>
					</li>
					<li class="has-children">
						<a href="single-standard.html" title="">Blog</a>
						<ul class="sub-menu">
			            <li><a href="single-video.html">Video Post</a></li>
			            <li><a href="single-audio.html">Audio Post</a></li>
			            <li><a href="single-gallery.html">Gallery Post</a></li>
			            <li><a href="single-standard.html">Standard Post</a></li>
			         </ul>
					</li>
					<li><a href="style-guide.html" title="">Styles</a></li>
					<li><a href="about.html" title="">About</a></li>	
					<li class="current"><a href="contact.html" title="">Contact</a></li>										
				</ul>
			</nav> <!-- end main-nav-wrap -->

			<div class="search-wrap">
				
				<form role="search" method="get" class="search-form">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->	

			<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->	
   		
   	</div>     		
   	
   </header> <!-- end header -->


   <!-- content
   ================================================== -->
   <section id="content-wrap" class="site-page">
   	<div class="row">
   		<div class="col-twelve">

   			<section>  

   				

					

						<form method="post"  action="admin_post.php" name="adminpostform" id="adminpostform" onsubmit="return(validate());" enctype="multipart/form-data">
	  					   <fieldset>

	                     <div class="form-field">
	  						      <input name="title" type="text" id="title" class="full-width" placeholder="Title" value="">
	                     </div>

	                     <div class="form-field">
	  						      <input name="date_posted" type="datetime-local" id="date_posted" class="full-width" placeholder="" value="">
	                     </div>

	                     <!--div class="form-field">
	  						      <input name="category" type="text" id="cEmail" class="full-width" placeholder="Your Category" value="">
	                     </div-->

	                     <div class="form-field">
	  						      <input name="files[]" type="file" id="fileToUpload" class="full-width" placeholder="Image"  value="">
	                     </div>



	                     <div class="message form-field">
	                        <textarea name="description" id="description" class="full-width" placeholder="Your Description" ></textarea>
	                     </div>

	                     <button type="submit" value="submit" id="submit" name="submit" class="submit button-primary full-width-on-mobile">Submit</button>

	  					   </fieldset>
  				      </form> <!-- end form -->

				</section>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->		
   </section> <!-- end content -->

   
   <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            

	            <h4>About Our Site</h4>

	               <p>
		          	Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu magna Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In reprehenderit commodo aliqua irure labore.
		          	</p>

		      </div> <!-- end footer-info -->

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Site Links</h4>

	      		<ul>
	      			<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>

	      	</div> <!-- end site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
	      			<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Dribbble</a></li>
						<li><a href="#">Google+</a></li>
						<li><a href="#">Instagram</a></li>
					</ul>
	      	           	
	      	</div> <!-- end social links --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<h4>Subscribe</h4>

	      		<p>Keep yourself updated. Subscribe to our newsletter.</p>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" class="group" novalidate="true">

							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Type &amp; press enter" required=""> 
	   		
			   			<input type="submit" name="subscribe" >
		   	
		   				<label for="mc-email" class="subscribe-message"></label>
			
						</form>

	      		</div>	      		
	      	           	
	      	</div> <!-- end subscribe -->         

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Abstract 2016</span> 
		         	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="http://maps.google.com/maps/api/js?v=3.13&amp;sensor=false"></script>
   <script src="js/main.js"></script>  

</body>

</html>