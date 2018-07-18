<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("webdb.crqpmeqiifpu.us-east-2.rds.amazonaws.com", "nashroot1", "Islamnas1!", "FinalProject");

$result = $conn->query("SELECT UPC,Name, Size, Price, Console FROM Product");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"p_id":"'  . $rs["UPC"] . '",';
    $outp .= '"p_name":"'   . $rs["Name"]        . '",';
    $outp .= '"p_price":"'   . $rs["Price"]        . '",';
    $outp .= '"p_image":"'. $rs["Console"]     . '"}';
}
$outp ='{"products":['.$outp.']}';
$conn->close();

echo($outp);
?>
