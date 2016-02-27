<!DOCTYPE html>
<html lang="en">
<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'IntelliMail.xyz';
        $to = 'donha@utschools.ca';
        $subject = 'IntelliMail - Contact Us';

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }

        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }

        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage) {
            if (mail ($to, $subject, $body, $from)) {
                $result='<br><div class="alert alert-success">Thank you! Your message has been sent.</div>';
            } else {
                $result='<br><div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
            }
        }
    }
?>
<head>

    <title>The Smarter Way to Write an Email - IntelliMail's Email Tool</title>

	<meta charset="utf-8">
	<meta name="description" content="Write an email in seconds with IntelliMail. Fast, free to use, ad-free.">
	<meta name="keywords" content="mail,write">
	<meta name="author" content="Harry Dong">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap-custom.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/mailstyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/mailscript.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script>
        new WOW().init();
        var formName;
        $(document).ready(function(){
            console.log("Document ready");
            new Clipboard('#copy-btn');
            $("#finish-btn").click(function(){
                $("#homepage-form").submit();
            });

            $(document).on('submit', '#homepage-form', function(){
                var data = $(this).serialize();
                var x = String(document.getElementById("tone-slider").value);
                $.ajax({
                    type : 'GET',
                    url  : "results/" + formName + "-" + x +".php",
                    data : data,
                    success :  function(data) {
                        document.getElementById("slider-div").style.display = "none";
                        document.getElementById("finish-btn").style.display = "none";
                        document.getElementById("copy-btn").style.display = "block";
                        $("#homepage-form").hide();
                        $("#form-location").show();
                        $("#form-location").html(data);
                        checkDay();
                    }
                });
                return false;
            });

        });
    </script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-navicon"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-envelope"></i>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden"><a href="#page-top"></a></li>
                    <li><a class="page-scroll" href="#how-it-works">How It Works</a></li>
                    <li><a class="page-scroll" href="#categories">Categories</a></li>
                    <li><a class="page-scroll" href="#popular-templates">Popular Templates</a></li>
                    <li><a class="page-scroll" href="#about">About</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="brand-heading">IntelliMail</h1>
                        <p class="intro-text">The smarter way to write an email</p>
                        <a href="#how-it-works" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- How It Works Section -->
    <section id="how-it-works" class="container content-section text-center">
        <div class="container">
            <h2>How it works</h2>
            <hr><br>
            <div class="row">
                <div class="col-sm-4 col-md-2 col-md-offset-1">
                    <i class="fa fa-5x fa-search wow fadeInUp" data-wow-delay=".2s"></i>
                    <br><br>
                    <h3 class="wow fadeIn" data-wow-delay=".7s">Find</h3>
                    <p class="text-muted wow fadeIn" data-wow-delay=".7s">Look for a template for the email you're writing</p>
                </div>
                <div class="col-sm-4 col-md-2">
                    <i class="fa fa-5x fa-sliders wow fadeInUp" data-wow-delay=".2s"></i>
                    <br><br>
                    <h3 class="wow fadeIn" data-wow-delay=".7s">Switch</h3>
                    <p class="text-muted wow fadeIn" data-wow-delay=".7s">Change the tone to friendly or formal using the slider</p>
                </div>
                <div class="col-sm-4 col-md-2">
                    <i class="fa fa-5x fa-pencil-square-o wow fadeInUp" data-wow-delay=".3s"></i>
                    <br><br>
                    <h3 class="wow fadeIn" data-wow-delay=".7s">Fill</h3>
                    <p class="text-muted wow fadeIn" data-wow-delay=".7s">Fill in the blanks as you go through the email template</p>
                </div>
                <div class="col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0">
                    <i class="fa fa-5x fa-copy wow fadeInUp" data-wow-delay=".4s"></i>
                    <br><br>
                    <h3 class="wow fadeIn" data-wow-delay=".7s">Copy</h3>
                    <p class="text-muted wow fadeIn" data-wow-delay=".7s">Click the copy button to copy your email to your clipboard</p>
                </div>
                <div class="col-sm-4 col-md-2">
                    <i class="fa fa-5x fa-send wow fadeInUp" data-wow-delay=".5s"></i>
                    <br><br>
                    <h3 class="wow fadeIn" data-wow-delay=".7s">Send</h3>
                    <p class="text-muted wow fadeIn" data-wow-delay=".7s">Paste your email into an email message and send it off!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="container content-section text-center">
        <div class="container categories">
            <h2>Categories</h2>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-4 wow fadeIn" data-wow-delay=".2s">
                    <a class="categories" href="school.php">
                        <i class="fa fa-5x fa-graduation-cap"></i>
                        <br>
                        <br>
                        <h3>School</h3>
                    </a>
                </div>
                <div class="col-sm-4 wow fadeIn" data-wow-delay=".2s">
                    <a class="categories" href="work.php">
                        <i class="fa fa-5x fa-building"></i>
                        <br>
                        <br>
                        <h3>Work</h3>
                    </a>
                </div>
                <div class="col-sm-4 wow fadeIn" data-wow-delay=".2s">
                    <a class="categories" href="personal.php">
                        <i class="fa fa-5x fa-user"></i>
                        <br>
                        <br>
                        <h3>Personal</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Templates Section -->
    <section id="popular-templates" class="container content-section text-center">
        <div class="container">
            <h2>Popular Templates</h2>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6 col-md-3" data-wow-delay=".2s">
                    <button id="missing-class-btn" type="button" class="btn btn-default" data-toggle="modal" data-target="#homepage-modal" onClick="missingClassButton()">Missing Class<i class="fa fa-calendar-o btn-icon"></i></button>
                </div>
                <div class="col-sm-6 col-md-3" data-wow-delay=".2s">
                    <button id="extension-btn" type="button" class="btn btn-default" data-toggle="modal" data-target="#homepage-modal" onClick="extensionButton()">Extension<i class="fa fa-clock-o btn-icon"></i></button>
                </div>
                <div class="col-sm-6 col-md-3" data-wow-delay=".2s">
                    <button id="meeting-btn" type="button" class="btn btn-default" data-toggle="modal" data-target="#homepage-modal" onClick="meetingButton()">Meeting<i class="fa fa-briefcase btn-icon"></i></button>
                </div>
                <div class="col-sm-6 col-md-3" data-wow-delay=".2s">
                    <button id="announcement-btn" type="button" class="btn btn-default" data-toggle="modal" data-target="#homepage-modal" onClick="announcementButton()">Announcement<i class="fa fa-volume-up btn-icon"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About</h2>
                <hr>
                <p>Intellimail helps you write emails in seconds by providing eloquent and simple email templates for various purposes. All you have to do is choose your template and tone, and fill in the blanks!</p>
                <p>Open your finished email directly in your mail app or click to copy it for easy pasting.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="col-lg-8 col-lg-offset-2">
            <h2 style="text-align:center">Contact</h2>
            <br>
            <p style="text-align:center">Feel free to email us to provide some feedback on our templates, give us suggestions for new templates, or just to say hello!</p>
            <br>
            <form class="form-horizontal" role="form" method="post" name="contact-form" action="#contact" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                        <p id="name-error"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
                        <p id="email-error"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" rows="4" name="message" placeholder="Your Message"></textarea>
                        <p id="msg-error"></p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <input name="submit" type="submit" value="Send" class="btn btn-default btn-submit">
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <!--<?php echo $result; ?>-->
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright <i class="fa fa-copyright"></i> IntelliMail.xyz <!--<?php echo date("Y"); ?>--></p>
        </div>
    </footer>

    <div id="homepage-modal" class="modal fade" role="form">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h4 class="modal-title">Missing Class</h4>
                </div>
                <div class="modal-body">

                    <div id="slider-div" style="width:100%">
                        <p>Choose your tone</p>
                        <input type="range" id="tone-slider" min="0" max="2" value="1" onChange="checkTone()">
                        <h5 id="tone-desc"></h5>
                    </div>

                    <br>

                    <div id="form-location"></div>

                </div>
                <div class="modal-footer">
                    <button id="finish-btn" class="btn btn-default btn-modal pull-left">Finish</button>
                    <button id="copy-btn" class="btn btn-default btn-modal pull-left" data-clipboard-target="#homepage-result">Copy</button>
                    <button type="button" class="btn btn-default btn-modal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
