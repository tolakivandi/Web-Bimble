<?php
$connection = mysqli_connect("localhost", "root", "", "bimble");
function absen($id)
{
    date_default_timezone_set("ASIA/JAKARTA");
    global $connection;
    $jam = date('H:i:s');
    $tanggal = date('Y/m/d');
    $result = mysqli_query($connection, "SELECT * FROM absensi WHERE id_siswa=$id AND tanggal='$tanggal'");

    if (mysqli_num_rows($result) < 1) {
        $query = "INSERT INTO absensi (id_siswa,jam_masuk,tanggal,status_absen) VALUES ($id, '$jam', '$tanggal', '1' )";
        mysqli_query($connection, $query);
        echo "
            <script>
                alert('absen berhasil');
                document.location.href = './home.php';
            </script>
            ";
        return mysqli_affected_rows($connection);
    } else {
        echo "
            <script>
                alert('anda sudah absen hari ini');
                document.location.href = './home.php';
            </script>
            ";
    }
}
