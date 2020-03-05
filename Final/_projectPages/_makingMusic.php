<!DOCTYPE html>
<html>
<head>
<title>Project1</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {
    font-family: "Lato", sans-serif;
    background-image: url('http://localhost/Final/wallpaper5.jpg');"
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 30px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 14px;}
}
</style>
</head>
<body>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost/Final/_projectPages/_myFirstProject.php">My First Project</a>
  <a href="http://localhost/Final/_projectPages/_makingMusic.php">Making Music</a>
  <a href="http://localhost/Final/_projectPages/_externalLED.php">External LED</a>
  <a href="#">Two LED's</a>
  <a href="#">Fading LED</a>
  <a href="#">Potentiometer</a>
  <a href="#">Push Button</a>
  <a href="#">4 X 3 Keypad</a>
  <a href="#">RGB LED</a>
  <a href="#">7-Segment LED Display</a>
  <a href="#">Rainbow Lights</a>
  <a href="#">8 X 7 Segment LED</a>
  <a href="#">8 X 8 Dot Matrix</a>
  <a href="#">LCD Display</a>
  <a href="#">OLED Display</a>
  <a href="#">Light Sensor</a>
  <a href="#">Tilt Sensor</a>
  <a href="#">IR Object Sensor</a>
  <a href="#">Ultrasonic Sensor</a>
</div>


<h2></h2>
<p></p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Project Library</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 
