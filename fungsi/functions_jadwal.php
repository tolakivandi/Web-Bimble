<?php

$connection = mysqli_connect("localhost", "root", "", "bimble");

// QUERY TABLE DI DB
function query($connection, $query)
{
    $result = mysqli_query($connection, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// TAMBAH MAHASISWA
function add($data)
{
    global $connection;
    $id_mapel = htmlspecialchars($data["id_mapel"]);
    $id_kelas = htmlspecialchars($data["id_kelas"]);
    $jam = htmlspecialchars($data["jam"]);
    $hari = htmlspecialchars($data["hari"]);

    $query = "INSERT INTO jadwal (id_mapel, id_kelas, jam, hari) VALUES ('$id_mapel', '$id_kelas', '$jam', '$hari')";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}

// update data 
function update($connection, $data)
{
    $id = $data["id"];
    $id_mapel = htmlspecialchars($data["id_mapel"]);
    $id_kelas = htmlspecialchars($data["id_kelas"]);
    $jam = htmlspecialchars($data["jam"]);
    $hari = htmlspecialchars($data["hari"]);

    $query = "UPDATE jadwal SET
                id_mapel = '$id_mapel',
                id_kelas = '$id_kelas',
                jam = '$jam',
                hari = '$hari'
                WHERE id_jadwal = $id 
                ";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}

function delete($id)
{
    global $connection;
    $query = "DELETE FROM jadwal WHERE id_jadwal = $id";
    $result = mysqli_query($connection, $query);
    if ($result) {
        return mysqli_affected_rows($connection);
    } else {
        return -1;
    }
}
