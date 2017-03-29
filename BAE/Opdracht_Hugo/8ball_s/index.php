<?php
// Page title
$title = 'Eightball';

// Read the question from the form ($_POST-var)
if (!empty($_GET'question')) {
    $question =  $_GET['question']; // post-var from form (check the view)
}
else{
    $question = 'Will you enter a question below?'; // default
}

// Get random ball number (1 to 21)
$ballNumber = rand

include 'views/headphp'
include 'views/eightball'
 'footer.php'