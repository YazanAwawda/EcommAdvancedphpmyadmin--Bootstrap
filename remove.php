<?php
require './ph.php';
$id = $_POST['id'];
$query = "UPDATE `ai-mobile` SET ph_quantity=0 where id = $id";
mysqli_query($conn, $query);
header("Location: index.php");