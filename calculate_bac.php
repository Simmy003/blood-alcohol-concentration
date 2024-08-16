<?php
$weight = $_POST["weight"];
$unit = $_POST["unit"];
$gender = $_POST["gender"];
$drinks = $_POST["drinks"];
$alcohol_content = $_POST["alcohol_content"];
$time_elapsed = $_POST["time_elapsed"];

$alcoholConsumed = $alcohol_content * $drinks;


if($genderConstant == 'female'){
    $gender = 0.66;
  }
  else{
    $gender = 0.73;
  }


$bac = ($alcoholConsumed * 5.14) / ($weight * $genderConstant) - 0.015 * $timeElapsed;

 header("Location:/index.php");
 ?>