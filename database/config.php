<?php
// koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "tri";

$koneksi = mysqli_connect($host,$user,$password,$database);
if(! $koneksi){
    echo "Koneksi gagal";
}

?>