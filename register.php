<html>

<head>

    <title>Register Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body style="text-align: center; padding-left: 600px; margin: 60px; background-image: url(rig.png);">
    <h1 style="color: lightseagreen;">Register</h1>
    <form method="POST" action="reg.php" enctype="multipart/form-data">

        <div>

            <div>
                <label for="name" style="color: lightseagreen;">Name</label><br>
                <input type="text" id="name" name="name" placeholder="Your Name">

            </div>


            <div>

                <label for="Password" style="color: lightseagreen;">Password</label><br>
                <input type="password" name="pass" id="pass" placeholder="Your Password">
            </div>


            <div>
                <label for="email" style="color: lightseagreen;">Email</label><br>
                <input type="email" name="email" id="email" placeholder="Your Email">
            </div>

            <div>
                <label for="image" style="color: lightseagreen;">
                    Image Profile</label><br>
                <input type="file" name="image" id="image">

            </div>

            <div>
                <label for="Area" style="color: lightseagreen;">Area</label><br>
                <input type="text" name="area" id="area" placeholder="Your Country ">
            </div>
            <div>
                <label for="Number Tel" style="color: lightseagreen;">Tel</label><br>
                <input type="tel" name="tel" id="tel" placeholder="Your tel no">
            </div>
            <div><br>
                <button type="submit" class="btn btn-outline-primary" name="loginid">Rigister</button>
            </div>

            <div><br>
                <a href="./login.php" class="btn btn-outline-info btn-lg">
                    <p>Already a member ?</p> <span class="glyphicon glyphicon-log-out"></span> Sign in
                </a>
            </div>
        </div>

    </form>



</body>




</html>