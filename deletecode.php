<?php

require("./ph.php");
require("./getPH.php");

if (isset($_POST['deletedata'])) {

    $id = $_POST['delete_id'];


    $query = "DELETE From ai-mobile WHERE  id = $id";

    $queryRun = mysqli_query($conn, $query);

    if ($queryRun) {
        echo '<script> alert("Data Saved"); </script>';
        header('Location:index.php');
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}