<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phoneshop";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo ("conneciton");
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $usertype = $_POST['usertype'];

    $query = "SELECT * FROM `users` WHERE username='" . $user . "' and password = '" . $pass . "' and usertype='" . $usertype . "'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo '<script type="text/javascript">alert("you are login successfully and you are logined as ' . $row['usertype'] . '")</script>';
        }
        if ($usertype == "admin") {
?>
<script type="text/javascript">
window.location.href = "admin.php"
</script>
<?php

        } else {
        ?>
<script type="text/javascript">
window.location.href = "user.php"
</script>
<?php

        }
    } else {
        echo 'no result';
    }
}