<?php

require('ph.php');

//Create Query 
$query = 'SELECT * FROM `ai-mobile` ';

//Get Result

$result = mysqli_query($conn, $query);

//Fetch Data  جلب البيانات 

$phones = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Free Result 
mysqli_free_result($result);