<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        print("<hr/><br/>");
        $bmi = "";
        $kwadraat = "";
        $gewicht = $_POST["gewicht"];
        $lengte = $_POST["lengte"];
        if($gewicht <= 0){
            print("<font color='red'><b>Gewicht moet groter zijn dan 0!<br/>");
        }
        if($lengte <= 0){
            print("<font color='red'><b>Lengte moet groter zijn dan 0!<br/>");
        }
        else{
            $lengte = $lengte / 100;
            $kwadraat = $lengte * $lengte;
            $bmi = $gewicht / $kwadraat;
            $bmi = round($bmi , 1);
            print("Uw BMI bedraagt: " . $bmi . "<br/>");
            if($bmi < 18){
                print("<b>U lijdt aan ondergewicht!</b></font>");
            }
            if($bmi > 18 AND $bmi <= 25){
                print("<b>U heeft een gezond gewicht!</b></font>");

            }
            if($bmi > 25 AND $bmi <= 27){
                print("<b>U heeft lichtelijk overgewicht!</b></font>");

            }
            if($bmi > 27 AND $bmi <= 30){
                print("<b>U heeft een matig overgewicht!</b></font>");

            }
            if($bmi > 30 AND $bmi <= 40){
                print("<b>U heeft een ernstig overgewicht!</b></font>");

            }
            if($bmi > 40){
                print("<b>Hoe leeft u nog?!</b></font>");
            }
        }
    }
    ?>