
<?php
   session_start();
   include_once 'head.php';
    if(isset($_SESSION['username'])){
      unset($_SESSION["username"]);
      unset($_SESSION["password"]);
      unset($_SESSION['msg']);

      //header('Refresh: 2; url=index.php');
      echo "<div class='container'><h2>You Have Successfully Logged Out...</h2></div>";

    }

 else {
   //header("Refresh: 2; url=index.php");
   echo "<div class='container'><h2>No user is logged in to log out!!</h2></div>";

 }
   include_once 'foot.php';
?>>
