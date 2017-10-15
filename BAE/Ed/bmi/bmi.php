<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>BMI Calculator</title>
</head>
<body>
<div align="center">
    <h2>
        BMI Calculator<br/>
    </h2>
    Bereken hier uw BMI (Body Mass Index) om te kijken of u op een gezond gewicht zit.<br/>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    Uw gewicht in kg:
                </td>
                <td>
                    <input type="int" name="gewicht"/>
                </td>
            </tr>
            <tr>
                <td>
                    Uw lengte in cm:
                </td>
                <td>
                    <input type="int" name="lengte"/>
                </td>
            </tr>
            <tr>
                <td>Geslacht</td>
                <td> Man <input type="radio" name="geslacht"></td>
                <td> Vrouw <input type="radio" name="geslacht"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Bereken BMI"/>
                </td>
            </tr>
        </table>
    </form>
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
                echo '<body style="background-color:orangered">';
            }
            if($bmi > 18 AND $bmi <= 25){
                print("<b>U heeft een gezond gewicht!</b></font>");
                echo '<body style="background-color:lawngreen">';

            }
            if($bmi > 25 AND $bmi <= 27){
                print("<b>U heeft lichtelijk overgewicht!</b></font>");
                echo '<body style="background-color:yellow">';

            }
            if($bmi > 27 AND $bmi <= 30){
                print("<b>U heeft een matig overgewicht!</b></font>");
                echo '<body style="background-color:orange">';

            }
            if($bmi > 30 AND $bmi <= 40){
                print("<b>U heeft een ernstig overgewicht!</b></font>");
                echo '<body style="background-color:red">';

            }
            if($bmi > 40){
                print("<b>U heeft een zeer ernstig overgewicht!</b></font>");
                echo '<body style="background-color:darkred">';
            }
        }
    }
    ?>
</div>
</body>
</html>