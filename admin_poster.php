
<?php 
 //session_start();
 //require 'phpmailer/PHPMailerAutoload.php'; 
function Connect()
{
$dbhost = "localhost";
 $dbuser = "id9210197_trueword_db_username";
 $dbpass = "opeyemioluwa";
 $dbname = "id9210197_trueword_db_name";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 


     return $conn;
}

$conn = Connect();





if(isset($_POST['submit']))
{

$fullname    = $conn->real_escape_string($_POST['confname']);
//$gender   = $conn->real_escape_string($_POST['confgender']);

$email    = $conn->real_escape_string($_POST['confemail']);
$phone = $conn->real_escape_string($_POST['confphone']);


 $query   = "INSERT into blog_post_1 (title,description,img_name) VALUES('" . $fullname . "','" . $email . "','" . $phone . "')";



  //echo $query;
$success = $conn->query($query);


 if($success)
{
echo "Submitted";

}
 


}
   
?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

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

   				

					
<form action="admin_poster.php" class="" name="conferenceform" id="conferenceform" method="post"  >

						<div class="row">

							<div class="form-group col-md-6">
	                            <input type="text" name="confname" id="confname" class="form-control" placeholder="Full Name" required style="border:1px solid orange;" required>
	                        </div>





                          <!--div class="form-group col-md-6">
                        <select class="form-control" style="border:1px solid orange;"  name="confage" id="confage" placeholder="Age" required>
                         <option value="unspecified" selected="selected">Age</option>
                         <option value="13">13</option>
                         <option value="14">14</option>
                         <option value="15">15</option>
                         <option value="16">16</option>
                         <option value="17">17</option>
                         <option value="18">18</option>
                         <option value="19">19</option>
                         <option value="20">20</option>
                         <option value="21">21</option>
                         <option value="22">22</option>
                         <option value="23">23</option>
                         <option value="24">24</option>
                         <option value="25">25</option>
                         <option value="above">Above</option>

                       </select>
                     </div-->

	                         <div class="form-group col-md-6">
	                            <input type="text" name="confemail" id="confemail" class="form-control" placeholder="E-mail" style="border:1px solid orange;" required>
	                        </div>

                          <div class="form-group col-md-6">
                              <input type="text" name="confphone" id="confphone" class="form-control" placeholder="Phone" style="border:1px solid orange;" required>
                          </div>


                          <!--div class="form-group col-md-6">
                              <input type="text" name="confnationality" class="form-control" placeholder="Nationality" style="border:1px solid orange;" required>
                          </div-->

                         
 


                        <div class="form-group alerts">
                        
                        	<div class="alert alert-success" role="alert">
							  
							</div>

							<div class="alert alert-danger" role="alert">
							  
							</div>
							
                        </div>	

                         <div class="form-group">
                            <button type="submit" value="submit" id="submit" name="submit" class="btn btn-primary pull-right">REGISTER</button>
                        </div>

                        <div class="clearfix"></div>

					</form>

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