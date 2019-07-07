<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'tasla');

$email = $_POST['email'];
$password = $_POST['password'];

$encrypted_pass = sha1($password);

$selectQ = "SELECT * FROM user WHERE email = '$email' and password = '$encrypted_pass'";



$result = mysqli_query($con, $selectQ);
if (!$result) {
    echo (mysqli_error($con));
}

while ($row = mysqli_fetch_array($result))
{
        $d[] = $row['email'];
        $role = $row['role'];
        $d[] = $row['password'];
        var_dump($d);
}

if (mysqli_num_rows($result) == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['role'] = $role;
    if($role == 0){
        header('location:staff.php');
    }else{
        header('location:home.php');
    }
} else {
    $_SESSION['error'] = "User given data is Invalid.";
    header('location:login.php');
    echo ("Email has not found");
}
