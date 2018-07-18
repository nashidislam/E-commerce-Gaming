<?php
session_start();

if (isset($_POST['submit'])) {

  include_once 'db.php';

  $first = mysqli_real_escape_string($conn,$_POST['first']);
  $last = mysqli_real_escape_string($conn,$_POST['last']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $uid = mysqli_real_escape_string($conn,$_POST['uid']);
  $pwd = mysqli_real_escape_string($conn,$_POST['password']);
  $sql = "SELECT * FROM Customer WHERE UserName= '$uid'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck > 0) {

    echo "user name taken";
    header("Location: index.php");
    exit();
  }
  $sql = "SELECT * FROM Customer WHERE Email= '$email'";
  $result1 = mysqli_query($conn, $sql);
  $resultCheck1 = mysqli_num_rows($result1);
  if ($resultCheck1 > 0) {

    echo "email taken";
    header("Location: index.php");
    exit();
  }
  else{
  $sql = "INSERT INTO Customer (Name, Last, Email, UserName, Password) VALUES ('$first','$last','$email','$uid','$pwd');";
  mysqli_query($conn, $sql);
    $_SESSION['msg']="Registration SuccessFull Please Log In";
  if(isset($_SESSION['username'])){
   header("Location:logout.php");
}

  header("Location: index.php");
  exit();
}
}
else {
  exit();
}

 ?>
