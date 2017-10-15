<!DOCTYPE html>
<html lang="nl">
	 <head>
		<meta charset="utf-8">
		<meta name="description" content="scripting GD">
		<meta name="author" content="Reilly Vasilda">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>PHP Bmi calculator</title>
	</head>
	 <body>
		 <?php
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit html
         $input3 =  $_GET['input3'];
			 }
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string
         $input3 = "";
			 }
		  ?>
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend>Reilly Vasilda GD1A</legend>
				 <input type = "text" name = "input1"  placeholder = "gewicht in kilo's"><br>
				 <input type = "text" name = "input2"   placeholder = "lengte in hele meters"><br>
                    <input type = "radio" name = "input3"><label>Meneer</label>
                    <input type = "radio" name = "input3"><label>Mevrouw</label><br>
				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
			<?php
      $output2 = "";

      if($input1 != null && $input2 != null){
      $output1 = $input1 / ($input2*$input2);
      } else {
      $output1 = null;
      }

      if($output1 != null){
        switch ($output1) {
          case $output1 <=18.5:
              $output2 = "Ondergewicht";
              echo "<body style ='background-color:blue';>";
            break;

          case $output1 > 18.5 && $output1 <= 25:
              $output2 = "Een normaal gewicht";
              echo "<body style='background-color:green'>";
              echo "<body style='color:white'>";
          break;

          case $output1 > 25 && $output1 <= 27:
              $output2 = "Licht overgewicht";
              echo "<body style='background-color:yellow';>";
          break;

          case $output1 > 27 && $output1 <= 30;
              $output2 = "Mild overgewicht";
              echo "<body style='background-color:orange';>";
          break;

          case $output1 > 30 && $output1 <= 40;
              $output2 = "Obesitas";
              echo "<body style='background-color:red';>";
          break;

          case $output1 > 40;
              $output2 = "Morbide obesitas";
              echo "<body style='background-color:darkred';>";
          break;

          default:
            $output2 = "Geen geldig getal";
            break;
        }
      } else {
        $output2 = "Geen geldige getallen ingevoerd!";
      }
      ?>
      <li> <?php echo $input3; if($input3 != null){echo ", ";}; ?> Uw BMI is:  <?php  echo round($output1,1,PHP_ROUND_HALF_UP);  ?> </li>
                <li>U heeft:  <?php  echo $output2;  ?> </li>
			</div>
	 </body>
</html>
