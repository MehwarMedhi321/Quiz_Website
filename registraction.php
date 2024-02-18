<?php
session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root', '', 'quizdb') or die("Couldn't Connect");


$name = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM `signin` WHERE name = '$name' && password = '$password'";


$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "duplicate data";
} else {
    $qury = "INSERT INTO `signin` (`name`, `password`) VALUES ( '$name', '$password');";
    mysqli_query($con, $qury);
}
?>