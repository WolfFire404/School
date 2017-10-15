<?php
// Array with names
$a[] = "Merlin";
$a[] = "Antonio";
$a[] = "Reilly";
$a[] = "Joppe";
$a[] = "Floyd";
$a[] = "Dikkie";
$a[] = "Jaap";
$a[] = "Joppie";
$a[] = "Reilie";
$a[] = "SlangenMoan";
$a[] = "Kallas";
$a[] = "Klaas";
$a[] = "Harm";
$a[] = "Boer";
$a[] = "Disco";
$a[] = "Jhon";
$a[] = "John";
$a[] = "Brit";
$a[] = "Ari";
$a[] = "Feest";
$a[] = "Tiet";
$a[] = "Ed";
$a[] = "Erim";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>