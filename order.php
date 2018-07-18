<?php

include_once 'headadmin.php';
//table view code here for guest...
echo "<h2>";
echo "Welcome to the Manage page " . $_SESSION['username']."!";
echo "</h2>";
include_once 'db.php';
$sql = "SELECT * FROM OrderNew";
$result = mysqli_query($conn, $sql);



//table view code here for guest...

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<table class='table table-borderless text-centered' align='center'>";
  echo "<tr><th align='right'>Iteam No.</th><th align='right'>User Name</th><th align='right'>Order Total</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
      //echo "id: " . $row["upc"]. " - Name: " . $row["store"]. " " . $row["type"]. "<br>";
      echo "<tr><td>{$row['ID']}</td><td>{$row['UserName']}</td><td>{$row['Total']}$</td></tr>";
  }
  echo "</table>";

  echo "</div>";

} else {
  echo "0 results";
}

include_once 'foot.php';
 ?>
