<!doctype html>
<html>
<head>

<meta charset="utf-8">
<!--Added Git 5/18/2014 11PM-->
<title>Countdown Timer to Christmas</title>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<style>
* {
	margin: 0;
	padding: 0;
	}
body {
	background: #B7B3B3;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
h1 {
	width: 500px;
	margin: 20px auto;
	text-align: center;
	font-family: 'Lobster Two', cursive;
	font-size: 24px;
	}
h2 {
	text-align: center;
	}
.container {
	width: 400px;
	margin: 10px auto;
	position: relative;
	}
.box {
	position: relative;
	width: 75px;
	height: 75px;
	background-color: #FFFFFF;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	text-align: center;
	float: left;
	}
.colon {
	position: relative;
	margin-left: 5px;
	margin-right: 5px;
	font-size: 46px;
	font-weight: bold;
	float: left;
	}
.caption {
	position: absolute;
	margin-top: 80px;
	}
.caption1 {
	margin-left: 15px;
	z-index: 99;
	}
.caption2 {
	margin-left: 110px;
	z-index: 99;
	}
.caption3 {
	margin-left: 202px;
	z-index: 99;
	}
.caption4 {
	margin-left: 300px;
	z-index: 99;
	}

p.numbers {
	padding-top: 20px;
	font-size: 1.8em;
	font-weight: bold;
	}
</style>
</head>


<body>
<?php
//mktime turns given date into seconds
$targetdate = mktime(0,0,0,12,25,2014);

// time gets current date in seconds
$currentdate = time();

//subtract targetdate from current date will give you the seconds until targetdate is reached
$difference = ($targetdate - $currentdate);

//Divide the calculated seconds by how many seconds in a day will give you total days until targetdate
$days = $difference / 86400; //86400 seconds in a day
$days_whole = floor($days);
$days_fraction = $days - $days_whole; //subtract the fraction from the whole number

$hours = $days_fraction * 24; // multiply days fraction by 24 hours in a day
$hours_whole = floor($hours);
$hours_fraction = $hours - $hours_whole;

$minutes = $hours_fraction * 60;
$minutes_whole = floor($minutes);
$minutes_fraction = $minutes - $minutes_whole;

$seconds = $minutes_fraction * 60;
$seconds_whole = floor($seconds);
$seconds_fraction = $seconds - $seconds_whole;
?>
<h1>Countdown until Christmas <br />December 25, 2014 at midnight (12:00:00 AM)</h1>
<h2>The current day and time is <?php echo date("F d, Y h:i a"); ?></h2>

<div class="container">
  <div class="box">
  <p class="numbers"><?php echo $days_whole; ?></p>
  </div>
  <div class="colon">:</div>
  <div class="caption caption1">days</div>
	
  <div class="box">
  <p class="numbers"><?php echo $hours_whole; ?></p>
  </div>
  <div class="colon">:</div>
  <div class=" caption caption2">hours</div>
  
  <div class="box">
  <p class="numbers"><?php echo $minutes_whole; ?></p>
  </div>
  <div class="colon">:</div>
  <div class="caption caption3">minutes</div>
  
  <div class="box">
  <p class="numbers"><?php echo $seconds_whole; ?></p>
  </div>
  <div class="colon"></div>
  <div class="caption caption4">seconds</div>
</div>
<?php
header("refresh: 10;");
?>
</body>
</html>