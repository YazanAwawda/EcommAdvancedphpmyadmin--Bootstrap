<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


    <!-- Modal -->
    <div class="modal fade" id="addmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Phone data </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="insertcode.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Brand</label>
                            <input name="brand" type="text" class="form-control" placeholder="Brand">
                        </div>
                        <div class="form-group">
                            <label>Phone Description</label>
                            <input name="ph_description" type="text" class="form-control" placeholder="Description">
                        </div>

                        <div class="form-group">
                            <label>Network Technologies</label>
                            <input name="network_tech" type="text" class="form-control" placeholder="NetworkTech">
                        </div>
                        <div class="form-group">
                            <label>Network 2g</label>
                            <input name="network_2g" type="text" class="form-control" placeholder="network_2g">
                        </div>

                        <div class="form-group">
                            <label>Network 3g</label>
                            <input name="network_3g" type="text" class="form-control" placeholder="network_3g">
                        </div>

                        <div class="form-group">
                            <label>Network 4g</label>
                            <input name="network_4g" type="text" class="form-control" placeholder="network_4g">
                        </div>

                        <div class="form-group">
                            <label>Image 1</label>
                            <input name="ph_photo" type="file" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Price</label>
                            <input name="price" type="number" class="form-control" placeholder="price">
                        </div>


                        <div class="form-group">
                            <label>Image 2</label>
                            <input name="ph2" type="file" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Image 3</label>
                            <input name="ph3" type="file" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Phone Quantity</label>
                            <input name="ph_quantity" type="number" class="form-control" placeholder="Num">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="insertdata">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ################################# -->
    <div class="modal fade" id='editmodal' tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Phone data </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="updatecode.php" method="POST">

                    <div class="modal-body">


                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" id="name" type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Brand</label>
                            <input name="brand" id="brand" type="text" class="form-control" placeholder="Brand">
                        </div>
                        <div class="form-group">
                            <label>Phone Description</label>
                            <input name="ph_description" id="ph_description" type="text" class="form-control"
                                placeholder="Description">
                        </div>

                        <div class="form-group">
                            <label>Network Technologies</label>
                            <input name="network_tech" id="network_tech" type="text" class="form-control"
                                placeholder="NetworkTech">
                        </div>
                        <div class="form-group">
                            <label>Network 2g</label>
                            <input name="network_2g" id="network_2g" type="text" class="form-control"
                                placeholder="network_2g">
                        </div>

                        <div class="form-group">
                            <label>Network 3g</label>
                            <input name="network_3g" id="network_3g" type="text" class="form-control"
                                placeholder="network_3g">
                        </div>

                        <div class="form-group">
                            <label>Network 4g</label>
                            <input name="network_4g" id="network_4g" type="text" class="form-control"
                                placeholder="network_4g">
                        </div>

                        <div class="form-group">
                            <label>Image 1</label>
                            <input name="ph_photo" type="file" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Price</label>
                            <input name="price" id="price" type="number" class="form-control" placeholder="price">
                        </div>


                        <div class="form-group">
                            <label>Image 2</label>
                            <input name="ph2" type="file" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Image 3</label>
                            <input name="ph3" type="file" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Phone Quantity</label>
                            <input name="ph_quantity" id="ph_quantity" type="number" class="form-control"
                                placeholder="Num">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="updatedata ">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ################################# -->
    <!-- ################################# -->
    <div class="modal fade" id='deletemodal' tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="deletcode.php" method="POST">

                    <div class="modal-body">
                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4>Do you want delete this data ?</h4>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                        <button type="submit" class="btn btn-primary" name="deletedata ">Yes ! Delete it.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ################################# -->




    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2>PHP CRUD </h2>

                <div class="card">
                    <div class="card-body">

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmodel">
                            Add Data
                        </button>




                    </div>
                </div>
            </div>

            <div class="card">

                <div class="card-body">





                    <?php
                    $cn = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($cn, 'phoneshop');

                    $q = "SELECT * FROM `ai-mobile`";


                    $query_run = mysqli_query($cn, $q);
                    ?>

                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">name</th>
                                <th scope="col">brand</th>
                                <th scope="col">decription</th>
                                <th scope="col">NetworkTech</th>
                                <th scope="col">Netw ork_2g</th>
                                <th scope="col">Network_3g</th>
                                <th scope="col">Network_4g</th>
                                <th scope="col">PhonePhoto</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Edit</th>
                                <th scope="col">DELETE</th>


                            </tr>
                        </thead>
                        <?php
                        if ($query_run) {

                            foreach ($query_run as $row) {

                        ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['brand']; ?> </td>
                                <td> <?php echo $row['ph_description']; ?> </td>
                                <td> <?php echo $row['network_tech']; ?> </td>
                                <td> <?php echo $row['network_2g']; ?> </td>
                                <td> <?php echo $row['network_3g']; ?> </td>
                                <td> <?php echo $row['network_4g']; ?> </td>
                                <td> <?php echo $row['price']; ?> </td>
                                <td> <?php echo $row['ph_quantity'];  ?> </td>
                                <td> <button class="btn btn-success editbtn ">Edit</button></td>
                                <td> <button class="btn btn-danger  ">DELETE</button></td>

                            </tr>

                        </tbody>
                        <?php
                            }
                        } else {
                            echo "No RECORD FOUND";
                        }
                        ?>

                    </table>

                </div>

            </div>

        </div>
    </div>

    <script>
    $(document).ready(function() {

        $('.deletebtn').on('click', function() {

            $('.deletebtn').model('show');


            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();


            }).get();
            console.log(data);
            $('#delete_id').val(date[0]);
            $('#name').val(date[1]);
            $('#brand').val(date[2]);
            $('#ph_description').val(date[3]);
            $('#network_tech').val(date[4]);
            $('#network_2g').val(date[5]);
            $('#network_3g').val(date[6]);
            $('#network_4g').val(date[7]);
            $('#price').val(date[8]);
            $('#ph_quantity').val(date[9]);
        });

    });
    </script>

    <script>
    $(document).ready(function() {

        $('.editbtn').on('click', function() {

            $('.editbtn').model('show');


            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();


            }).get();
            console.log(data);
            $('#update_id').val(date[0]);
            $('#name').val(date[1]);
            $('#brand').val(date[2]);
            $('#ph_description').val(date[3]);
            $('#network_tech').val(date[4]);
            $('#network_2g').val(date[5]);
            $('#network_3g').val(date[6]);
            $('#network_4g').val(date[7]);
            $('#price').val(date[8]);
            $('#ph_quantity').val(date[9]);
        });

    });
    </script>

</body>

</html>