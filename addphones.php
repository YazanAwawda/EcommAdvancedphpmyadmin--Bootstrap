<?php
require './ph.php';
if (isset($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];
    $query01 = "UPDATE `ai-mobile` SET  ph_quantity = ph_quantity + '" . $quantity . "' WHERE id = '$id'";
    if (mysqli_query($conn, $query01)) {
        header("Location: index.php");
    } else {
        echo 'error';
    }
}