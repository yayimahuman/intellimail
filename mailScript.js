function checkDay(){
    var date = new Date();
    var d = date.getDay();
    if (d == 0|| d == 5||d == 6){
        document.getElementById("day").innerHTML = "weekend";
    }
    else {
        document.getElementById("day1").innerHTML =  "day";
    }
}
function checkFormal() {
    var x = document.getElementById("myRange").value;
    if (x==0){
        document.getElementById("para").innerHTML = "Friendly";
        document.getElementById("tone1").style.display = "none";
        document.getElementById("tone2").style.display = "none";
        $("#tone0").fadeIn();
    }
    else if (x==1){
        document.getElementById("para").innerHTML = "Semi-Formal";
        document.getElementById("tone0").style.display = "none";
        document.getElementById("tone2").style.display = "none";
        $("#tone1").fadeIn();
    }
    else if (x==2){
        document.getElementById("para").innerHTML = "Formal";
        document.getElementById("tone0").style.display = "none";
        document.getElementById("tone1").style.display = "none";
        $("#tone2").fadeIn();
    }
}
/*function getEmail(x) {
    if (x==0){
        document.getElementById("tone0").style.display = "block";
    }
    else if (x==1){
        document.getElementById("tone1").style.display = "block";
    }
    else if (x==2){
        document.getElementById("tone2").style.display = "block";
    }
}*/
