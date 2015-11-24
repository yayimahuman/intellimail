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



<style>
* {
    font-size: 100%;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-style: normal;
    font-variant: normal;
    font-weight: 300;
    color: #003366;
}
.bg {
	  background: url('http://www.aamrofreight.net/wp-content/uploads/2014/06/blue-abstract-background.jpg') no-repeat center center;
	  position: absolute;
	  width: 100%;
	  height: 300px;
	  top:0;
	  left:0;
	  z-index: -1;
}
.jumbotron{
    background:transparent;
    height:250px;
}
body{
    background:#F0F0F0;
}
button,input[type=submit]{
    font-size: 1.25em;
    font-weight: 300;
    padding: 0.3em 1em;
    margin: 0.5em 0.5em;
    text-align: center;
    border-radius: 0.3em;
    border: 0.1em solid #003366;
    background:#F0F0F0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
button:hover,button:active,input[type=submit]:hover {
    background: #003366;
    color: white;
}
center {
position: relative;
  top: 40%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
input[type=text] {
 	border:1px solid #D0D0D0;
	margin: 0;
 	-webkit-appearance: none;
}
input[type=text]:focus {
  outline: none;
}
/*for navigation bar*/
.navbar-default .navbar-nav > li > a {
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    font-size: 1.125em;
    color:#003366;
}
.navbar-default .navbar-nav > li.active > a:link,.navbar-default .navbar-nav > li.active > a:hover{
    background:#002549;
    color:#F8F8F8;
}
.navbar-default .navbar-nav > li > a:hover{
    background:#004282;
    color:#F8F8F8;
}
.navbar .navbar-nav {
    vertical-align: top;
}
.navbar .navbar-collapse {
    text-align: center;
}
p{
	font-size: 120%;
}
</style>

</head>

<body onload="getEmail()">

<nav class="navbar navbar-default navbar-static-top" style="margin:0px;border:none">
  <div class="container-fluid">
    <div class="navbar-header" style="max-width:1000px">
    <a style="margin-left:10px" class="navbar-brand" href="http://intellimail.xyz/"><img height="30px" src="http://demoware.eu/en/intranet/administrative/images/support-images/mail-icon"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://intellimail.xyz/templates">Our Templates</a></li>
        <li><a href="http://intellimail.xyz/suggest">Suggest a Template</a></li>
        <li><a href="http://intellimail.xyz/about">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>

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

<script>
	function getEmail() {
    var x = <?php echo $_GET["tone"]; ?>;
    if (x==0){document.getElementById("tone0").style.display = "block";}
    else if (x==1){document.getElementById("tone1").style.display = "block";}
    else if (x==2){document.getElementById("tone2").style.display = "block";}
}
</script>



</body>
</html>
