<?php
create_image();
print "<img src=image1.png?".date ("1").">";
print "<img src=image2.png?".date ("2").">";
print "<img src=image3.png?".date ("3").">";
print "<img src=image4.png?".date ("4").">";
print "<img src=image5.png?".date ("5").">";
print "<img src=image6.png?".date ("6").">";


function create_image(){
    $im = @imagecreate (200, 200) or die ("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);
    $white = imagecolorallocate($im, 255,255,255);
    imagefilledellipse($im, 100, 100, 50, 50, $white);
    imagepng($im,"image1.png");
    imagedestroy($im);

    
}