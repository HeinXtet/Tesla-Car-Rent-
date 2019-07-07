<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'tasla');

$email = $_POST['email'];
$password = $_POST['password'];

$selectQ = "SELECT * FROM user WHERE email = '$email'";

$result = mysqli_query($con, $selectQ);
if (!$result) {
    echo (mysqli_error($con));
}

$encrypted_pass = sha1($password);

if (mysqli_num_rows($result) == 1) {
    echo ("email already exist");
    $_SESSION['error'] = "email is already exist";
    header("location:register.php");
} else {
    $insertQ = "insert into user (id,email,password,role) values (0,'$email','$encrypted_pass',1)";
    mysqli_query($con, $insertQ);
    echo ("register successful");
    $_SESSION['email'] = $email;
    header("location:home.php");
}
