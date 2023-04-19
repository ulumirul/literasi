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
    <title>View-literasi</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php"><i class="fa-solid fa-arrow-left"></i></a></li>
            <li><i class="fa-solid fa-book-open-reader fa-beat"></i></li>
        </ul>
        <div class="lut">View</div>
        <div class="pro"><i class="fa-solid fa-user"></i></div>
    </nav>
    <?php

        include '../user/koneksi.php';

        $id = $_GET['id'];

        $readin = "SELECT * FROM literasi WHERE id = '$id'";
        $y5 = mysqli_query($con, $readin);
        $t2 = mysqli_fetch_array($y5);

    ?>
    <div class="isi">
        <h3><?=$t2['judul'];?></h3>
        <p><?=$t2['isi']?></p>
    </div>
</body>
</html>