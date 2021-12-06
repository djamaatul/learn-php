<?php
$database = mysqli_connect("localhost", "djamaatul", "qewadsws", "latihan1");
$data =  mysqli_query($database, 'SELECT id,username,email FROM user');
$username = mysqli_fetch_all($data);
var_dump($username);
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
    <h1>USER : </h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- <tr>
            <th>id</th>
            <th>nama</th>
            <th>email</th>
        </tr> -->
        <tr>
            <?php for ($j = 0; $j < count($username); $j++) : ?>
        <tr>
            <?php for ($i = 0; $i < count($username[$j]); $i++) : ?>
                <td><?= $username[$j][$i] ?></td>
            <?php endfor ?>
        </tr>
    <?php endfor ?>
    </tr>

    </table>
    <a href="index.php">Logout</a>
</body>

</html>