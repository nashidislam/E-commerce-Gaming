<?php
session_start();

if (isset($_POST['additem'])) {

  include_once 'db.php';
  $store = mysqli_real_escape_string($conn,$_POST['name1']);
  $department = mysqli_real_escape_string($conn,$_POST['type1']);
  $name = mysqli_real_escape_string($conn,$_POST['size1']);
  $size = mysqli_real_escape_string($conn,$_POST['price1']);
  $count = mysqli_real_escape_string($conn,$_POST['rating1']);
  $location = mysqli_real_escape_string($conn,$_POST['console1']);
  $sql = "SELECT * FROM Product WHERE name= '$name';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck > 0) {
    $_SESSION['msg']="Already Exists";
    header("Location: manage.php");
    exit();
  }
  else{
  $sql = "INSERT INTO Product (Name, Type, size, Price, Rating,Console) VALUES ('$store','$department','$name','$size','$count','$location')";
  mysqli_query($conn, $sql);
  $_SESSION['msg']="Successfully Added Iteam";
  unset($_Post['additeam']);
  header("Location: admin.php");
  exit();
}
}

else if (isset($_POST['delitem'])){
    include_once 'db.php';
    $upc = mysqli_real_escape_string($conn,$_POST['name1']);
    $sql = "SELECT * FROM Product WHERE Name= '$upc'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck <= 0) {

      $_SESSION['msg']="Wrong Item No";
      header("Location: admin.php");
      exit();
    }
    else{
    $sql = "DELETE FROM Product WHERE Name = $upc";
    mysqli_query($conn, $sql);
    $_SESSION['msg']="Successfully Deleted".$_POST['name1'].$sql;

    unset($_Post['additeam']);
    header("Location: admin.php");
    exit();
  }
}

else {
  exit();
}

 ?>
