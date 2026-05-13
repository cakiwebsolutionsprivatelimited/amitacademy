<?php
/*
$code=rand(1000,9999);
$_SESSION["code"]=$code;
$im = imagecreatetruecolor(50, 24);
$bg = imagecolorallocate($im, 22, 86, 165); //background color blue
$fg = imagecolorallocate($im, 255, 255, 255);//text color white
imagefill($im, 0, 0, $bg);
imagestring($im, 5, 5, 5,  $code, $fg);
//header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
*/
session_start();
$font     = 'monofont.ttf';
$possible = '23456789bcdfghjkmnpqrstvwxyz';
$code     = '';
$i        = 0;
while ($i < 6) {
    $code .= substr($possible, mt_rand(0, strlen($possible) - 1), 1);
    $i++;
}
$_SESSION["code"] = $code;
$width     = 120;
$height    = 40;
$font_size = $height * 0.75;
$image = @imagecreate($width, $height) or die('');
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color       = imagecolorallocate($image, 130, 130, 130);
$noise_color      = imagecolorallocate($image, 140, 140, 140);
for ($i = 0; $i < ($width * $height) / 8; $i++) {
    imagefilledellipse($image, mt_rand(0, $width), mt_rand(0, $height), 1, 1, $noise_color);
}
for ($i = 0; $i < ($width * $height) / 250; $i++) {
    imageline($image, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), $noise_color);
}
$textbox = imagettfbbox($font_size, 0, $font, $code) or die('');
$x = ($width - $textbox[4]) / 2;
$y = ($height - $textbox[5]) / 2;
imagettftext($image, $font_size, 0, $x, $y, $text_color, $font, $code) or die('');
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);

?>