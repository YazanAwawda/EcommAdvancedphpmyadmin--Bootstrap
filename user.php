<?php
require('ph.php');
require('getPH.php');
require("./update.php");
session_start();
if ($_SESSION['email'] == '') {
    header("Location: logout.php");
}
$queryUser = "SELECT * FROM `users` where Email='" . $_SESSION['email'] . "'";

$r1 = mysqli_query($conn, $queryUser);
$fetch2 = mysqli_fetch_all($r1, MYSQLI_ASSOC);

$query3 = "SELECT * From `cart` INNER JOIN `ai-mobile` ON `cart`.id = `ai-mobile`.id where userid='" . $fetch2[0]['Id'] . "'  ";
$res = mysqli_query($conn, $query3);
$crt = mysqli_fetch_all($res, MYSQLI_ASSOC);

$result = 0;
foreach ($crt as $d) {

    $result = $result + ($d['number_of_phones'] * $d['price']);
}




?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>AI-Mobile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="container-fluied">

        <div class="row">
            <div class="col-sm-2 overflow-auto " style="max-height: 80vh;">
                <aside class="sidebar">
                    <nav class="nav" style="text-align: center;">

                        <ul>
                            <div class="sidebar-header">
                                <div class="user-pic"> <br><br><br><br><br><br>
                                    <?php echo '<img class="img-responsive img-rounded"
                         src="data:image/jpeg;base64,' . base64_encode($fetch2[0]['image']) .  '">  </img>'; ?>

                                </div>
                                <div class="user-info"><br>
                                    <p style="text-align: center;"> <span
                                            class="user-name"><?php echo $fetch2[0]['User']; ?>

                                        </span><br>

                                    </p>

                                </div>
                            </div>

                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <li class="active"><a
                                    href="mailto: <?php echo $fetch2[0]['Email']; ?>"><?php echo $fetch2[0]['Email']; ?></a>
                            </li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <li><a href="#"><?php echo $fetch2[0]['tel']; ?></a></li>
                            <form action="logout.php" method="post">
                                <button type="submit" class="btn btn-outline-info btn-lg">
                                    <span class="glyphicon glyphicon-log-out">Log out</span>
                                </button>
                            </form>
                        </ul>

                    </nav>
                </aside>

            </div>


            <div class="col-sm-8">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">

                        <form class="form-inline my-2 my-lg-0">
                            <div>
                                <input onkeyup=" SearchBtnPressed()" type="text" id="search" name="search"
                                    placeholder="Search...">
                                <button class="btn btn-outline-success my-2 my-sm-0" id="submit"
                                    name="submit">Search</button>
                            </div>
                        </form>

                    </div>

                </nav>

                <main class="page-content">
                    <div class="container">
                        <h2 style="text-align: center;">AI-Mobile</h2>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-12">


                            </div>
                        </div>
                    </div>
                </main>

                <div class="jumbotron" style="text-align: center;">
                    <h1 class="text-danger">Our new category</h1>
                </div>


                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 "
                    style="max-height: 80vh; height:80vh; overflow:auto;">
                    <?php foreach ($phones as $phone) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="card phonearr rounded-0 p-0 shadow-sm">
                            <?php echo '<img class="d-block w-100" 
                         src="data:image/jpeg;base64,' . base64_encode($phone['ph_photo']) .  '">  </img>'; ?>

                            <div class="card-body text-center">




                                <h4 class="text-info"><?php echo $phone["name"]; ?></h4>
                                <h6 class="text-danger">$ <?php echo $phone["price"]; ?></h6>
                                <input type="hidden" name="hidden_name" value="<?php echo $phone["name"]; ?>" />
                                <input type="hidden" name="hidden_price" value="<?php echo $phone["price"]; ?>" />



                                <div class="row">
                                    <div class="col">



                                    </div>
                                </div>
                                <br> <br>
                                <form method="post" action="crt.php">


                                    <div class="row">
                                        <div class="col">

                                            <div>
                                                <h5>Quantity</h5>
                                                <label><?php echo $phone['ph_quantity'] ?></label>

                                            </div> <br> <br>

                                            <textarea name="id" id="id" hidden><?php echo $phone['id'] ?></textarea>
                                        </div><br>
                                        <div class="col">
                                            <?php if ($phone['ph_quantity'] > 0) : ?>
                                            <button type="submit" class='btn btn-outline-success ' name="btnId"
                                                data-id="">Ad to
                                                Cart</button>
                                            <?php endif ?>
                                            <?php if ($phone['ph_quantity'] <= 0) : ?>
                                            <button disabled class='btn btn-outline-dark ' name="btnId" data-id="">Sold
                                                Out</button>
                                            <?php endif ?>

                                            <br><br>

                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>

            </div> <!-- container -->
            <div class="col-sm-2 " style="max-height: 100vh; height: 100vh; overflow:auto;">
                <h4 style="text-align: center;">Shopping Cart</h4>
                <?php foreach ($crt as $cart) : ?>
                <div class="card rounded-0 p-0 shadow-sm">
                    <?php echo '<img class="d-block w-100" style="max-width: 100%; height: auto;"
                         src="data:image/jpeg;base64,' . base64_encode($cart['ph_photo']) .  '">  </img>'; ?>

                    <div class="card-body text-center">
                        <h6 class="card-title"><?php echo $cart['name'] ?></h6>

                        <div class="row">
                            <div class="col">
                                <form method="post" action="del.php">
                                    <textarea name="id1" id="id" hidden><?php echo $cart['id'] ?></textarea>
                                    <button type="submit" class="btn btn-danger btn-block" name="btnId1"
                                        data-id="">-</button>
                                </form>


                            </div>
                            <label><?php echo $cart['number_of_phones'] ?></label>
                            <div class="col">
                                <form method="post" action="add.php">
                                    <textarea name="id" id="id" hidden><?php echo $cart['id'] ?></textarea>
                                    <button type="submit" class='btn btn-success btn-block' name="btnId2"
                                        data-id="">+</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>
                <h1 style="text-align: center;">Total $<?php echo number_format($result)  ?></h1>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start ">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: white">
            © 2021 Copyright:
            <a class="text-dark" href="#">AI-MOBILE</a>
        </div>
        <!-- Copyright -->


    </footer>


    <script>
    function SearchBtnPressed() {

        let searchBtn = document.querySelector('#searchbtn');
        let searchInput = document.querySelector('#search');
        let form = document.querySelectorAll('form');
        let carsArr = document.querySelectorAll('.phonearr')
        console.log(carsArr);

        for (let i = 0; i < carsArr.length; i++) {

            if (carsArr[i].childNodes[3].childNodes[1].textContent.toLowerCase().includes(searchInput.value
                    .toLowerCase())) {
                carsArr[i].style.display = 'block';

            } else {
                carsArr[i].style.display = 'none';
            }
        }
    }
    </script>
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></scrip>
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </scrip>
    <scrip src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </scrip>


    </script>





</body>

</html>