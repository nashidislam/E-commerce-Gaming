  <?php
$servername = "webdb.crqpmeqiifpu.us-east-2.rds.amazonaws.com";
$username = "nashroot1";
$password = "Islamnas1!";
$database = "FinalProject";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "failed";

}


?>
