<?php
session_start();
if(!isset($se['status'])){
    header('locatuon:../home/index.html');
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
    <link rel="icon" href="../img/open-book-icon-education-symbol-flat-design-vector-illustration_53876-136267-removebg-preview.png">
    <title>Myliterasi</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php"><i class="fa-solid fa-arrow-left"></i></a></li>
            <li><i class="fa-solid fa-book-open-reader fa-beat"></i></li>
        </ul>
        <div class="lut">My Literasi</div>
        <div class="pro"><i class="fa-solid fa-user"></i></div>
    </nav>
    <div class="tbl"><a href="./addliterasi.html"><i class="fa-solid fa-plus"></i></a></div>
    <div class="luti">My Literasi</div>
    <div class="comy">
        <?php

                include '../user/koneksi.php';

                $red = "SELECT * FROM literasi order by id desc";
                $tre = mysqli_query($con, $red);
                while($r3 = mysqli_fetch_array($tre)){
                    $judul = $r3['judul'];
                    $id = $r3['id'];
                    $creat = $r3['create_at'];

        ?>
        <div class="conten">
            <div class="layer1"><a href=""><img src="../img/front-view-stack-books-with-one-open-removebg-preview.png" alt=""></a></div>
            <div class="layer2">
                <h4><?=$judul;?></h4>
                <p><?=$creat;?></p>
            </div>
            <div class="lob">
                <ul>
                    <li><a href="./viw.php?id=<?=$id;?>"><button>view</button></a></li>
                    <li><a href="./edit.php?id=<?=$id;?>"><button>edit</button></a></li>
                    <li><a href="../user/delete.php?id=<?=$id;?>"><button>delete</button></a></li>
                </ul>
            </div>
        </div>
        <?php } ?>
    </div>
    <footer>
        <p>Power By Code Id</p>
    </footer>
</body>
</html>