<?php session_start();

// generate random number and store in session
$randomnr = rand(10000, 99999);
$_SESSION['randomnr2'] = md5($randomnr);
//generate image
$im = imagecreatetruecolor(90, 30);
//colors:
$white = imagecolorallocate($im, 0, 0, 0);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 204, 204, 204);
imagefilledrectangle($im, 0, 0, 200, 30, $black);

// -------------      your fontname    -------------
//  example font http://www.webpagepublicity.com/free-fonts/a/Anklepants.ttf
$font = 'font2.ttf';

//draw text:
imagettftext($im, 25, 0, 22, 24, $grey, $font, $randomnr);

imagettftext($im, 25, 0, 15, 26, $white, $font, $randomnr);

// prevent client side  caching
header("Expires: Wed, 1 Jan 1997 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revаlidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

//send image to browser
header ("Content-type: image/gif");
imagegif($im);
imagedestroy($im);
?>
