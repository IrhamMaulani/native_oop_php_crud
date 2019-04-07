<?php require_once("../controller/BukuController.php");?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>

    <h1>Detail Buku</h1>

    <?php $ids = $_GET['id'];
    ?>

    <?php
    $bukuController = new BukuController();
    $book = $bukuController->show(1);
?>

    <?php 
    echo $book->Kode_Buku;
    echo" <br>";
    echo $book->Nama_Buku;
    echo" <br>";
    echo $book->Harga_Buku;
    echo" <br>";
    echo $book->Pengarang_Buku;
?>


</body>

</html>