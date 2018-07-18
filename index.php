<?php
session_start();
if(isset($_SESSION['username'])){
  if(strcmp($_SESSION['username'],"Admin")==0)
   header("Location: admin.php");

   else {
     header("Location: home.php");
   }
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- welcome page of the youtube treding info site -->
  <title>Game Loft</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

  <style>
  form.register {width: 40.00%;}

  input[type=text], input[type=password] {
      width: 100%;
      padding: 7px 7px;
      margin: 5px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
  }

  </style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Game Loft</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="home.php">GAMES</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal">Register</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!--<li><a href="#">WILL</a></li>
            <li><a href="#">ADD</a></li>
            <li><a href="#">LATER</a></li>-->
          <form class="form-inline" action="logincheck.php" method="post">
            <div class="container">
								<label for="uname"><b>Username</b></label>
								<input type="text" placeholder="Enter Username" name="username" id="username" required>

								<label for="psw"><b>Password</b></label>
								<input type="password" placeholder="Enter Password" name="password" id="pwd" required>

								<button class="btn btn-info btn-lg" type="submit" name="login">Login</button>

                   <label>
     									<input type="checkbox" checked="checked" name="remember"> Remember me
     								</label>

                    <!--php block code for shoWing wrong password message-->
                      <?php
                      if(isset($_SESSION['msg'])){
                      echo "  <label style=\"color:red\">";
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                      echo "</label></br>";
                    }
                       ?>

                    <span class="psw" style="margin-left:300px;">Not a User?</span>
     								<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Sign Up</button>
              </div>

              </form>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registration</h4>
      </div>
      <div class="modal-body">
        <div class="container"style="padding:30px;">

        <div class="col-sm-8">

        <form class="register" action="confirmation.php" method="post" onsubmit="return validateLogIn();">


        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="first" id="first" required>
        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="last" id="last" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="username" required>

        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uid" id="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="pwd" required>

        <label for="psw1"><b>Retype Password</b></label>
        <input type="password" placeholder="Enter Password" name="password1" id="pwd1" required>

        <button type="submit" name="submit" class="btn btn-primary" style="padding:8px;">Create Account</button>
        <label id="result1" style="display: none;">
        User Name Format Wrong
        </label>
        <label id="result3" style="display: none;">
        Password Format Wrong
        </label>

        </form>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="fifa.jpg" alt="Gangnam Style" width="1200px"height="700px">
        <div class="carousel-caption">
          <h3>Fifa 18</h3>
        </div>
      </div>

      <div class="item">
        <img src="thecrew.png" alt="Chunli" height="675">
        <div class="carousel-caption">
          <h3>The Crew</h3>
        </div>
      </div>

      <div class="item">
        <img src="counter.png" alt="incredable 2" width="1200" height="690">
        <div class="carousel-caption">
          <h3>CS:GO</h3>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3 style="font-size: 24px">Game Loft</h3>
   <p style="font-size: 18px">Game loft is the video game destination that offers everything from new releases to pre-orders to ensure you get your game as soon as it is available. Many game titles have bonus materials available only to customers who pre-order the game. Find fun gaming options for people of all ages, including a growing Toys to Life selection and educational games that are appropriate for young children    </p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>God Of War</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="gow.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>God Of War</p>
        <p>PlayStation 4 </p>
        <p>Price: $100 </p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Far Cry 5</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="farcry.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Far Cry 5</p>
         <p>PlayStation 4 </p>
        <p>Price: $95 </p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Dota2</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="dota2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Dota2</p>
         <p>PlayStation 4 </p>
        <p>Price: $150 </p>
      </div>
    </div>
  </div>



</div>

  <!-- Modal -->


      <!-- Modal content-->


<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We would love a feedback!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Not a Fan? Let us know how we can be better.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Atlanta, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +404 xxx xxxx</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <form action="submit.php" method="post">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">From The Developers</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Nashid</a></li>
    <li><a data-toggle="tab" href="#menu1">Arman</a></li>
    <li><a data-toggle="tab" href="#menu2">Aarohi</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Data Filter Manager</h2>
      <p>"The best Dad is in the town.."</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Data Category Manager</h2>
      <p>"Guys I am the team leader not your mom, so get your acts together..."</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Data integration and front end dev</h2>
      <p>"Big Data is fun, then again I could be drunk."</p>
    </div>
  </div>
</div>

<!-- Add Google Maps. Google map API -->
<div id="googleMap"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(33.756253, -84.3892778);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1jk6ME0W952ABHeMUB7LSpXgcmwW7HtQ&callback=myMap"></script>
<!--
this code only works for this website inorder to use this to your website, get a free API key from Google.

-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>CopyRight of Team JNC ©2018 <a href="#" data-toggle="tooltip" title=""></a></p>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
