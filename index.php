

<?php
 //session_start();
 //require 'phpmailer/PHPMailerAutoload.php'; 
require 'connection.php';
$conn = Connect();

$sql = "SELECT COUNT(id) FROM blog_post";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($query);
// Here we have the total row count
$rows = $row[0];
// This is the number of results we want displayed per page
$page_rows = 10;
// This tells us the page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if($last < 1){
  $last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
  $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit
$sql = "SELECT id, title, description, img_name, date_posted FROM blog_post ORDER BY id DESC $limit";
$query = mysqli_query($conn, $sql);
// This shows the user what page they are on, and the total number of pages
$textline1 = "Testimonials (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results

  

//slider displays first 3 content
 $sql_slider = "SELECT * FROM blog_post ORDER BY id DESC limit 0,3 ";
$res_slider = mysqli_query($conn, $sql_slider);


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




   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Trueword Blog - Home</title>
	<meta name="news" content="">  
	<meta name="blog" content="">

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
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1419754308772098",
    enable_page_level_ads: true
  });
</script>

<script type="text/javascript">function add_chatinline(){var hccid=32471196;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.php">Author</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li class="current"><a href="index.php" title="">Home</a></li>									
					<li class="has-children">
						<!--a href="category.html" title="">Categories</a>
						<!--ul class="sub-menu">
			            <li><a href="category.html">Wordpress</a></li>
			            <li><a href="category.html">HTML</a></li>
			            <li><a href="category.html">Photography</a></li>
			            <li><a href="category.html">UI</a></li>
			            <li><a href="category.html">Mockups</a></li>
			            <li><a href="category.html">Branding</a></li>
			         </ul-->
					</li>
					<!--li class="has-children">
						<a href="single-standard.html" title="">Blog</a>
						<!--ul class="sub-menu">
			            <li><a href="single-video.html">Video Post</a></li>
			            <li><a href="single-audio.html">Audio Post</a></li>
			            <li><a href="single-gallery.html">Gallery Post</a></li>
			            <li><a href="single-standard.html">Standard Post</a></li>
			         </ul-->
					<!--/li-->
					<!--li><a href="style-guide.html" title="">Styles</a></li-->
					<li><a href="http://truewordblog.site/about.php" title="">About</a></li>	

					<li><a href="contact.php" title="">Contact</a></li>	
          <li><a href="http://truewordblog.site/privacy.php" title="">Privacy</a></li> 									
				</ul>
			</nav> <!-- end main-nav-wrap -->

			<div class="search-wrap">
				
				<form role="search" method="get" class="search-form" action="#">
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


   <!-- masonry
   ================================================== -->
   <section id="bricks">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

         	<div class="brick entry featured-grid animate-this">
         		<div class="entry-content">
         			<div id="featured-post-slider" class="flexslider">
			   			<ul class="slides">
   <?php 

  $i = 1;
 while($r = mysqli_fetch_assoc($res_slider)) {

 $id = $r['id'];
  $title = $r['title'];
  $description =  $r['description']; 
  $date_posted = $r['date_posted'];
  $img_name = $r['img_name'];
  $datemade = strftime("%b %d, %Y", strtotime($date_posted));
//echo $cat_name;
?>
				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('<?php echo $img_name ?>');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li><?php echo $datemade ?></li> 
												<li><a href="single-standard.php?id=<?php echo $id ?>" ><?php echo $title ?></a></li>				
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.php?id=<?php echo $id ?>" title="<?php echo $title ?>"><?php 



$description = strip_tags($description);
if (strlen($description) > 100) {

    // truncate string
    $stringCut = substr($description, 0, 100);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $description = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $description .= '...';
}

//nl2br("One line.\nAnother line.")
echo nl2br($description);

                                  ?></a></h1> 
								   	</div> 				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->
     <?php        

$i++;
 }

           ?>
				   			<!--li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-2.jpg');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>August 29, 2016</li>
												<li><a href="#">Sasuke Uchiha</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">Enhancing Your Designs with Negative Space</a></h1>
						   			</div>		   				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<!--li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-3.jpg');;"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>August 27, 2016</li>
												<li><a href="#" class="author">Naruto Uzumaki</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">Music Album Cover Designs for Inspiration</a></h1>
						   			</div>

				   				</div>
				   			</li> <!-- end slide -->

				   		</ul> <!-- end slides -->
				   	</div> <!-- end featured-post-slider -->        			
         		</div> <!-- end entry content -->         		
         	</div>

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

<script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>

<amp-auto-ads type="adsense"
              data-ad-client="ca-pub-1419754308772098">
</amp-auto-ads>


            <article class="brick entry format-quote animate-this" >

               <div class="entry-thumb">                  
                 <blockquote>
                    <p>Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.</p>

                   <a target="_blank" href="http://www.mickeymuller.com">
                     <cite>Mickey Muller IT Solutions

                     </cite> </a>
                 </blockquote>            
               </div>   

            </article> <!-- end article -->



             <?php 

            





   $list = '';
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){

 $id = $row["id"];
  $title = $row["title"];
  $description = $row["description"];
  $img_name = $row["img_name"];
  $date_posted = $row["date_posted"];
  $datemade = strftime("%b %d, %Y", strtotime($date_posted));
?>

         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.php?id=<?php echo $id ?>" class="thumb-link">
	                  <img style="width: 100%; height: auto;" src="<?php echo $img_name ?>" alt="blog">             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<!--a href="#">Design</a--> 
               				<p><?php echo $datemade ?></p>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.php?id=<?php echo $id ?>"><?php echo $title ?></a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							<?php 



$description = strip_tags($description);
if (strlen($description) > 200) {

    // truncate string
    $stringCut = substr($description, 0, 200);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $description = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $description .= '...';
}
echo $description;

                                  ?>
						</div>
               </div>

        		</article> <!-- end article -->

   <?php        

// Close your database connection

 }

 mysqli_close($conn);

           ?>


            <!--article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/ferris-wheel.jpg" alt="ferris wheel">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">UI</a>                			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">This Is Another Standard Format Post.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

            <!-- format audio here -->
            <!--article class="brick entry format-audio animate-this">

               <div class="entry-thumb">
                  <a href="single-audio.html" class="thumb-link">
	                  <img src="images/thumbs/concert.jpg" alt="concert">                      
                  </a>

                  <div class="audio-wrap">
                  	<audio id="player" src="media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio>                  	
                  </div>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Music</a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-audio.html">This Is a Audio Format Post.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- /article -->

         
         	<!--article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/shutterbug.jpg" alt="Shutterbug">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Photography</a> 
               				<a href="#">html</a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Photography Skills Can Improve Your Graphic Design.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

            <!--article class="brick entry animate-this" >

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/usaf-rocket.jpg" alt="USAF rocket">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Branding</a> 
               				<a href="#">Mockup</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">The 10 Golden Rules of Clean Simple Design.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->        	

        		<!--article class="brick entry format-gallery group animate-this">

               <div class="entry-thumb">

                  <div class="post-slider flexslider">
							<ul class="slides">
								<li>
									<img src="images/thumbs/gallery/work1.jpg"> 
								</li>
								<li>
									<img src="images/thumbs/gallery/work2.jpg"> 
								</li>
								<li>
									<img src="images/thumbs/gallery/work3.jpg"> 
								</li>
							</ul>							
						</div> 

               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Branding</a> 
               				<a href="#">Wordpress</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-gallery.html">Workspace Design Trends and Ideas.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-link animate-this">

               <div class="entry-thumb">
                  <div class="link-wrap">
	                 	<p>Looking for affordable &amp; reliable IT Solutions Company? We recommend Mickey Muller IT Solutions.</p>
	                 	<cite>
	                 		<a target="_blank" href="http://www.mickeymuller.com">www.mickeymuller.com</a>
	                 	</cite>
	               </div>	
               </div>               
               
        		</article> <!-- end article -->


         	<!--article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/diagonal-pattern.jpg" alt="Pattern">              
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">UI</a>                			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">You Can See Patterns Everywhere.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<!--article class="brick entry format-video animate-this">

               <div class="entry-thumb video-image">
                  <a href="http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39" data-lity>
	                  <img src="images/thumbs/ottawa-bokeh.jpg" alt="bokeh">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Branding</a>               			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-video.html">This Is a Video Post Format.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<!--article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="images/thumbs/lighthouse.jpg" alt="Lighthouse">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Photography</a> 
               				<a href="#">Design</a>
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Breathtaking Photos of Lighthouses.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
               </div>
               
        		</article> <!-- end article -->

            

         </div> <!-- end brick-wrapper --> 


   	<div class="row">
<nav class="pagination" id="pagination_controls">
      <?php

 
  echo ' <p> '.$textline2.' </p>';
echo ' <p> '.$list.' </p>';



if($last != 1){
  /* First we check if we are on page one. If we are then we don't need a link to 
     the previous page or the first page so we do nothing. If we aren't then we
     generate links to the first page, and to the previous page. */
  if ($pagenum > 1) {
        $previous = $pagenum - 1;

         
   echo '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="page-numbers previous">Previous</a>&nbsp; &nbsp;';  



    //$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';
    // Render clickable number links that should appear on the left of the target page number
    for($i = $pagenum-4; $i < $pagenum; $i++){
      if($i > 0){
            $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
      }
      }
    }
  // Render the target page number, but without it being a link
  $paginationCtrls .= ''.$pagenum.' &nbsp; ';
  // Render clickable number links that should appear on the right of the target page number
  for($i = $pagenum+1; $i <= $last; $i++){
    $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
    if($i >= $pagenum+4){
      break;
    }
  }
  // This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;

         echo '&nbsp; &nbsp;<a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="page-numbers next">Next</a>'; 
        //$paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a> ';
    }
}


echo '<span class="page-numbers ">'.$paginationCtrls.'</span>';

       ?>
</nav>

  
   		
   	

   	</div>

   </section> <!-- end bricks -->

   
   <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info" id="aboutus">            

	            <h4>About Our Site</h4>

	               <p>
		          	<i>TrueWord Blog</i> is your number one source for all latest news content. We're dedicated to providing you the best content, with focus on true, up-to-date and inspiring news around the globe.<br>

<!--We're working to turn our passion for true latest into a booming online blogging. We hope you enjoy our content as much as we enjoy offering them to you.-->

		          	</p>

		      </div> <!-- end footer-info -->

	      	<div class="col-four tab-1-3 mob-1-2 site-links">

	      		<h4>Site Links</h4>

	      		<ul>
	      			<li><a href="http://truewordblog.site/about.php">About Us</a></li>
						<!--li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li-->
						<li><a href="http://truewordblog.site/contact.php">Contact Us</a></li>
            <li><a href="http://truewordblog.site/privacy.php">Privacy Policy</a></li>
					</ul>

	      	</div> <!-- end site-links -->  

	      	<!--div class="col-two tab-1-3 mob-1-2 social-links">

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
	      	
	      			<form action="subscriber.php" class="" name="conferenceform" id="conferenceform" method="post" onsubmit="return(validate());" >

              <input type="email" value="" name="email" class="email" id="email" placeholder="Type email &amp; press enter" required=""> 
        
              <button type="submit" value="submit" id="submit" name="submit" class="submit button-primary full-width-on-mobile">Submit</button>
              <!--label for="email" class="subscribe-message"></label-->
      
            </form>

	      		</div>	      		
	      	           	
	      	</div> <!-- end subscribe -->         

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>&copy; Copyright  <?php echo date("Y"); ?></span> 
		         	<span>Design by <a href="http://www.mickeymuller.com/">Mickey Muller IT Solution</a></span>		         	
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
   <script src="js/jquery.appear.js"></script>
   <script src="js/main.js"></script>

</body>

</html>