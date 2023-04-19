<?php
include './koneksi.php';

$id = $_GET['id'];
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $dell = "DELETE FROM literasi WHERE id = '$id'";
    $yuk = mysqli_query($con, $dell);
    if($yuk){
        header('location:../myliterasi/MyLiterasi.php');
    }
}
?>