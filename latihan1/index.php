<?php
if (isset($_POST["submit"])) {
    if ($_POST["user"] == "dika" && $_POST["password"] == "qewadsws") {
        echo "betul";
        header("Location: login.php");
        exit;
    } else {
        echo "else";
        header("Location: index.php?error=true");

        exit;
    }
} else {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        padding: 0px;
        margin: 0px;

    }

    header table {

        border-collapse: collapse;
    }

    td {
        padding: 5px;
    }

    table,
    tr,
    td {
        border: 0px;
    }
    .sidee{
        background-color: whitesmoke;
    }
    input{
        /* background-color: gray; */
    }

    header {
        width: 100%;
        padding: 10px;
        padding-bottom: 20px;
        background-color: lightcoral;
        color: white;
        box-shadow: 0px 10px gray;
    }

    .side {
        background-color: gray;
    }
</style>

<body>
    <header>
        <form action="" method="post">

            <table>
                <tr>
                    <td class="side"> Masukan nama </td>
                    <td class="side">:</td>
                    <td class="sidee"><input type="text" name="user"></td>
                </tr>
                <br>
                <tr>
                    <td class="side"> Masukan Password </td>
                    <td class="side">:</td>
                    <td class="sidee"><input type="password" name="password"></td>
                    <td><button name="submit" type="submit">Kirim!</button></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>
                        <?php
                        if ($_GET['error'] == "true") {
                            echo "password salah!";
                        }
                        ?>
                    </td>
                    <td></td>
                </tr>
            </table>
        </form>

    </header>


    <script>

    </script>


    <!-- <script>
        const teks = document.getElementById('teks');
        const tombol = document.getElementById('tombol');
        let data = '';

        teks.addEventListener('change', () => {
            data = teks.value;
        })

        tombol.addEventListener('click', () => {
            location.replace('http://localhost/htdoc/php/latihan1/index2.php?nama=' + data);
        })
    </script> -->
</body>

</html>