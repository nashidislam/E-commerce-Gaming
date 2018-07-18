<?php
session_start();
include_once 'head.php';
?>

<?php

if (isset($_POST['submit'])) {
if(isset($_POST['p_total'])){
  include_once 'db.php';

  $name = mysqli_real_escape_string($conn,$_SESSION['Name']);
  $total = mysqli_real_escape_string($conn,$_POST['p_total']);
  $sql = "INSERT INTO OrderNew (UserName, Total) VALUES ('$name','$total');";
  mysqli_query($conn, $sql);
  echo "<h3>" . $_SESSION['Name']. " ,Your Order has been placed. </h3>";
}
}

else {
  echo "Cart Was Empty";
}






header('Refresh: 3; URL = index.php');
?>

<?php  include_once 'foot.php';
?>
