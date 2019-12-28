

<?php
if(isset($_POST['crop_image']))
{
  $y1=$_POST['top'];
  $x1=$_POST['left'];
  $w=$_POST['right'];
  $h=$_POST['bottom'];
  $image="http://truewordblog.site/UploadFolder/featured-8.jpg";

  list( $width,$height ) = getimagesize( $image );
  $newwidth = 600;
  $newheight = 400;

  $thumb = imagecreatetruecolor( $newwidth, $newheight );
  $source = imagecreatefromjpeg($image);

  imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
  imagejpeg($thumb,$image,100); 


  $im = imagecreatefromjpeg($image);
  $dest = imagecreatetruecolor($w,$h);
  
  imagecopyresampled($dest,$im,0,0,$x1,$y1,$w,$h,$w,$h);
  imagejpeg($dest,"images/crop_image.jpg", 100);
}
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="crop_style.css">
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="jquery-ui.js"></script>
   <!-- Javascript at the bottom for fast page loading -->

    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
    <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.js" type="text/javascript"></script>
    <script type="text/javascript"> window.jQuery || document.write('<script src="js/libs/jquery-1.6.1.js">\x3C/script>')</script>

    <!-- Grab Google CDN's jQuery UI, with a protocol relative URL; fall back to local if necessary -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.js" type="text/javascript"></script>
    <script type="text/javascript"> $.ui || document.write('<script src="js/libs/jquery-ui-1.8.12.custom.min.js">\x3C/script>')</script>

    <!-- Scripts concatenated -->
    <script src="js/plugins.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <!-- End scripts -->
  <script type="text/javascript">

    $(function() {
      $( "#crop_div" ).draggable({ containment: "parent" });
    });
   
    function crop()
    {
      var posi = document.getElementById('crop_div');
      document.getElementById("top").value=posi.offsetTop;
      document.getElementById("left").value=posi.offsetLeft;
      document.getElementById("right").value=posi.offsetWidth;
      document.getElementById("bottom").value=posi.offsetHeight;
      return true;
    }

  </script>

<style type="text/css">
  
body
{
  margin:0px;
  padding:0px;
}
#crop_wrapper
{
  position:relative;
  margin-left:150px;
  margin-top:50px;
  width:600px;
  height:400px;
}
#crop_wrapper img
{
  width:600px;
  height:400px;
}
#crop_div
{
  width:300px;
  height:200px;
  border:1px dashed white;
  position:absolute;
  top:0px;
  box-sizing:border-box;
}


</style>

</head>

<body>

<div id="crop_wrapper">
  <img src="http://truewordblog.site/UploadFolder/featured-8.jpg">
  <div id="crop_div">
  </div>
</div>

<form method="post" action="upload.php" onsubmit="return crop();">
  <input type="hidden" value="" id="top" name="top">
  <input type="hidden" value="" id="left" name="left">
  <input type="hidden" value="" id="right" name="right">
  <input type="hidden" value="" id="bottom" name="bottom">
  <input type="submit" name="crop_image">
</form>

</body>
</html>