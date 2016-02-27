// jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 0) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        // jQuery for page scrolling
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 800, 'easeInOutExpo');
        event.preventDefault();
    });
});
$(function() {
    $('.navbar-collapse ul li a').bind('click', function(event) {
        // Closes the Responsive Menu on Menu Item Click
        $('.navbar-toggle').click();
    });
});
// Day check function for "day" or "weekend"
function checkDay(){
    var date = new Date();
    var d = date.getDay();
    if (d == 0||d == 6){
        $("span.day").html("weekend");
    }
    else {
        $("span.day").html("day");
    }
}
function checkTone() {
    var x = document.getElementById("tone-slider").value;
    if (x == 0) {
        document.getElementById("tone-desc").innerHTML = "Friendly";
    }
    else if (x == 1) {
        document.getElementById("tone-desc").innerHTML = "Semi-Formal";
    }
    else if (x == 2) {
        document.getElementById("tone-desc").innerHTML = "Formal";
    }
    $("#form-location").load("templates/" + formName + "-" + String(x) +".php",function(){
        checkDay();
        document.getElementById("slider-div").style.display = "table";
        document.getElementById("finish-btn").style.display = "block";
        document.getElementById("copy-btn").style.display = "none";
    });
}
function missingClassButton() {
    formName = "missing-class";
    checkTone();
}
function extensionButton() {
    formName = "extension";
    //checkTone();
    document.getElementById("form-location").innerHTML = "This template is not available at the moment.";
}
function meetingButton() {
    formName = "meeting";
    //checkTone();
    document.getElementById("form-location").innerHTML = "This template is not available at the moment.";
}
function announcementButton() {
    formName = "announcement";
    //checkTone();
    document.getElementById("form-location").innerHTML = "This template is not available at the moment.";
}
function validateForm() {
    var name = document.forms["contact-form"]["name"].value;
    var error = false;
    if (name == null || name == "") {
        document.getElementById("name-error").innerHTML = "Name cannot be blank";
        error = true;
    }
    var email = document.forms["contact-form"]["email"].value;
    if (email == null || email == "") {
        document.getElementById("email-error").innerHTML = "Email cannot be blank";
        error = true;
    }
    var msg = document.forms["contact-form"]["message"].value;
    if (msg == null || msg == "") {
        document.getElementById("msg-error").innerHTML = "Message cannot be blank";
        error = true;
    }
    if (error){
        return false;
    }
    return true;
}
