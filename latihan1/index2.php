<?php 
    // if($_GET['nama'] == null){
    // header("Location: index.php");
    // };
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello <?= $_GET['nama'] ?>!</h1>
    <a href="http://localhost/htdoc/php/latihan1/index.php?">Kembali</a>
</body>

</html>