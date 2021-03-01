<?php
//Create Connection With database 
$conn = mysqli_connect('localhost', 'root', '', 'phoneshop');

// For check connection 
if (mysqli_connect_errno()) {

    //error connection
    echo 'Error connection with database ' . mysqli_connect_errno();
}