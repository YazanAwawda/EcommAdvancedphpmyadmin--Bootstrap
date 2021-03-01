<?php

require("./ph.php");
require("./getPH.php");

if (isset($_POST['insertdata'])) {

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $des = $_POST['ph_description'];
    $network_tech = $_POST['network_tech'];
    $network_2g = $_POST['network_2g'];
    $network_3g = $_POST['network_3g'];
    $network_4g = $_POST['network_4g'];
    $ph_photo = $_POST['ph_photo'];
    $price = $_POST['price'];
    $ph2 = $_POST['ph2'];
    $ph3 = $_POST['ph3'];
    $ph_quantity = $_POST['ph_quantity'];

    $query = "INSERT INTO `ai-mobile`
     (`name` , `brand` , `ph_description`,`network_tech`,`network_2g`,`network_3g`,`network_4g`,`ph_photo`,`price` , `ph2` , `ph3` , `ph_quantity`);
VALUES ('$name' , '$brand' , '$des','$network_tech' ,'$network_2g','$network_3g','$network_4g','$ph_photo','$price','$ph2','$ph3','$ph_quantity')";

    $queryRun = mysqli_query($conn, $query);

    if ($queryRun) {
        echo '<script> alert("Data Saved"); </script>';
        header('Location:index.php');
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}