<?php

if (isset($_POST['btnId'])) {
    BuyBtnPressed();
}

function BuyBtnPressed()
{
    require './ph.php';
    session_start();
    $queryUser = "SELECT * FROM `users` where Email='" . $_SESSION['email'] . "'";

    $r1 = mysqli_query($conn, $queryUser);
    $fetch2 = mysqli_fetch_all($r1, MYSQLI_ASSOC);
    $phone_id = mysqli_real_escape_string(mysqli_connect('localhost', 'root', '', 'phoneshop'), $_POST['id']);

    $queryInsert = "INSERT INTO cart (id,number_of_phones,userid) VALUES('$phone_id',1,'" . $fetch2[0]['Id'] . "') ON DUPLICATE KEY UPDATE number_of_phones = number_of_phones + 1 ";
    var_dump($queryInsert);
    if (mysqli_query(mysqli_connect('localhost', 'root', '', 'phoneshop'), $queryInsert)) {
        header("Location:user.php");
    } else {
        echo 'ERROR' . mysqli_error(mysqli_connect('localhost', 'root', '', 'phoneshop'));
    }
}