<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "shigal";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
     //cek koneksi
    die("tidak bisa konek ke database");
}   
$nama = $_POST['nama'];
$pilian = $_POST['pilian'];

mysqli_query($koneksi,"insert into daftarmenu (nama, pilihan) values('$nama','$pilian')");

header("Location:SUCCES.php")

?>