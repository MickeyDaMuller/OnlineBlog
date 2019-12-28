
<?php
//this prevents spamming the click count by refreshing the page
//session_start();
require 'connection.php';
$conn = Connect();

$ref_id = $_GET['id'];



$sql = "SELECT * FROM blog_post WHERE id = $ref_id";
  $res = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($res);

$id = $r['id'];
$title = $r['title'];
$description = $r['description'];
$date_posted = $r['date_posted'];
$img_name = $r['img_name'];
$datemade = strftime("%b %d, %Y", strtotime($date_posted));
//$date_posted = DATE_FORMAT($date_posted_1,'%W %D %M %Y');

$sql_next = "SELECT * FROM blog_post WHERE id = (select min(id) from blog_post where id > $ref_id)";
$res_next = mysqli_query($conn, $sql_next);
$r_n = mysqli_fetch_assoc($res_next);
$id_n = $r_n['id'];
$id_n_t = $r_n['title'];

$sql_p = "SELECT * FROM blog_post WHERE id = (select max(id) from blog_post where id < $ref_id)";
$res_p = mysqli_query($conn, $sql_p);
$r_p = mysqli_fetch_assoc($res_p);
$id_p = $r_p['id'];
$id_p_t = $r_p['title'];

//echo $id ;
//echo $date_posted;
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
	<title>Trueword Blog - Post</title>
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
	         <a href="index.php">TrueWord Blog</a>
	      </div>

	   		<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li ><a href="index.php" title="">Home</a></li>									
					<!--li class="has-children">
						<!--a href="category.html" title="">Categories</a-->
						<!--ul class="sub-menu">
			            <li><a href="category.html">Wordpress</a></li>
			            <li><a href="category.html">HTML</a></li>
			            <li><a href="category.html">Photography</a></li>
			            <li><a href="category.html">UI</a></li>
			            <li><a href="category.html">Mockups</a></li>
			            <li><a href="category.html">Branding</a></li>
			         </ul>
					</li-->
					<li class="current">
						<a href="single-standard.php" title="">Post</a>
						<!--ul class="sub-menu">
			            <li><a href="single-video.html">Video Post</a></li>
			            <li><a href="single-audio.html">Audio Post</a></li>
			            <li><a href="single-gallery.html">Gallery Post</a></li>
			            <li><a href="single-standard.html">Standard Post</a></li>
			         </ul-->
					</li>
					<!--li><a href="style-guide.html" title="">Styles</a></li-->
					<li><a href="about.php" title="">About</a></li>	
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
   

   <!-- content
   ================================================== -->
   <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   			<article class="format-standard">  

   			<!--	<p><?php echo $id_n; ?></p>
   				<p><?php echo $id_p; ?></p-->
<h1 class="page-title"><?php echo $title ?></h1>
   				<div class="featured-post-slide">

   						

						   			<div class="post-background" style="background-image:url('<?php echo $img_name ?>');"></div>
							<!--center><img style="width: 100%; height: 100%;" src="<?php echo $img_name ?>"></center-->
						</div>  
					</div>

					<div class="primary-content">

						<!--h1 class="page-title"><?php echo $title ?></h1-->	

						<ul class="entry-meta">
							<li class="date"><?php echo $datemade ?></li>						
							<!--li class="cat"><a href="">Wordpress</a><a href="">Design</a></li-->				
						</ul>	



						<!--p class="lead">Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint.</p--> 

						<p><?php echo nl2br($description); ?>
						</p>

						<!--p><img src="images/shutterbug.jpg" alt=""></p-->

						<!--h2>Large Heading</h2>

						<p>Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus <a href="http://#">omnis voluptas assumenda est</a> id quod maxime placeat facere possimus, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et.</p>

						<blockquote><p>This is a simple example of a styled blockquote. A blockquote tag typically specifies a section that is quoted from another source of some sort, or highlighting text in your post.</p></blockquote>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed..</p>

						<h3>Smaller Heading</h3>

						<p>Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>

						<p>Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>

<pre><code>
code {
   font-size: 1.4rem;
   margin: 0 .2rem;
   padding: .2rem .6rem;
   white-space: nowrap;
   background: #F1F1F1;
   border: 1px solid #E1E1E1;	
   border-radius: 3px;
}
</code></pre>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</p>

						<ul>
							<li>Donec nulla non metus auctor fringilla.
								<ul>
									<li>Lorem ipsum dolor sit amet.</li>
									<li>Lorem ipsum dolor sit amet.</li>
									<li>Lorem ipsum dolor sit amet.</li>
								</ul>
							</li>
							<li>Donec nulla non metus auctor fringilla.</li>
							<li>Donec nulla non metus auctor fringilla.</li>
						</ul>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed..</p>

						<p class="tags">
		  			     	<span>Tagged in :</span>
		  				  	<a href="#">orci</a><a href="#">lectus</a><a href="#">varius</a><a href="#">turpis</a>
		  			   </p>

		  			   <div class="author-profile">
		  			   	<img src="images/avatars/user-05.jpg" alt="">

		  			   	<div class="about">
		  			   		<h4><a href="#">Jonathan Smith</a></h4>
		  			   	
		  			   		<p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		  			   		</p>

		  			   		<ul class="author-social">
		  			   			<li><a href="#">Facebook</a></li>
						        	<li><a href="#">Twitter</a></li>
						        	<li><a href="#">GooglePlus</a></li>
						        	<li><a href="#">Instagram</i></a></li>					        	
		  			   		</ul-->
		  			   	</div>
		  			   </div> <!-- end author-profile -->						

					</div> <!-- end entry-primary -->

					<?php 


if ($id_n > 1) {?>


	  			   <div class="pagenav group">



	  			   	<div class="prev-nav">
		  			   	<a href="single-standard.php?id=<?php echo $id_p?>" rel="prev">
		  			   		<button>Previous</button><br>
		  			   		<?php echo $id_p_t?>
		  			   	</a>
		  			   </div>
		  			   
		  				<div class="next-nav">
		  					<a href="single-standard.php?id=<?php echo $id_n?>" rel="next">
		  						<button>Next</button><br>
		  			   		<?php echo $id_n_t?>
		  					</a>
		  				</div>  




		  								   
	  				</div>


<?php 	
}
 


else{

					?>		


 <div class="pagenav group">
		  			   <div class="prev-nav">
		  			   	<a href="single-standard.php?id=<?php echo $id_p?>" rel="prev">
		  			   		<button>Previous</button><br>
		  			   		<?php echo $id_p_t?>
		  			   	</a>
		  			   </div>
		  			</div>
	

<?php 

}


?>

				</article>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->

		<!--div class="comments-wrap">
			<div id="comments" class="row">
				<div class="col-full">

               <h3>5 Comments</h3>

               <!-- commentlist -->
               <!--ol class="commentlist">

                  <li class="depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/avatars/user-01.jpg" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>Itachi Uchiha</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T23:05">Jul 12, 2014 @ 23:05</time>
	                           <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                        </div>
	                     </div>

	                     <div class="comment-text">
	                        <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
	                        facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
	                     </div>

	                  </div>

                  </li>

                  <li class="thread-alt depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>John Doe</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T24:05">Jul 12, 2014 @ 24:05</time>
	                           <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                        </div>
	                     </div>

	                     <div class="comment-text">
	                        <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
	                        urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
	                        tantas semper delicatissimi.</p>                        
	                     </div>

	                  </div>

                     <ul class="children">

                        <li class="depth-2">

                           <div class="avatar">
                              <img width="50" height="50" class="avatar" src="images/avatars/user-03.jpg" alt="">
                           </div>

                           <div class="comment-content">

	                           <div class="comment-info">
	                              <cite>Kakashi Hatake</cite>

	                              <div class="comment-meta">
	                                 <time class="comment-time" datetime="2014-07-12T25:05">Jul 12, 2014 @ 25:05</time>
	                                 <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                              </div>
	                           </div>

	                           <div class="comment-text">
	                              <p>Duis sed odio sit amet nibh vulputate
	                              cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
	                              cursus a sit amet mauris</p>
	                           </div>

                           </div>

                           <ul class="children">

                              <li class="depth-3">

                                 <div class="avatar">
                                    <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
                                 </div>

                                 <div class="comment-content">

	                                 <div class="comment-info">
	                                    <cite>John Doe</cite>

	                                    <div class="comment-meta">
	                                       <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
	                                       <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                    </div>
	                                 </div>

	                                 <div class="comment-text">
	                                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
	                                    etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
	                                 </div>

                                 </div>

                              </li>

                           </ul>

                        </li>

                     </ul>

                  </li>

                  <li class="depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/avatars/user-02.jpg" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>Shikamaru Nara</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
	                           <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                        </div>
	                     </div>

	                     <div class="comment-text">
	                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
	                     </div>

                     </div>

                  </li>

               </ol> <!-- Commentlist End -->					

               <!-- respond -->
               <!--div class="respond">

               	<h3>Leave a Comment</h3>

                  <form name="contactForm" id="contactForm" method="post" action="">
  					   <fieldset>

                     <div class="form-field">
  						      <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                     </div>

                     <div class="form-field">
  						      <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                     </div>

                     <div class="form-field">
  						      <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
                     </div>

                     <div class="message form-field">
                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
                     </div>

                     <button type="submit" class="submit button-primary">Submit</button>

  					   </fieldset>
  				      </form> <!-- Form End -->

               <!--/div> <!-- Respond End -->

         	<!--/div> <!-- end col-full -->
         <!--/div> <!-- end row comments -->
		<!--/div--> <!-- end comments-wrap -->

   </section> <!-- end content -->


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
   <script src="js/main.js"></script>

</body>

</html>