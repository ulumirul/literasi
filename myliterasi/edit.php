<?php
include '../user/koneksi.php';

$id = $_GET['id'];

if(isset($_POST['sbl'])){
    $judul = $_POST['judul'];
    $isi = $_POST['ckeditor'];

    $upi = "UPDATE literasi SET judul = '$judul', isi = '$isi' WHERE id = '$id'";
    $pop = mysqli_query($con, $upi);
    if($pop){
        header('location:./MyLiterasi.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Edu+NSW+ACT+Foundation:wght@500&family=Fasthand&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8ead86d5ab.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/open-book-icon-education-symbol-flat-design-vector-illustration_53876-136267-removebg-preview.png">
    <title>Edit-My-Literasi</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="./MyLiterasi.php"><i class="fa-solid fa-arrow-left"></i></a></li>
            <li><i class="fa-solid fa-file-pen fa-bounce"></i></li>
        </ul>
        <div class="lut">Edit Literasi</div>
        <div class="pro"><i class="fa-solid fa-user"></i></div>
    </nav>
    <form action="" method="post">
        <ul>
            <li><input type="text" name="judul" placeholder="judul"></li>
            <li><textarea name="ckeditor" id="ckeditor" cols="30" rows="10" placeholder="isi" class="ckeditor"></textarea></li>
            <li><button type="submit" name="sbl">Edit</button></li>
        </ul>
    </form>
    <script src="../ckeditor/ckeditor.js"></script>
</body>
</html>