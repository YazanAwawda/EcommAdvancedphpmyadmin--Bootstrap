<?php

require('ph.php');

//Create Query 
$query = 'SELECT * FROM `ai-mobile` ';

$query3 = 'SELECT * From `cart` INNER JOIN `ai-mobile` ON `cart`.id = `ai-mobile`.id';
//Get Result

$result = mysqli_query($conn, $query);

$res = mysqli_query($conn, $query3);
//Fetch Data  جلب البيانات 

$phones = mysqli_fetch_all($result, MYSQLI_ASSOC);


$crt = mysqli_fetch_all($res, MYSQLI_ASSOC);
// Free Result 
mysqli_free_result($result);

mysqli_free_result($res);