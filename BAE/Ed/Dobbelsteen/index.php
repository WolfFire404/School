<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$text = "";
$arr = array();

function analyse($aWorp){
    $aScore = array (0,0,0,0,0,0,0);
    for ($i = 1 ; $i <= 6 ; $i++){
        for ($j = 0 ; $j <5 ; $j++){

            if ($aWorp[$j] == $i){

                $aScore[$i]++;

            }}}

    return $aScore;


}

for($i = 0; $i < 5; $i++)
{
    $dobbel = rand(1, 6);
    array_push($arr, $dobbel);
    create_image($dobbel, $i);
    print "<img src=image.$i.png?" . date("U") . "> ";
    analyse($dobbel);
}



    function create_image($dobbel, $i)
    {
        $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");

        $black = imagecolorallocate($im, 0, 0, 0);
        $coolec = imagecolorallocatealpha($im, 0, 255, 255, 120);


        switch ($dobbel) {
            case 1:
                imagefilledarc($im,  100, 100, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                break;
            case 2:
                imagefilledarc($im, 50, 50, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 150, 150, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                break;
            case 3:
                imagefilledarc($im, 50, 50, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 100, 100, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 150, 150, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                break;
            case 4:
                imagefilledarc($im, 50, 50, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 150, 50, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im , 50, 150, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 150, 150, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                break;
            case 5:
                imagefilledarc($im, 50, 50, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 150, 50, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 100, 100, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 50, 150, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 150, 150, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                break;
            case 6:
                imagefilledarc($im, 50, 50, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 150, 50, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 50, 100, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 150, 100, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 50, 150, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                imagefilledarc($im, 150, 150, 45, 45, 0, 360, $coolec, IMG_ARC_PIE);
                break;
        }

        imagepng($im, "image.$i.png");
        imagedestroy($im);
    }

function getTotalNumbers($array) {
    $temp = array();

    for($i = 0; $i < count($array); $i++) {
        if(!array_key_exists($array[$i], $temp))
            $temp[$array[$i]] = 0;

        $temp[$array[$i]] += 1;
    }

    return $temp;
}

function containsValue($array, $wantedval) {

    foreach($array as $item) {

        if($item == $wantedval)
            return TRUE;
    }

    return FALSE;
}

function containsValueRemove(&$array, $wantedval) {
    foreach($array as $key => $value) {

        if($value == $wantedval) {
            unset($array[$key]);
            return TRUE;
        }
    }
    return FALSE;
}

function isOnePair($array) {
    if(containsValueRemove($array, 1) && containsValueRemove($array, 1)
        && containsValueRemove($array, 1) && containsValueRemove($array, 2))
        return TRUE;
    return FALSE;
}

function isTwoPair($array) {
    if(containsValueRemove($array, 2) && containsValue($array, 2))
        return TRUE;
    return FALSE;
}

function plusAll($array) {
    $o = 0;

    foreach($array as $item)
    {
        $o += $item;
    }

    return $o;
}

function getCool($sortedarray)
{
    $returnval = "";
    $arraycopy = getTotalNumbers($sortedarray);
    if(containsValue($arraycopy, 5))
        $returnval = "POKER!!!!!!";
    else if(containsValue($arraycopy, 4))
        $returnval = "4 of a kind";
    else if(containsValue($arraycopy, 3) && containsValue($arraycopy, 2))
        $returnval = "Full house";
    else if(containsValue($arraycopy, 3) && containsValue($arraycopy, 1))
        $returnval = "3 of a kind";
    else if(isTwoPair($arraycopy))
        $returnval = "2 pair";
    else if(isOnePair($arraycopy))
        $returnval = "1 pair";
    else if(plusAll($sortedarray) == 15)
        $returnval = "Small Street";
    else if(plusAll($sortedarray) == 20)
        $returnval = "Large Street";
    else
        $returnval = "niks";



    return $returnval;
}

print "<br>";

print "<br>";

print "";

print "<br>";

print "----------------------------------------------------------------------";

print "<br>";

asort($arr);
print "Je hebt " . getCool($arr);

print "<br>";

print "----------------------------------------------------------------------";
print "<br>";
?>

<input type="button" value="Dobbel" onClick="window.location.reload()">
</body>
</html>