<?php 
  include "./Controllers/indexController.php";
  $weatherObj = getWeatherInformation();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whats the weather like today?</title>
    <link rel="stylesheet" type="text/css" href="./Styles/styles.css">
</head>
<body>

<div class ="container">

<?php
 echo "<div class=\"imageBackground\">";
 echo "<img src=".getBackgroundImage()."/>";
 echo "</div>";
 echo "<div class=\"weatherInfo\">";
 echo "<h1>".$weatherObj->getTemp()."</h1>";
 echo "<p>".$weatherObj->getCity()."</p>";
 echo "</div>";
  
?>
</div>


</body>
</html>