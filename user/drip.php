<?php

include './koneksi.php';
session_start();

if(isset($_POST['logi'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $logint = "SELECT * FROM user_login WHERE username = '$user'";
    $rtu = mysqli_query($con, $logint);
    if(mysqli_num_rows($rtu) > 0){
        $r2 = mysqli_fetch_array($rtu);
        $_SESSION['status'] = true;
        $_SESSION['local'] = $r2;
        password_verify($pass, $r2['password']);
        header('location:../index.php');
    }else{
        echo "<script>alert('login salah'); window.location = './register.html';</script>";
        return false;
    }
};

if(isset($_POST['regi'])){
    $name = $_POST['name'];
    $uses = $_POST['username'];
    $pas = $_POST['password'];
    $pas2 = $_POST['password1'];
    $email = $_POST['email'];

    if($pas != $pas2){
        echo "<script>alert('password tidak sama'); window.location = './register.html';</script>";
        return false;
    }

    $readi = "SELECT username FROM user_login WHERE username = '$uses'";
    $yup = mysqli_query($con, $readi);
    if(mysqli_num_rows($yup) > 0){
        echo "<script>alert('username sudah ada'); window.location = './register.html';</script>";
        return false;
    }

    $password = password_hash($pas, PASSWORD_DEFAULT);

    $ince = "INSERT INTO user_login (name, username, password, email) VALUE ('$name', '$uses', '$password', '$email')";
    $hui = mysqli_query($con, $ince);
    if($hui){
        header('location:./register.html');
    }
}

?>