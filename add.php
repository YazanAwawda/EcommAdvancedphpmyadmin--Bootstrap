<?php
require('ph.php');
require('getPH.php');
$query4 = "UPDATE `cart` SET `number_of_phones`=number_of_phones+1 
Where cart.id = '" . $_POST['id'] . "'";
var_dump($query4);
mysqli_query($conn, $query4);
header("Location:index.php");