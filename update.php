<?php
require("./ph.php");
require("./getPH.php");



$query01 = "SELECT * FROM `ai-mobile`  ";

$query_run = mysqli_query($conn, $query01);
$fetch = mysqli_fetch_all($query_run, MYSQLI_ASSOC);



if (

    isset($_POST['name']) &&
    isset($_POST['brand']) &&
    isset($_POST['des']) &&
    isset($_POST['network_tech']) &&
    isset($_POST['network_2g']) &&
    isset($_POST['network_3g']) &&
    isset($_POST['network_4g']) ||
    isset($_POST['ph_photo']) &&
    isset($_POST['price']) &&
    isset($_POST['ph_quantity'])
) {

    $query_run = mysqli_query($conn, $query01);
    $fetch = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
    $id =  $_POST['id'];
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $des = $_POST['ph_description'];
    $network_tech = $_POST['network_tech'];
    $network_2g = $_POST['network_2g'];
    $network_3g = $_POST['network_3g'];
    $network_4g = $_POST['network_4g'];
    $ph_photo = $_POST['ph_photo'];
    $price = $_POST['price'];
    $ph_quantity = $_POST['ph_quantity'];






    if ($query_run) {
        $query01 = "UPDATE `ai-mobile` SET  name='$name', brand='$brand', ph_description='$network_tech'
        ,network_2g = '$network_2g' , network_3g ='$network_3g' ,
         network_4g = '$network_4g' ,  price = '$price' 
          , ph_quantity = '$ph_quantity' WHERE id = '$id' 
          
";


        $query_run = mysqli_query($conn, $query01);



        echo '<script> alert("Data Updated"); </script>';
        header("location:index.php");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}