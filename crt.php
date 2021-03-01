<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnId'])) {
    BuyBtnPressed();
}

function BuyBtnPressed()
{

    $phone_id = mysqli_real_escape_string(mysqli_connect('localhost', 'root', '', 'phoneshop'), $_POST['id']);

    $queryInsert = "INSERT INTO cart (id,number_of_phones) VALUES('$phone_id',1) ON DUPLICATE KEY UPDATE number_of_phones = number_of_phones + 1 ";
    if (mysqli_query(mysqli_connect('localhost', 'root', '', 'phoneshop'), $queryInsert)) {
    } else {
        echo 'ERROR' . mysqli_error(mysqli_connect('localhost', 'root', '', 'phoneshop'));
    }
}

header("Location:index.php");