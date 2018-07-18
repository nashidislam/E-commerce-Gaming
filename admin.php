
<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:index.php");
}

include_once 'headadmin.php';

 ?>
<div class="container">
  <?php
  if(isset($_SESSION['msg'])){
  echo "  <label style=\"color:red\">";
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
  echo "</label></br>";
  }


   ?>

<?php
//table view code here for guest...
echo "<h2>";
echo "Welcome to the Manage page " . $_SESSION['username']."!";
echo "</h2>";
include_once 'db.php';
$sql = "SELECT * FROM Product";
$result = mysqli_query($conn, $sql);



//table view code here for guest...

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<table class='table table-borderless text-centered' align='center'>";
  echo "<tr><th align='center'>Iteam No.</th><th align='center'>Game Name</th><th align='center'>Genre</th><th align='center'>Size</th><th align='center'>Price</th><th align='center'>Rating</th><th align='center'>Image</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
      //echo "id: " . $row["upc"]. " - Name: " . $row["store"]. " " . $row["type"]. "<br>";
      echo "<tr><td>{$row['UPC']}</td><td>{$row['Name']}</td><td>{$row['Type']}</td><td>{$row['Size']}</td><td>{$row['Price']}</td><td>{$row['Rating']}</td><td><img src='{$row['Console']}' style='width:70px;height:70px;'/></td></tr>";
  }
  echo "</table>";

  echo "</div>";

} else {
  echo "0 results";
}


 ?>
<div class="container">
  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">add Iteam</button>
  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#delModal" style="margin-left:100px;">Delete Iteam</button>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add GAME</h4>
      </div>
      <div class="modal-body">
        <div class="container"style="padding:30px;">

        <div class="col-sm-8">

        <form class="register" action="addItem.php" method="post">

        <label for="lname"><b>Product Name</b></label>
        <input type="text" placeholder="Enter Product Name" name="name1" id="last" required>

        <label for="email"><b>Game Type</b></label>
        <input type="text" placeholder="Enter Type" name="type1" id="username" required>

        <label for="uname"><b>Game Size</b></label>
        <input type="text" placeholder="Enter Size" name="size1" id="username" required>

        <label for="psw"><b>Price</b></label>
        <input type="password" placeholder="Enter Price" name="price1" id="pwd" required>

        <label for="psw1"><b>Rating</b></label>
        <input type="password" placeholder="Enter Rating" name="rating1" id="pwd1" required>
        <label for="psw1"><b>Image URL</b></label>
        <input type="password" placeholder="Enter Image URL" name="console1" id="pwd1" required>

        <button class="btn btn-primary" type="submit" name="additem">Add Game</button>

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

<!-- Modal -->
<div id="delModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Game</h4>
      </div>
      <div class="modal-body">
        <div class="container"style="padding:30px;">

        <div class="col-sm-8">

        <form class="register" action="addItem.php" method="post">

          <?php
          if(isset($_SESSION['msg'])){
          echo "  <label style=\"color:red\">";
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
          echo "</label></br>";
          }

           ?>

        <label for="lname"><b>Delete Product</b></label>
        <input type="text" placeholder="Enter Product ID" name="name1" id="last" required>

        <button class="btn btn-primary" type="submit" name="delitem">Delete Game</button>

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

 <?php

 include_once 'foot.php';

  ?>
