<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

<!-- this will ensure the page is displayed in the most current
version of IE, instead of going into Compatibility Mode and displaying
it in an older version. put this BEFORE other tags in head sect -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SABER TOOTH TRIO</title>
<link href="master_saber.css" rel="stylesheet" type="text/css">
<!-- below is to fix fuckin stupid IE6 non-transparency! -->
<!--[if lte IE 6]>
  <script src="js/fixTransparencyIE6.js" type="text/javascript"></script>
<![endif]-->
</head>
<body>


<!-- social media links -->
<ul class="nav_other" id="nav_social_media_position">
<li><a href="https://www.facebook.com/sabertoothtrio" target="_blank"><img class="nav_other" id="fixImageIE6" src="images/navother/navother_facebook.png"></a></li>&nbsp;&nbsp;<li><a href="http://www.youtube.com/playlist?list=PLADWqx09z-78ewiZDXpZzPgGB-W74_zM5" target="_blank"><img class="nav_other" id="fixImageIE6" src="images/navother/navother_youtube.png"></a></li></ul>


<!--made a container for the spacer, menu and tiger to prevent any floats from dropping-->
<div style="width:750px; margin-left:auto; margin-right:0px;">

<!--spacer for above the menu-->
<div style="height: 70px; float: right;"></div>

<ul class="nav_other" id="nav_other_position" style="width: 525px;">
<li><a href="shows.html"><img class="nav_other" id="fixImageIE6" src="images/navother/navother_shows.png"></a></li><!--b/w buttons--><li><a href="music.html"><img class="nav_image_current_page" id="fixImageIE6" src="images/navother/navother_music.png"></a></li><!--b/w buttons--><li><a href="media.html"><img class="nav_other" id="fixImageIE6" src="images/navother/navother_media.png"></a></li><!--b/w buttons--><li><a href="support.html"><img class="nav_other" id="fixImageIE6" src="images/navother/navother_support.png"></a></li><!--b/w buttons--><li><a href="about.html"><img class="nav_other" id="fixImageIE6" src="images/navother/navother_about.png"></a></li>
</ul>

<!--spacer for under the menu-->
<div style="height: 15px; float: right; clear: right;"></div>

<div id="nav_other_tiger">
<a href="index.html"><img id="fixImageIE6" src="images/navother/tiger_profile_color.png"></a>
</div>

</div> <!-- end of big ol top container -->






<div class="page_content">
<h1 class="medium">mailing list.</h1>

<p>
            
<?PHP
$email = $_POST['email'];
$subject="MAILING LIST";
$message = $_POST['message'];
//sabertoothtrio@gmail.com

$target_address = 'sabertoothtrio@gmail.com';
$headers = "From: ".$email."\r\n". "X-Mailer: php";

if (mail($target_address, $subject, $message, $headers)) {
echo("Thanks for joining!");
}
else{
echo("Your e-mail address didn't go through. Please go back and try again, or contact us directly at sabertoothtrio@gmail.com . Sorry for the inconvenience!");
die();
}
?>

</p>


</div> <!-- end of page content div -->



<div class="site_info">
all content &copy; Saber Tooth Trio except tiger image from <a href="http://www.DragoArt.com" target="_blank">DragoArt.com</a></br>web design by <a href="http://www.richbozek.com" target="_blank">Rich Bozek</a>
</div>


</body>
</html>


