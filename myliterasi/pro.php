<?php

include '../user/koneksi.php';
session_start();
$nama = $_SESSION['local']['username'];

if(isset($_POST['sbp'])){
    $judul = $_POST['judul'];
    $isi = $_POST['ckeditor'];
    
    $uplg = "INSERT INTO literasi (name, judul, isi) VALUE ('$nama', '$judul', '$isi')";
    $ghu = mysqli_query($con, $uplg);
    if($ghu){
        header('location:./MyLiterasi.php');
    }
}

?>