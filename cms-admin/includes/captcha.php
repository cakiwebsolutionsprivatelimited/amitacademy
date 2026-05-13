<?php
session_start();

/* CAPTCHA CODE GENERATOR */

$possible = '23456789bcdfghjkmnpqrstvwxyz';
$code     = '';

for ($i = 0; $i < 6; $i++) {
    $code .= $possible[rand(0, strlen($possible) - 1)];
}

$_SESSION["code"] = $code;

/* IMAGE SETTINGS */

$width      = 120;
$height     = 40;
$font_size  = 20;

/* CREATE IMAGE */

$image = imagecreatetruecolor($width, $height);

/* COLORS */

$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color       = imagecolorallocate($image, 60, 60, 60);
$noise_color      = imagecolorallocate($image, 180, 180, 180);

/* FILL BACKGROUND */

imagefill($image, 0, 0, $background_color);

/* FONT PATH */

$font = realpath(__DIR__ . '/monofont.ttf');

/* CHECK FONT EXISTS */

if (!$font || !file_exists($font)) {
    die('Font file not found');
}

/* ADD NOISE DOTS */

for ($i = 0; $i < ($width * $height) / 8; $i++) {
    imagefilledellipse(
        $image,
        rand(0, $width),
        rand(0, $height),
        1,
        1,
        $noise_color
    );
}

/* ADD NOISE LINES */

for ($i = 0; $i < ($width * $height) / 250; $i++) {
    imageline(
        $image,
        rand(0, $width),
        rand(0, $height),
        rand(0, $width),
        rand(0, $height),
        $noise_color
    );
}

/* TEXT POSITION */

$textbox = imagettfbbox($font_size, 0, $font, $code);

$text_width  = $textbox[4] - $textbox[0];
$text_height = $textbox[1] - $textbox[7];

$x = ($width - $text_width) / 2;
$y = ($height + $text_height) / 2;

/* WRITE TEXT */

imagettftext(
    $image,
    $font_size,
    0,
    $x,
    $y,
    $text_color,
    $font,
    $code
);

/* OUTPUT IMAGE */

header('Content-Type: image/png');

imagepng($image);

/* CLEAR MEMORY */

imagedestroy($image);
?>