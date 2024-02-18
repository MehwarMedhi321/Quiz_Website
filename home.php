<?php
session_start();


$con = mysqli_connect('localhost', 'root', '', 'quizdb') or die("Couldn't Connect");


$name = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM `signin` WHERE name = '$name' && password = '$password'";


$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if ($num == 1) {

    $_SESSION['username'] =  $name;
    header('location:paper.php');
} else {

    header('location:login.php');
}
?>