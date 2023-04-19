<?php
session_start();
if(!isset($_SESSION['status'])){
    header('location:./home/index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Edu+NSW+ACT+Foundation:wght@500&family=Fasthand&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8ead86d5ab.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./img/open-book-icon-education-symbol-flat-design-vector-illustration_53876-136267-removebg-preview.png">
    <title>Literasi</title>
</head>
<body>
    <nav>
        <div class="bar1" id="bar1">
            <ul>
                <li><a href="./myliterasi/MyLiterasi.php">My Literasi</a></li>
                <li><a href="">Setting</a></li>
                <li><a href="./home/index.html">Home</a></li>
                <li><a href="./user/logout.php">Logout</a></li>
                <li><i class="fa-solid fa-envelope fa-beat-fade"></i></li>
            </ul>
        </div>
        <div class="bar" id="bar"><i class="fa-solid fa-bars"></i></div>
        <div class="rab" id="rab"><i class="fa-solid fa-xmark"></i></div>
        <div class="well"><h4>Welcome <?= $_SESSION['local']['name']?></h4></div>
        <div class="pro"><i class="fa-solid fa-user"></i></div>
    </nav>
    <div class="bort" id="bar3">
            <ul>
                <li><a href="./myliterasi/MyLiterasi.php">My Literasi</a></li>
                <li><a href="">Setting</a></li>
                <li><a href="./home/index.html">Home</a></li>
                <li><a href="./user/logout.php">Logout</a></li>
                <!-- <li><i class="fa-solid fa-envelope fa-beat-fade"></i></li> -->
            </ul>
    </div>
    <div class="isi">

        <?php

            include './user/koneksi.php';

            $red = "SELECT * FROM literasi order by id desc";
            $tre = mysqli_query($con, $red);
            while($r3 = mysqli_fetch_array($tre)){
                $judul = $r3['judul'];
                $id = $r3['id'];
                $creat = $r3['create_at'];

        ?>

        <div class="conten">
            <a href="./myliterasi/viw.php?id=<?=$id;?>"><div class="layer1"><img src="./img/front-view-stack-books-with-one-open-removebg-preview.png" alt=""></a></div>
            <div class="layer2">
                <h4><?=$judul;?></h4>
                <p><?=$creat;?></p>
            </div>
        </div>
        <?php } ?>
    </div>
    <footer>
        <p>Power By Code Id</p>
    </footer>
</body>
<script src="./jyu.js"></script>
</html>