<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

$con = mysqli_connect('localhost', 'root', '', 'quizdb') or die("Couldn't Connected");

?>
<!doctype html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <link rel="stylesheet" href="./paper.css">
    <title>Login Form</title>
</head>

<body>
    <nav class="navbar navbar-inverse  bg-success ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="./login.php"><img src="../CRUD/./img/./PHP_logo.png" alt="" width="6%"></a> <a class="navbar-brand btn btn-primary" href="./logout.php" style="color: white; float:right; font-size:28px; margin-right:3%; border-radious:8px;">LogOut</a>
            </div>
        </div>
    </nav>



    <div class="container2 mb-5 mt-3 ">
        <br>
        <h1 class="text-center text-success mb-3 " style="font-weight: 600; font-size:3rem">Mohd Hadi Web Developer Quiz</h1>

        <h1 class="text-center" style="font-weight: 600; font-size:3rem">Welcome <?php echo $_SESSION['username']; ?> </h1>

        <div class="col-lg-8 m-auto d-block mt-5">
            <div class="card  text-center">
                <h5 class="card-header"> <b>Welcome <?php echo $_SESSION['username']; ?> You have To Select Only one out Of 4. Best Of Luck..!</b></h5>
            </div><br>
            <form action="check.php" method="post">

                <?php
                for ($i = 1; $i < 6; $i++) {
                    $sql = "SELECT * FROM `question` WHERE aid = $i";
                    $query = mysqli_query($con, $sql);
                    $id = 0;
                    while ($row = mysqli_fetch_array($query)) {
                        $id = $id + 1;
                ?>

                        <div class="card">

                            <h5 class="card-header"><?php echo $i,  "   ", $row['question']  ?> </h5>



                            <?php
                            $sql = "SELECT * FROM `answers` WHERE ans_id = $i";
                            $query = mysqli_query($con, $sql);
                            while ($rows = mysqli_fetch_array($query)) {
                            ?>

                                <div class="card-body">
                                    <input type="radio" name="quizCheck[<?php echo $rows['ans_id'];  ?>]" value="<?php echo $rows['adi'] ?>" style="cursor:pointer">
                                    <?php echo $rows['answer'] ?>
                                </div>

                    <?php
                            }
                        }
                    }

                    ?>


                    <button type="submit" class="btn btn-success m-auto d-block  w-25 mb-3" name="submit" style="font-size: 20px;">
                        Submit
                    </button>

            </form>
        </div>
    </div>
    </div><br><br>


    <div class="link text-center">
        <h4>© 2024 MohdHadi72 GitHub</h4>

        <div class="icons m-1" style="font-size: 23px;">
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-telegram"></i>
            <i class="fa-brands fa-github"></i>
        </div>


    </div>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>