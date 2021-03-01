<?php
require('ph.php');
require('getPH.php');

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

</head>

<body>

    <div class="container-fluied">
        <div class="row">
            <div class="col-sm-2">
                <aside class="sidebar">
                    <nav class="nav" style="text-align: center;">

                        <ul>
                            <div class="sidebar-header">
                                <div class="user-pic"> <br><br><br><br><br><br>
                                    <img class="img-responsive img-rounded" src="./iic.jpg" alt="User picture">
                                </div>
                                <div class="user-info"><br>
                                    <p style="text-align: center;"> <span class="user-name">Yazan
                                            <strong>Awawda</strong>
                                        </span><br>
                                        <span class=" user-role">Administrator</span>
                                        <br>
                                    </p>

                                </div>
                            </div>

                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <li class="active"><a href="mailto: Yazanmah88@gmail.com">Yazanmah88@gmail.com</a></li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <li><a href="#">0568635802</a></li>
                            <a href="./login.php" class="btn btn-outline-info btn-lg">
                                <span class="glyphicon glyphicon-log-out">Log out</span>
                            </a>
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
                        *
                        <form class="form-inline my-2 my-lg-0">
                            <div>
                                <input onkeyup=" SearchBtnPressed()" type="text" id="search" name="search"
                                    placeholder="Search...">
                                <button class="btn btn-outline-success my-2 my-sm-0" id="submit"
                                    name="submit">Search</button>
                            </div>
                        </form>
                        <!--   <div>
                    <//?php// foreach ($crt as $cart) : ?>
                    <p> <//?php echo $cart['name']; ?> </p>


                    <//?php //endforeach  ?>
                </div> -->
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
                    <h1>Our new category</h1>
                </div>


                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <?php foreach ($phones as $phone) : ?>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="card phonearr rounded-0 p-0 shadow-sm">
                            <?php echo '<img class="d-block w-100" style="max-width: 100%; height: auto;"
                         src="data:image/jpeg;base64,' . base64_encode($phone['ph_photo']) .  '">  </img>'; ?>

                            <div class="card-body text-center">
                                <h6 class="card-title"><?php echo $phone['name'] ?></h6>
                                <form method="post" action="crt.php">

                                    <div class="row">
                                        <div class="col">

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Quantity
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="#"><?php echo $phone['ph_quantity'] ?></a>
                                                </div>
                                            </div>


                                            <textarea name="id" id="id" hidden><?php echo $phone['id'] ?></textarea>
                                        </div>
                                        <div class="col">
                                            <button type="submit" class='btn btn-success btn-block' name="btnId"
                                                data-id="">Ad to Cart</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>

            </div> <!-- container -->
            <div class="col-sm-2">
                <h1 style="font-size: 35px;">Shopping Cart</h1>
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


</body>

</html>