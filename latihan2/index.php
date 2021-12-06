<?php
$database = mysqli_connect("localhost", "djamaatul", "qewadsws", "latihan1");
$table = mysqli_query($database, 'SELECT username,password FROM user');
$data = mysqli_fetch_all($table, MYSQLI_NUM);

if (isset($_POST["submit"])) {
    for ($i = 0; $i < count($data); $i++) {
        // echo $data[$i][0]," dan ",$data[$i][1],", ";
        if ($_POST["username"] == $data[$i][0] && $_POST["password"] == $data[$i][1]) {
            // echo $_POST;
            header('Location: dashboard.php');
            exit;
        } else {
            header('Location: ?error');
            echo "password salah!";
        }
    }
}
if (isset($_POST["regis_submit"])) {
    global $database;
    $username = $_POST["regis_username"];
    $password = $_POST["regis_password"];
    $kirim =  mysqli_query($database, "INSERT INTO user (id,username,password,email) VALUES (NULL,'$username','$password','')");
    var_dump($_POST);
    echo '<br>';
    var_dump(mysqli_error($database));
    if ($kirim == 1) {

        echo "<script>alert('sucess')</script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0px;
            padding: 10px;
        }
    </style>
</head>

<body>

    <?php if (isset($_GET["register"])) { ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="regis_username">Username :</label></td>
                    <td><input type="text" name="regis_username" require></td>
                </tr>
                <tr>
                    <td><label for="regis_password">Password :</label></td>
                    <td><input type="password" name="regis_password" require></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button name="regis_submit" type="ubmit">Daftar!</button></td>
                </tr>
                <tr>
                    <td><a href="index.php">login</a></td>
                </tr>
            </table>
        </form>
    <?php } else { ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="username">Username :</label></td>
                    <td><input type="text" name="username" require></td>
                </tr>
                <tr>
                    <td><label for="password">Password :</label></td>
                    <td><input type="password" name="password" require></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button name="submit" type="submit">Login!</button></td>
                </tr>
                <tr>
                    <td><a href="index.php?register">daftar</a></td>
                    <?php if (isset($_GET["error"])) : ?>
                        <td style="color:red;font-style: italic;text-align: center;"> password salah !</td>
                    <?php endif ?>
                </tr>
            </table>
        </form>

    <?php } ?>
</body>

</html>