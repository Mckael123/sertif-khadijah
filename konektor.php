<?php
$host= "localhost";
$user = "root";
$pass = "";
$database = "data_sertif"; //nama data base

$koneksi = mysqli_connect($host,$user,$pass,$database);
if ($koneksi){
    $open= mysqli_select_db($koneksi,$database);
    if(!$open){
        echo "database tidak dapat terhubung";
    }
}
else{
    echo "mysqli tidak terhubung";
}

?>