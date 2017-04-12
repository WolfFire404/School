<?php

function random_dobbel() {
    for($i = 0; $i < 5; $i++) {
    $rand = random_int(1,6);
    dobbelsteen($rand);
    print "<img src=\"image$rand.png\"> ";
    }
}

function dobbelsteen($een){
    $im = @imagecreate (200, 200) or die ("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);
    $white = imagecolorallocate($im, 255,255,255);
    
    switch($een) 
    {
        case 1:
            imagefilledellipse($im, 100, 100, 50, 50, $white);       
            break;
        case 2:
            imagefilledellipse($im, 50, 50, 50, 50, $white);
            imagefilledellipse($im, 150, 150, 50, 50, $white);
            break;
        case 3:
            imagefilledellipse($im, 50, 50, 50, 50, $white);  
            imagefilledellipse($im, 150, 150, 50, 50, $white);  
            imagefilledellipse($im, 100, 100, 50, 50, $white);  
            break;
        case 4:
            imagefilledellipse($im, 50, 50, 50, 50, $white);
            imagefilledellipse($im, 150, 150, 50, 50, $white);
            imagefilledellipse($im, 150, 50, 50, 50, $white);  
            imagefilledellipse($im, 50, 150, 50, 50, $white);  
            break;
        case 5:
            imagefilledellipse($im, 50, 50, 50, 50, $white);  
            imagefilledellipse($im, 150, 150, 50, 50, $white);  
            imagefilledellipse($im, 100, 100, 50, 50, $white); 
            imagefilledellipse($im, 150, 50, 50, 50, $white);  
            imagefilledellipse($im, 50, 150, 50, 50, $white);
            break;
        case 6:
            imagefilledellipse($im, 150, 50, 50, 50, $white);  
            imagefilledellipse($im, 150, 100, 50, 50, $white);   
            imagefilledellipse($im, 150, 150, 50, 50, $white);  
            imagefilledellipse($im, 50, 50, 50, 50, $white);
            imagefilledellipse($im, 50, 100, 50, 50, $white);
            imagefilledellipse($im, 50, 150, 50, 50, $white);
            break;
    }
    
    
    imagepng($im,"image$een.png");
    imagedestroy($im);
}

?>

<html>
    <body>
        <?php random_dobbel(); ?>
        <br>
        <input type='submit' name='submitAdd' value='Dobbel' onclick='window.location.reload();'>
    </body>
</html>