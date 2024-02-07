<?php
session_start();
function register($data)
{
    $connection = mysqli_connect("localhost", "root", "", "bimble");
    $nama = $data["nama"];
    $id_kelas = $data["id_kelas"];
    $email = $data["email"];
    $password = md5($data["password"]);
    $gender = $data["gender"];
    $birthday = $data["birthday"];
    $telpon = $data["telpon"];

    $query = "INSERT INTO siswa (nama, id_kelas, email, password, gender, birthday, telpon) VALUES ('$nama',$id_kelas, '$email', '$password', '$gender', '$birthday', '$telpon')";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

function login($data)
{
    $connection = mysqli_connect("localhost", "root", "", "bimble");
    $email = $data["email"];
    $pass = md5($data["password"]);

    $query = "SELECT * FROM siswa WHERE email='" . $email . "' and password='" . $pass . "' limit 1";
    $hasil = mysqli_query($connection, $query);
    $data = mysqli_num_rows($hasil);

    if ($data > 0) {
        $key = mysqli_fetch_assoc($hasil);
        $_SESSION["id_siswa"] = $key["id_siswa"];
        $_SESSION["id_kelas"] = $key["id_kelas"];
        $_SESSION["nama"] = $key["nama"];
        $_SESSION["email"] = $key["email"];
        $_SESSION["birthday"] = $key["birthday"];
        $_SESSION["gender"] = $key["gender"];
        $_SESSION["telpon"] = $key["telpon"];

        header("Location:home.php");
    } else {
        echo "failed <a href ='../login.php'>login</a>";
    }
}
