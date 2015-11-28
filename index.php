<!-- saved forms: https://gist.github.com/zaus/4717416 -->
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Write an Email in Seconds - IntelliMail's Email Tool</title>
	<meta charset="utf-8">
	<meta name="description" content="Write an email in seconds with IntelliMail. Fast, free to use, ad-free.">
	<meta name="keywords" content="compare,hosts,webhosts,host,web, webhost,hosting,webhosting,find,best">
	<meta name="author" content="Harry Dong">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="./javascript/mailScript.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="./css/mailStyle.css">

	<style>
	.bg{
		background: url('http://www.aamrofreight.net/wp-content/uploads/2014/06/blue-abstract-background.jpg') no-repeat center center;
	}
	</style>
</head>


<body onload="checkFormal();checkDay();">

<?php include_once "navbar.html";?>

<div class="bg"></div>
<div class="jumbotron">
	<center><h1>IntelliMail - Under Development</h1>
	<p>Write an email in seconds</p></center>
</div>


<div class="container">
	<h3>Popular Templates:</h3>
</div>


<div class="container">
<h4>Missing Class</h4>
<p>How formal do you want your email to be?
<input type="range" id="myRange" min="0" max="2" value="1" onchange="checkFormal()">

<h5 id="para"></h5>
	<br>
	<br>

	<div id="tone0" style="display:none">
  		<form role="form" action="written_email.php" method="get">
  		<input type="hidden" name="tone" value="0">
    	<p>Hi  
		<input type="text" name="recipient" placeholder="Mr. Bitidez">,
		<br>
		<br>
		<p>I hope you're having a good <span id="day1"></span>! I just wanted to let you know that I will be away on 
		<input type="text" name="day" placeholder="Tuesday" style="width:90px"> since I 
		<input type="text" name="reason" placeholder="have a volleyball game">. I will 
		<input type="text" name="actions" placeholder="check Google Classroom and" style="width:225px"> ask a friend for the homework and catch up on any work I miss. If you would like me to drop by sometime to pick up any handouts I'll need, please let me know.
		<br>
		<br>
		Thanks,
		<br>
		<input type="text" name="signature" placeholder="Harry">
		<br>
		<br>
		<input type="submit" value="Finish">
		</form>
  	</div>

	<div id="tone1" style="display:none">
		<form role="form" action="written_email.php" method="get">
		<input type="hidden" name="tone" value="1">
     	<p>Dear 
     	<input type="text" name="recipient" placeholder="Ms. Williams">,
		<br>
		<br>
		<p>I hope you are having a nice <span id="day2"></span>! I just wanted to let you know that I will not be in class on 
		<input type="text" name="day" placeholder="Tuesday" style="width:90px"> since I 
		<input type="text" name="reason" placeholder="will be at a debating tournament" style="width:240px">. I will 
		<input type="text"  name="actions" placeholder="check Google Classroom and" style="width:225px"> ask a friend for the homework and catch up on any work I miss. If you would like me to drop by sometime to pick up any handouts, please let me know.
		<br>
		<br>
		Thanks,
		<br>
		<input type="text" name="signature" placeholder="Harry">
		<br>
		<br>
		<input type="submit" value="Finish">
		</form>
	</div>

	<div id="tone2" style="display:none">
		<form role="form" action="written_email.php" method="get">
		<input type="hidden" name="tone" value="2">
      	<p>Dear 
      	<input type="text" name="recipient" placeholder="Mr. Allan Poe">,
		<br>
		<br>
		<p>I hope your <span id="day3"></span> is going well! I just wanted to inform you that, unfortunately, I will be unable to attend class on 
		<input type="text" name="day" placeholder="Tuesday" style="width:90px"> because of 
		<input type="text" name="reason" placeholder="an urgent family issue" style="width:180px">. I will 
		<input type="text" name="actions" placeholder="check Google Classroom and" style="width:225px"> ask a classmate for the homework and complete any work I miss. If you would like me to pick up any handouts, please let me know.
		<br>
		<br>
		Thanks,
		<br>
		<input type="text" name="signature" placeholder="Harry">
		<br>
		<br>
		<input type="submit" value="Finish">
		</form>
	</div>

</div>


</body>
</html>
