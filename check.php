<?php
$con = mysqli_connect('localhost', 'root', '', 'quizdb') or die("couldn't connected");

session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

ini_set('display_errors', 0);

$delete = false;



if (isset($_GET['delete'])) {

    $sno = $_GET['delete'];

    $sql = "DELETE FROM `user` WHERE `user`.`uid` = $sno";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $delete = true;
    }
}


?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <link rel="stylesheet" href="./paper.css">
    <title>Result Form</title>
</head>



<body>





    <style>


    </style>

    <nav class="navbar navbar-inverse  bg-success ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="./paper.php"><i class="fa-solid fa-left-long" style="font-size: 22px; padding-left:1%; padding-right:2%; color:white; "></i></a> <a href="./login.php"><img src="../CRUD/./img/./PHP_logo.png" alt="" width="6%"></a>
            </div>
        </div>
    </nav>

    <?php
    if ($delete) {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <strong>Message!</strong> Your Result Have been Delete Successful.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    }


    ?>



    <div class="containerr text-center">
        <br><br>
        <h1 class="text-center text-success animation" style="font-weight: 600;">Mohd Hadi Developer Quiz</h1>
        <h1 class="text-center" style="font-weight: 600; font-size:3rem">Welcome <?php echo $_SESSION['username']; ?> </h1>
        <br><br>

        <form action="/paper/check.php" method="post">
            <div class="col-lg-8 d-block m-auto mt-3">
                <table class="table text-center table-border table-hover ">
                    <tr>
                        <th colspan=" 2" class="bg-dark">

                            <?php
                            $sql = "SELECT * FROM `question`";
                            $result = mysqli_query($con, $sql);
                            $sno = 0;
                            $sno = $sno + 1;
                            echo  "<h1 class='text-white'>Result
                                    <button class='delete  btn btn-success mt-2' style='float: right;' id=" . $sno['sno'] . ">remove</button></h1>";
                            ?>
                        </th>

                    </tr>
                    <tr>
                        <td style="font-size: 24px;"> <b>Questions Attemped</b></td>

                        <?php
                        $result = 0;
                        if (isset($_POST['submit'])) {
                            if (!empty($_POST['quizCheck'])) {
                                $count_add = count($_POST['quizCheck']);
                        ?>
                                <td style="font-size: 23px;">
                                    <?php
                                    echo "<b>Out Of 5, You have attempt " . $count_add . " Question</b>";
                                    ?>
                                </td>
                    </tr>
                    <?php
                                $select = $_POST['quizCheck'];

                                $q1 = "SELECT * FROM `question`";
                                $resultmain = mysqli_query($con, $q1);

                                $i = 1;
                                while ($row = mysqli_fetch_array($resultmain)) {
                                    $flg = $row['ans_id'] == $select[$i];

                                    if ($flg) {
                                        $result++;
                                    } else {
                                    }

                                    $i++;
                                }
                    ?>

                    <tr style="font-size: 24px;">
                        <td style="font-size: 24px;"><b>Your Total Score</b></td>
                        <td colspan="2">
                    <?php
                                echo "<b>Your Socre is  " . $result . ".</b>";
                            } else {
                                echo '<h3>Pleaser Select Attlest One Options ' . $_SESSION['username'] . "</h3>";
                            }
                        }
                    ?>
                        </td>
                    </tr>
                    <?php

                    $name = $_SESSION['username'];
                    $final = "INSERT INTO `user` ( `username`, `totalques`, `answercorrect`) VALUES ('$name', '5', '$result')";

                    $qury = mysqli_query($con, $final);

                    ?>
                </table>
        </form>


    </div>

    </div>
    <div class="text-center">
        <a href="./login.php"><input type="submit" class="btn btn-success w-25 " value="Log Out"></a>
    </div>


    <div class="link text-center" style="margin-top: 12%;">
        <h4>© 2024 MohdHadi72 GitHub</h4>

        <div class="icons m-1" style="font-size: 23px;">
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-telegram"></i>
            <i class="fa-brands fa-github"></i>
        </div>


    </div>
    <script>
        deletes = document.getElementsByClassName("delete");
        Array.from(deletes).forEach((element) => {

            element.addEventListener("click", (e) => {
                sno = e.target.id.substr(1, )

                if (confirm("You Are Agree For delete this Result!")) {
                    console.log("Yes");
                    window.location = `/paper/check.php?delete=${sno}`;
                } else {
                    console.log("Now")
                }
            });
        });
    </script>



    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>