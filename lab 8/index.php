<!DOCTYPE html>
<html>
<head>
    <title>Ввод значений</title>
</head>
<body>

<h2>Введите значения E, R1, L и R2:</h2>

<form action="" method="post">
  <label for="voltage">E (В):</label><br>
  <input type="text" id="voltage" name="voltage" value="10"><br>
  <label for="resistor1">R1 (Ом):</label><br>
  <input type="text" id="resistor1" name="resistor1" value="100"><br>
  <label for="inductor">L (Гн):</label><br>
  <input type="text" id="inductor" name="inductor" value="0.1"><br>
  <label for="resistor2">R2 (Ом):</label><br>
  <input type="text" id="resistor2" name="resistor2" value="50"><br><br>
  <input type="submit" value="Отправить">
</form>
<div>
<?php
$image_width = 457;
$image_height = 289;
$image = imagecreatetruecolor($image_width, $image_height);
$font ='C:\Windows\Fonts\Arial.ttf'; 

$black = imagecolorallocate($image, 0, 0, 0);

imagefill($image, 0, 0, imagecolorallocate($image, 255, 255, 255));


$x1 = 50;
$y1 = 50;
$x2 = 380;
$y2 = 250;
imagerectangle($image, $x1, $y1, $x2, $y2, $black);


$key_length = 40; 
$key_thickness = 5; 


$key_start_x = ($x1 + $x2) / 5; 
$key_start_y = $y1; 

$key_end_x = $key_start_x + cos(deg2rad(45)) * $key_length; 
$key_end_y = $key_start_y - sin(deg2rad(45)) * $key_length; 

$text_key = "Ключ";
$text_color = imagecolorallocate($image, 0, 0, 0); 
$font_size = 12; 

$text_x = $key_start_x - 20;
$text_y = $key_start_y + 30; 


imagettftext($image, $font_size, 0, $text_x, $text_y, $text_color, $font, $text_key);



$key_rectangle_width = 20; 
$key_rectangle_height = 20;

$key_rect_x1 = $key_start_x - $key_rectangle_width / 2;
$key_rect_y1 = $key_start_y;


$key_rect_x2 = $key_start_x + $key_rectangle_width / 2;
$key_rect_y2 = $key_start_y + $key_rectangle_height;


imagefilledrectangle($image, $key_rect_x1, $key_rect_y1, $key_rect_x2, $key_rect_y2, imagecolorallocate($image, 255, 255, 255));


imageline($image, $key_start_x, $key_start_y, $key_end_x, $key_end_y, $black);

$circle_radius = 20;
$circle_x = $x1 - 15 + $circle_radius; 
$circle_y = ($y1 + $y2) / 2; 
imageellipse($image, $circle_x, $circle_y, $circle_radius * 2, $circle_radius * 2, $black);

$line_x = ($x1 + $x2) / 2;
imageline($image, $line_x, $y1, $line_x, $y2, $black);
$voltage = isset($_POST['voltage']) ? $_POST['voltage'] : '';

$textE = "E= $voltage";
imagettftext($image, 12, 0, 80, 150, $black, $font, $textE);
$arrow_size = 10;
$arrow_x1 = $circle_x - 5;
$arrow_y1 = $circle_y - 30 + $circle_radius - $arrow_size;
$arrow_x2 = $circle_x - 5 - $arrow_size / 2;
$arrow_y2 = $circle_y - 30 + $circle_radius;
$arrow_x3 = $circle_x - 5 + $arrow_size / 2;
$arrow_y3 = $circle_y - 30 + $circle_radius;
imagefilledpolygon($image, array($arrow_x1, $arrow_y1, $arrow_x2, $arrow_y2, $arrow_x3, $arrow_y3), 3, $black);


$resistor_width = 20; 
$resistor_height = 40; 

$resistor_x1 = $line_x - $resistor_width / 2;
$resistor_y1 = $y1 + 65 - $resistor_height - 10; 
$resistor1 = isset($_POST['resistor1']) ? $_POST['resistor1'] : '';
$textJ = "R1= $resistor1";
imagettftext($image, 12, 0, 230, 95, $black, $font, $textJ);

$resistor_x2 = $line_x + $resistor_width / 2;
$resistor_y2 = $y1 + 65; 


imagerectangle($image, $resistor_x1, $resistor_y1, $resistor_x2, $resistor_y2, $black);


imagefilledrectangle($image, $resistor_x1 + 1, $resistor_y1 + 1, $resistor_x2 - 1, $resistor_y2 - 1, imagecolorallocate($image, 255, 255, 255));


$resistor_width = 20; 
$resistor_height = 40;


$resistor_x1 = $line_x + 165 - $resistor_width / 2;
$resistor_y1 = $y1 + 125 - $resistor_height - 10; 
$resistor2 = isset($_POST['resistor2']) ? $_POST['resistor2'] : '';
$textR2 = "R2= $resistor2";
imagettftext($image, 12, 0, 390, 132, $black, $font, $textR2);
$resistor_x2 = $line_x + 165 + $resistor_width / 2;
$resistor_y2 = $y1 + 125; 
imagerectangle($image, $resistor_x1, $resistor_y1, $resistor_x2, $resistor_y2, $black);

imagefilledrectangle($image, $resistor_x1 + 1, $resistor_y1 + 1, $resistor_x2 - 1, $resistor_y2 - 1, imagecolorallocate($image, 255, 255, 255));


$inductor = isset($_POST['inductor']) ? $_POST['inductor'] : '';
$textL = "L= $inductor";
imagettftext($image, 12, 0, 230, 165, $black, $font, $textL);
$circle_radius = 11;
$circle_x1 = $x1 + 165;
$circle_x2 = $x1 - 15 + 180;
$circle_x3 = $x1 - 85 + 250;
$circle_y1 = $y1 + 90; 
$circle_y2 = $circle_y1 + 1 * ($circle_radius + 10); 
$circle_y3 = $circle_y2 + 1 * ($circle_radius + 10); 


$start_angle = -90;
$end_angle = 90;

$white = imagecolorallocate($image, 255, 255, 255);

imagefilledarc($image, $circle_x1, $circle_y1, $circle_radius * 2, $circle_radius * 2, $start_angle, $end_angle, $white, IMG_ARC_PIE);
imagearc($image, $circle_x1, $circle_y1, $circle_radius * 2, $circle_radius * 2, $start_angle, $end_angle, $black);

imagefilledarc($image, $circle_x2, $circle_y2, $circle_radius * 2, $circle_radius * 2, $start_angle, $end_angle, $white, IMG_ARC_PIE);
imagearc($image, $circle_x2, $circle_y2, $circle_radius * 2, $circle_radius * 2, $start_angle, $end_angle, $black);

imagefilledarc($image, $circle_x3, $circle_y3, $circle_radius * 2, $circle_radius * 2, $start_angle, $end_angle, $white, IMG_ARC_PIE);
imagearc($image, $circle_x3, $circle_y3, $circle_radius * 2, $circle_radius * 2, $start_angle, $end_angle, $black);


$filename = 'result.png';
imagepng($image, $filename);


imagedestroy($image);

echo '<img src="' . $filename . '" alt="Result">';
?>
</div>
</body>
</html>