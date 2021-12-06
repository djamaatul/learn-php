<?php
$database = mysqli_connect("localhost", "djamaatul", "qewadsws", "latihan1");
$table = mysqli_query($database, 'SELECT * FROM user');
$index = 0;
// while($data = mysqli_fetch_row($table)){
//     $datas[$index] = $data;
//     $index++;
// }
// foreach($datas as $e){
//     var_dump($e);
//     echo '<br>';
// }

$datas = mysqli_fetch_all($table);  
// for ($i=0; $i < count($datas); $i++) { 
//     var_dump($datas[$i]);
//     echo '<br>';
// }
foreach ($datas as $key => $value) {
    var_dump($value);
    echo '<br>';
}
?>
