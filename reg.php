<?php
require("./ph.php");

if (
    isset($_POST['name']) &&
    isset($_POST['pass']) &&
    isset($_POST['email']) &&
    isset($_POST['area']) &&
    isset($_POST['tel']) ||
    isset($_FILES['image'])
) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $area = $_POST['email'];
    $tel = $_POST['tel'];
    $image = $_FILES['image'];
    $query = "INSERT INTO `users`( `User`, `Pass`, `Email`, `Area`, `tel`) 
    VALUES ('$name','$pass','$email','$area','$tel')";
    if (mysqli_query($conn, $query)) {
        if ($_FILES['image']['name'] != '') {
            $image1 = $_FILES['image']['tmp_name'];
            $image1 = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            mysqli_query($conn, "UPDATE `users` SET image='" . $image1 . "' where Email='" . $email . "'");
        }
        header("Location: login.php");
    } else {
        echo 'error';
    }
} else {
    echo 'uncorrect register';
}