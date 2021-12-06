<?php 
$database = mysqli_connect('localhost','djamaatul','qewadsws','latihan2');

// $datas = [];
// while($data = mysqli_fetch_assoc($query)){
//     $datas[(int)$data['id']] = $data;
//     // echo $data["id"];
// }

if(isset($_GET["getnama"])){
    global $database;
    $datas = [];
    $current = 0;
    if($_GET["getnama"] == 'all'){
        $query = mysqli_query($database, "SELECT * FROM users");
    }else{
        $query = mysqli_query($database, "SELECT * FROM users where user = '".$_GET['getnama']."'");
    }
    while($data = mysqli_fetch_object($query)){
        $datas[$current] = $data;
        $current++;
    }
    $json = json_encode($datas);
    // return $json;
    var_dump($json);
}
// foreach ($data as $key => $value) {
//     echo $value["id"],". ";
//     echo $value["user"]," ";
//     echo $value["password"]," ";
//     echo  '<br>';
// }

?>