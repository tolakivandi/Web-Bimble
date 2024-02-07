 <?php
    // koneksi ke DB
    $connection = mysqli_connect("localhost", "root", "", "bimble");
    // QUERY TABLE DI DB
    function query($query)
    {
        global $connection;
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
        $kelas = htmlspecialchars($data["kelas"]);

        $query = "INSERT INTO kelas (kelas) VALUES ('$kelas')";
        mysqli_query($connection, $query);
        return mysqli_affected_rows($connection);
    }

    // update data 
    function update($data)
    {
        global $connection;
        $id = $data["id"];
        $kelas = htmlspecialchars($data["kelas"]);
        $query = "UPDATE kelas SET
                kelas = '$kelas'
                WHERE id_kelas = $id 
                ";
        mysqli_query($connection, $query);
        return mysqli_affected_rows($connection);
    }

    function delete($id)
    {
        global $connection;
        mysqli_query($connection, "DELETE FROM kelas WHERE  id_kelas= $id");
        return mysqli_affected_rows($connection);
    }

    ?> 