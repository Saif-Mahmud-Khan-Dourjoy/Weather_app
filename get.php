<?php

$get=json_decode(file_get_contents('http://ip-api.com/json/'),true);

date_default_timezone_set($get['timezone']);

$country= $_GET['country'];
$city= $_GET['city'];

$api="http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."units=imperial&appid=ffc81e7bdaf3c67fab995487177ed3b9";
$data=json_decode(file_get_contents($api),true);

$temp=$data['main']['temp']-273;
$icon= $data['weather'][0]['icon'];
$weather_cast= $data['weather'][0]['main'];
$logo="<center><img src='http://openweathermap.org/img/w/".$icon.".png'></center>";
$wind="".$data['wind']['speed']." m/s";
$visibility=$data['visibility'];
$visibilitykm=$visibility/1000;
$description="<p>".$data['weather'][0]['description']."</p>";
$temperature="<b> ".$temp. "•C </b>";
$clouds="".$data['clouds']['all']." %";
$pressure="".$data['main']['pressure']." hpa";
$visibility="".$visibilitykm." km";
$humidity="".$data['main']['humidity']." %";
$sunrise="".date('h:i A',$data['sys']['sunrise']);
$sunset="".date('h:i A',$data['sys']['sunset']);
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Weather App</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background: maroon">
<div class="container">	
<div class="text-warning text-center display-4  p-5" style="font-family:cursive;"> Weather App</div>
<div class="jumbotron bg-info" >
  <h2>Weather Data Of <?php echo $city  ?> </h2>
  <table class="table table-bordered">
    <tr>
      <th> Temparature </th>
      <td> <?php echo $logo?> <?php echo $temperature?></td>
    </tr>
    <tr>
      <th> Description</th>
      <td><?php echo $description?> </td>
    </tr>
     <tr>
      <th> Weather Cast</th>
      <td><?php echo $weather_cast?> </td>
    </tr>
    <tr>
      <th> Clouds </th>
      <td><?php echo $clouds?> </td>
    </tr>
    <tr>
      <th> Humidity  </th>
      <td> <?php echo $humidity?></td>
    </tr>
    <tr>
      <th> Wind Speed </th>
      <td> <?php echo $wind?></td>
    </tr>
    <tr>
      <th> Pressure </th>
      <td> <?php echo $pressure?></td>
    </tr>
    <tr>
      <th> Sunrise </th>
      <td>  <?php echo $sunrise?></td>
    </tr>
     <tr>
      <th> Sunset </th>
      <td> <?php echo $sunset?></td>
    </tr>
     <tr>
      <th> Visibility </th>
      <td><?php echo $visibility?> </td>
    </tr>
  </table>
</div>
<footer class="footer">
	<p class="text-light">&copy; created by Saif Mahmud Khan Dourjoy</p>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


