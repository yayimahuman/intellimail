<!DOCTYPE html>
<head>
	<title>Your Email</title>
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

</head>

<body onload="checkDay();">

<?php include_once "navbar.html";?>

<div class="container">
	<br>
	<?php 
	$tone = $_GET["tone"];
	if ($tone == 0) { ?>
		<p>Hi  
		<?php echo $_GET["recipient"]; ?>,
		<br>
		<br>
		<p>I hope you're having a good <span id="day"></span>! I just wanted to let you know that I will be away on 
		<?php echo $_GET["day"]; ?> since I 
		<?php echo $_GET["reason"]; ?>. I will 
		<?php echo $_GET["actions"]; ?>ask a friend for the homework and catch up on any work I miss. If you would like me to drop by sometime to pick up any handouts I'll need, please let me know.
		<br>
		<br>
		Thanks,
		<br>
	<?php }
	else if ($tone == 1) { ?>
		<p>Dear 
		<?php echo $_GET["recipient"]; ?>,
		<br>
		<br>
		<p>I hope you are having a nice <span id="day"></span>! I just wanted to let you know that I will not be in class on 
		<?php echo $_GET["day"]; ?> since I 
		<?php echo $_GET["reason"]; ?>. I will
		<?php echo $_GET["actions"]; ?> ask a friend for the homework and catch up on any work I miss. If you would like me to drop by sometime to pick up any handouts, please let me know.
		<br>
		<br>
		Thanks,
		<br>
		<?php echo $_GET["signature"]; ?>
	<?php }
	else if ($tone == 2) { ?>
		<p>Dear 
		<?php echo $_GET["recipient"]; ?>,
		<br>
		<br>
		<p>I hope your <span id="day"></span> is going well! I just wanted to inform you that, unfortunately, I will be unable to attend class on 
		<?php echo $_GET["day"]; ?> because of
		<?php echo $_GET["reason"]; ?>. I will 
		<?php echo $_GET["actions"]; ?> ask a classmate for the homework and complete any work I miss. If you would like me to pick up any handouts, please let me know.
		<br>
		<br>
		Thanks,
		<br>
		<?php echo $_GET["signature"]; ?>
	<?php } ?>

	<p>Sent with the help of IntelliMail.xyz</p>
</div>


</body>
</html>
