<?php
include"koneksi.php";
$username = $_REQUEST['Nama'];
$password = $_REQUEST['Password'];

$mysqli = "INSERT INTO input_tabel(Nama, Password)
VALUES ('$username, $password)";

$result = mysqli_query($conn, $mysqli);

if($result) {
    echo"Data yang diinputkan berhasil";
} else {
    echo"Data gagal";
}
mysqli_close($conn);
?>