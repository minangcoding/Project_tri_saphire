<?php 
// koneksi database
include '../database/config.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$foto = $_POST['foto'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into tblbanner values('','$nama','$foto')");
 

 
?>