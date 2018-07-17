<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:index.php");
}

include_once 'head.php';
include_once 'db.php';

$uid=$_SESSION['username'];
$sql = "SELECT Name FROM Customer WHERE UserName ='$uid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

        $name= $row['Name'];
        $_SESSION['Name']= $row['Name'];
    }
}
echo "<h2 style=\"font-size: 24px;text-align: center;\">";
echo "Welcome to Game Loft  ".$name." !!";
echo "</h2>";

 ?>
</div>


<div class="container" id= "product">
  <h2 class="text-center">Product List</h2>

  <p>Search for your favourite Game:</p>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>

  <!--aarohi part -->
  <table id = "p_list" class="table table-borderless">
    <tbody id="myTable">
    <tr ng-repeat = "product in products " style="border:0">
      <td style="border:1"><h5 style="font-size:19px">{{product.p_name}}</h5>
	         <center><img ng-src = "{{product.p_image}}" style="width:100px;height:110px;"/></center>
	         <div><label>Price: ${{product.p_price}}</label></div>
	         <center><button type = "button" ng-click = "add_cart(product)"><span class = "glyphicon glyphicon-shopping-cart"></span> Add to cart</button></center>
      </td>
    </tr>
  </tbody>
  </table>

  </table>>
   <button type = "button" ng-click = "showCart()"><span class = "glyphicon glyphicon-shopping-cart"></span> Show cart</button>
  </div>

<div class="container">
 <div class= "check-element animate-show-hide" ng-show="showCart1" >
	<div class = "panel-heading">
		<h5>MY CART</h5>
	</div>
	<div class = "panel-body table-responsive">

    <form action ="submitOrder.php" method ="post">
      <table class = "table">
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat = "cart in carts" ng-init = "setTotals(cart)">
            <td>{{cart.p_name}}</td>
            <td>${{cart.p_price}}</td>
            <td><button type = "button" ng-click = "remove_cart(cart)" class = "btn btn-danger"><span class = "glyphicon glyphicon-remove"></span></button></td>
          </tr>
          <tr>
            <td align = "right">Total</td>
            <td>${{total}} <input type="text" name="p_total" style="display:none;" value={{total}}></td>
          </tr>
        </tbody>
      </table>
      <button class="btn-right" type="submit" name="submit">Place an order</button>
      </form>
	</div>
	</div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<?php

include_once 'foot.php' ?>
