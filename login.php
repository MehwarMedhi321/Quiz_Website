<!doctype html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <title>Login Form</title>
</head>

<body>
    <nav class="navbar navbar-inverse  bg-success ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color: white; margin-bottom:2%;"><img src="../CRUD/./img/./PHP_logo.png" alt="" width="6%"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                </ul>

            </div>
        </div>
    </nav>
    <h1 class="text-center mt-5 mb-5" style="font-size: 3rem; font-weight:700;">
        Welcome To Quiz World !
    </h1>

    <div class="container " style="margin-top: -4%;">

        <div class="box form-box">
            <h1>Login</h1>
            <form action="./Home.php" method="post">
                <div class="filed input">
                    <label for="name">User Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Name" required>
                </div>
                <div class="filed input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" required>
                </div>
                <div class="filed button">
                    <input type="submit" value="Login" name="submit" class="btn btn-success" required>
                </div>
                <div class="link">
                    Don't Have Account ? 👉
                </div>
            </form>

        </div>


        <div class="box form-box">
            <h1>sign Up</h1>
            <form action="./registration.php" method="post">
                <div class="filed input">
                    <label for="name">User Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Name" required>
                </div>
                <div class="filed input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" required>
                </div>
                <div class="filed button">
                    <input type="submit" value="Sing Up" name="submit" class="btn btn-success" required>
                </div>
                <div class="link">
                    👈 Have an Account ?
                </div>
            </form>

        </div>
    </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>