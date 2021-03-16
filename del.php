<?php
require('ph.php');
require('getPH.php');
$query5 = "UPDATE `cart` SET `number_of_phones`=number_of_phones-1 
Where cart.id = '" . $_POST['id1'] . "'";
var_dump($query5);
mysqli_query($conn, $query5);

header("Location:index.php");