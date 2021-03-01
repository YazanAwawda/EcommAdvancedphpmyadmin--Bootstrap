<html>

<head>

    <title>Log in Page </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body style="text-align: center; padding-left: 220px; margin: 100px;   background-image: url('log.png');">

    <form method="POST">
        <div>
            <h1 style="color: lightseagreen;">Log in</h1>

            <div>
                <label for="name" style="color: lightseagreen;">Name</label><br>
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>
            <div>


                <label for="password" style="color: lightseagreen;">Password</label><br>
                <input type="password" name="pass" id="pass" placeholder="Enter your password ">
            </div>
            <div><br>
                <button type="submit" class="btn btn-outline-primary" name="loginid"><a href="./index.php"
                        class="btn">Log IN </a></button>

            </div>

            <div> <br>
                <button type="button" class="fa fa-user-plus btn btn-outline-success" aria-hidden="true">
                    <a href="./register.php" class="btn">
                        Register Now
                    </a>
                </button>

            </div>

        </div>
        </div>
    </form>



</body>



</html>