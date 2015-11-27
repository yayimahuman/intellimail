<!DOCTYPE html>
<head>

<title>Your Email - Write an Email Using IntelliMail</title>
<meta charset="utf-8">
<meta name="description" content="Use our email writing tool to write a concise and eloquently composed email. Fast, free to use, ad-free.">
<meta name="keywords" content="compare,hosts,webhosts,host,web, webhost,hosting,webhosting,find,best">
<meta name="author" content="Harry Dong">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="./javascript/mailScript.js"></script>
<link rel="stylesheet" type="text/css" href="./css/mailStyle.css">

<style>
.bg{background: url('http://www.aamrofreight.net/wp-content/uploads/2014/06/blue-abstract-background.jpg') no-repeat center center;}
</style>


</head>

<body onload="getEmail(<?php echo $_GET["tone"]; ?>);checkDay()">

<?php include_once "navbar.html";?>

<div class="container">
	<div id="tone0" style="display:none">
    	<p>Hi  
		<?php echo $_GET["recipient"];?>,
		<br>
		<br>
		<p>I hope you're having a good weekend! I just wanted to let you know that I will be away on 
		<?php echo $_GET["day"]; ?>
		since I 
		<?php echo $_GET["reason"];?>. 
		I will 
		<?php echo $_GET["actions"]; ?>
		ask a friend for the homework and catch up on any work I miss. If you would like me to drop by sometime to pick up any handouts I'll need, please let me know.
		<br>
		<br>
		Thanks,
		<br>
		<?php echo $_GET["signature"];?>
  	</div>

	<div id="tone1" style="display:none">
     	<p>Dear 
     	<?php echo $_GET["recipient"];?>,
		<br>
		<br>
		<p>I hope your weekend is going well! I just wanted to let you know that I will not be in class on 
		<?php echo $_GET["day"]; ?>
		since I 
		<?php echo $_GET["reason"];?>. 
		I will
		<?php echo $_GET["actions"]; ?> 
		ask a friend for the homework and catch up on any work I miss. If you would like me to drop by sometime to pick up any handouts, please let me know.
		<br>
		<br>
		Thanks,
		<br>
		<?php echo $_GET["signature"];?>
	</div>

	<div id="tone2" style="display:none">
      	<p>Dear 
      	<?php echo $_GET["recipient"];?>,
		<br>
		<br>
		<p>I hope you are enjoying your weekend! I just wanted to inform you that, unfortunately, I will be unable to attend class on 
		<?php echo $_GET["day"]; ?> 
		because of
		<?php echo $_GET["reason"];?>. 
		I will 
		<?php echo $_GET["actions"]; ?> 
		ask a classmate for the homework and complete any work I miss. If you would like me to pick up any handouts, please let me know.
		<br>
		<br>
		Thanks,
		<br>
		<?php echo $_GET["signature"];?>
	</div>
<p style="font-size:75%">Sent with the help of IntelliMail.xyz</p>
</div>




</body>
</html>
