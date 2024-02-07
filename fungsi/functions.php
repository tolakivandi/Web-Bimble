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

    // TAMBAH GURU
    function add($data)
    {
        global $connection;
        $nama = htmlspecialchars($data["nama"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $telepon = htmlspecialchars($data["telepon"]);
        $pendidikan = htmlspecialchars($data["pendidikan"]);
        $id_mapel = htmlspecialchars($data["id_mapel"]);

        $query = "INSERT INTO guru (nama, alamat, telepon, pendidikan,id_mapel)
                                VALUES
                ('$nama', '$alamat', '$telepon', '$pendidikan','$id_mapel')
                                    ";
        mysqli_query($connection, $query);
        return mysqli_affected_rows($connection);
    }

    // update data 
    function update($data)
    {
        global $connection;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $telepon = htmlspecialchars($data["telepon"]);
        $pendidikan = htmlspecialchars($data["pendidikan"]);
        $id_mapel = htmlspecialchars($data["id_mapel"]);

        $query = "UPDATE guru SET
                nama = '$nama',
                alamat = '$alamat',
                telepon = '$telepon',
                pendidikan = '$pendidikan',
                id_mapel = '$id_mapel'
                WHERE nik=$id 
                ";
        mysqli_query($connection, $query);
        return mysqli_affected_rows($connection);
    }

    function delete($id)
    {
        global $connection;
        mysqli_query($connection, "DELETE FROM guru WHERE nik = $id");
        return mysqli_affected_rows($connection);
    }

    function mapelAll()
    {
        global $connection;
        $result = mysqli_query($connection, "SELECT * FROM mapel");
        $mapels = [];

        while ($mapel = mysqli_fetch_assoc($result)) {
            $mapels[] = $mapel;
        }

        return $mapels;
    }

    function findGuru($id)
    {
        global $connection;
        $result = mysqli_query($connection, "SELECT * FROM guru WHERE nik=$id");
        $mapels = [];

        while ($mapel = mysqli_fetch_assoc($result)) {
            $mapels[] = $mapel;
        }

        return $mapels;
    }

    function findMapel($id)
    {
        global $connection;
        $result = mysqli_query($connection, "SELECT * FROM mapel WHERE id_mapel=$id");
        $mapels = [];

        while ($mapel = mysqli_fetch_assoc($result)) {
            $mapels[] = $mapel;
        }

        return $mapels;
    }

    ?> 