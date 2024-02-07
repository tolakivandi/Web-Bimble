<?php 
include("../inc/config.php");
session_start();
date_default_timezone_set("ASIA/JAKARTA");
$idUser = $_SESSION[""];
$time = date('H:i:s');
$date = date('Y/m/d');
$select = "SELECT * FROM absen WHERE id_user='$idUser' and tanggal='$date'";
$selects = mysqli_query($connection, $select);
$countRow = mysqli_num_rows($selects);
if($countRow <= 0) {
    $query = "INSERT INTO absen VALUES ('', '$idUser', '$time', '', '$date', '1')";
    $result = mysqli_query($connection, $query);
    if($result) {
        echo "<script>
                   alert('Absen Berhasil')
                   document.location.href = '../index.php' 
              </script>";
    } else {
        echo "<script>
                     alert('Absen Gagal')
              </script>";
    }
} else {
    echo "<script>
    alert('Anda Sudah Absen')
    document.location.href = '../index.php' 
    </script>";
}
?>