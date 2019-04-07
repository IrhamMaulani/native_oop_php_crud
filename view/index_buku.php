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

<?php
    $bukuController = new BukuController();
    $books = $bukuController->index();

?>

<?php foreach ($books as $book) {
    echo $book->Nama_Buku;
    echo" <br>";
}
?>

    
</body>
</html>

