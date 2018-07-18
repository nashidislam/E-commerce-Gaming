<!DOCTYPE html>
<html lang="en">
<head>
  <!-- welcome page of the youtube treding info site

Bootstrap is used for the design and an JS application -->
  <title>Trend Tube</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

  <script type="text/javascript" src="validate.js"></script>



  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 50px 100px;
      margin-left: 320px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(10%);
      filter: grayscale(10%); /* make all photos black and white */
      width: 50%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 p {
      color: #fff !important;
      display: none;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }

  select.selectpicker option:hover {
    box-shadow: 0 0 10px 100px #1882A8 inset;
}
  /* Style the button*/
	.btn-primary {
			color: #ffffff;
			text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
			background-color: #006dcc;
			*background-color: #0044cc;
			background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
			background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
			background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
			background-image: -o-linear-gradient(top, #0088cc, #0044cc);
			background-image: linear-gradient(to bottom, #0088cc, #0044cc);
			background-repeat: repeat-x;
			border-color: #0044cc #0044cc #002a80;
			border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
			filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
	}
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
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
      <a class="navbar-brand" href="index.php">Trend Tube</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="dataView.php">DATA SUMMERY</a></li>
        <li><a href="#contact">FEEDBACK</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">WILL</a></li>
            <li><a href="#">ADD</a></li>
            <li><a href="#">LATER</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- Container (data list) -->
<div id="band" class="container text-center">
    <h3 style="font-size: 24px">Trend Tube</h3>
    <p><em>Lets analyze what is trending in YouTube!</em></p>
      <p style="font-size: 18px">Our results are divided into two broad segments - By Category and By Popularity.
        Users can choose between 10 most popular categories and get quick statistics on each category.
        Similarly, users can choose by Popularity criteria and see which videos, that meet the criteria, are trending.
        This interactive interface is fun and insightful. Try it!</p>
  <br>
  <div class="row text-center">

    <div class="form-group">
    <div class="col-sm">
      <form action="dataView.php" method="post" >
      <label for="sel1">Select the Category (select one):</label>
			<select class="selectpicker" data-style="btn-primary" name="sel1">
        <option selected="selected" id="cat1">Category</option>
        <option id="cat2">Film & Animation</option>
			 	<option id="cat3">Autos & Vehicles</option>
			 	<option id="cat4">Music</option>
			 	<option id="cat5">Pets & Animals</option>
        <option id="cat6">Sports</option>
        <option id="cat7">Travel & Events</option>
        <option id="cat8">Gaming</option>
        <option id="cat9">Entertainment</option>
        <option id="cat10">Science & Technology</option>

        <option>How to & Style</option>
			</select>


      <label for="sel2" style="margin-left:15px">Popularity (select one):</label>
			<select class="selectpicker" data-style="btn-primary" name="sel2">
        <option selected="selected" id="pop0">Popularity</option>

        <option id="pop2">Top Likes</option>
        <option id="pop1">Top Dislikes</option>
        <option id="pop3">Top Views 2018</option>
        <option id="pop1">Top Likes 2018</option>

			</select>
    </div>
        </br>
      <input class="btn btn-success" type="submit" name="submit" value="Generate"/>

		</div>
  </form>
    </div>

    <div class="row" style="display: table;">

      <?php

      //runs the php block code when the selectors are set.
      if((isset($_POST["sel1"]) && strcmp($_POST["sel1"],Category)!=0) || (isset($_POST["sel2"]) && strcmp($_POST["sel2"],Popularity)!=0))
      {


      if(isset($_POST["sel1"]) && strcmp($_POST["sel1"],Category)!=0 && strcmp($_POST["sel2"],Popularity)==0 ){
        echo "<h2>Showing Data summery for ". $_POST["sel1"]. " category</h2>";
      $filename = $_POST["sel1"].".csv";
    }
    elseif (strcmp($_POST["sel1"],Category)!=0 && strcmp($_POST["sel1"],Popularity)!=0 ) {
      echo "<h2>Showing Data summery for ". $_POST["sel1"]. " of the ". $_POST["sel2"]. "</h2>";
      $filename = $_POST["sel2"].".csv";
    }

      else {
        echo "<h2>Showing Data summery for ". $_POST["sel2"]. "</h2>";
        $filename = $_POST["sel2"].".csv";

      }
      $row = 1;

      echo "<table class=\"table table-hover\">";

      if (($handle = fopen($filename, "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
              $num = count($data);
              echo "<tr>";
              for ($c=0; $c < $num; $c++) {

                if($row==1){
                  echo "<th>". strtoupper($data[$c]) ."</th>";
                }
                else{
                  if(strcmp($_POST["sel1"],Category)!=0 && strcmp($_POST["sel2"],Popularity)!=0){

                  if(strcmp($data[2],$_POST["sel1"])==0)
                  echo "<td>". $data[$c] ."</td>";

                 }
                 else {
                   echo "<td>". $data[$c] ."</td>";

                 }
                }
              }
              $row++;

              echo "</tr>";
          }
          fclose($handle);


      }
      echo "</table>";

    }


    unset($_POST['sel1']);
    unset($_POST['sel2']);

       ?>
    </div>

  </div>

  <div class="container text-center">
    <h2>Look at the beautiful visual analytical possibilities with BigData.</h2>

  </div>

<!-- Container floating image -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item">
        <img src="likesDislikesByCategory.png" alt="Like dislikes by category" width="1200" height="700">
        <div class="carousel-caption">
        </div>
        <div class="text-center">
          <h3>Like Dislike by Category</h3>
          <p>The videos with most likes and most dislikes.</p>
        </div>
      </div>

      <div class="item">
        <img src="viewsByCategory.png" alt="views By Category" width="1200" height="700">
        <div class="carousel-caption">
        </div>
        <div class="text-center">
          <h3> Views By Category</h3>
          <p>The categories weighted by their count..!</p>
        </div>
      </div>

      <div class="item active">
        <img src="Category Word Cloud.png" alt="Category Word Cloud" width="1200" height="700">
        <div class="carousel-caption">
        </div>
        <div class="text-center">
          <h3>Category Word Cloud</h3>
          <p>Word Cloud that consists the cateogries by weights.</p>
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

  <!-- Modal -->


      <!-- Modal content-->


<!-- Container (Contact Section) -->
<div id="contact" class="container">

  <br>
  <h3 class="text-center">From The Developers</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Jack</a></li>
    <li><a data-toggle="tab" href="#menu1">Cynthia</a></li>
    <li><a data-toggle="tab" href="#menu2">Nashidul</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Data Filter Manager</h2>
      <p>"The best Dad is in the town.."</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Data Category Manager</h2>
      <p>"Guys I am the team leader, not your mom, so get your acts together."</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Data integration and front end dev</h2>
      <p>"I mean, Big Data is fun, then again I could be drunk."</p>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>CopyRight of Team JNC <a href="#" data-toggle="tooltip" title=""></a></p>
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
