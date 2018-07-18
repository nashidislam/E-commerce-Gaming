<?php
session_start();
include_once 'head.php';
?>
<img src="hi5.jpg" alt="hi5"/>
</br>
<?php

$txt=$_POST['name'] . ",".$_POST['email'] . "," . $_POST['comments']. "\n";

echo "<h3>" . $_POST['name'] . " ,Thank you for your feed back. </h3>";

$myfile = fopen("feedback.csv", "a") or die("Unable to open file!");
$txt=$_POST['name'] . ",".$_POST['email'] . "," . $_POST['comments']. "\n";
fwrite($myfile, $txt);

fclose($myfile);
header('Refresh: 3; URL = index.php');
?>

<?php  include_once 'foot.php';
?>
