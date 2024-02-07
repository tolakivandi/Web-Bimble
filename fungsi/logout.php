<?php
$connection = mysqli_connect("localhost", "root", "", "bimble");
session_start();
date_default_timezone_set("ASIA/JAKARTA");
$time = date('H:i:s');
$date = date('Y/m/d');
$idUser = $_SESSION["id_siswa"];
$query = "UPDATE absensi SET jam_keluar='$time' WHERE id_siswa='$idUser' and tanggal='$date'";
$update = mysqli_query($connection, $query);
session_unset();
session_destroy();
header('Location:../login.php');
