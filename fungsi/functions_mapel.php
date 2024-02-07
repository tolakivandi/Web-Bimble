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
        $mapel = htmlspecialchars($data["mapel"]);

        $query = "INSERT INTO mapel (mapel) VALUES ('$mapel')";
        mysqli_query($connection, $query);
        return mysqli_affected_rows($connection);
    }

    // update data 
    function update($data)
    {
        global $connection;
        $id = $data["id"];
        $mapel = htmlspecialchars($data["mapel"]);
        $query = "UPDATE mapel SET mapel = '$mapel' WHERE id_mapel = $id";
        mysqli_query($connection, $query);
        return mysqli_affected_rows($connection);
    }

    function delete($id)
    {
        global $connection;
        mysqli_query($connection, "DELETE FROM mapel WHERE  id_mapel= $id");
        return mysqli_affected_rows($connection);
    }

    function find($id)
    {
        global $connection;
        $result = mysqli_query($connection, "SELECT * FROM mapel WHERE id_mapel=$id");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
    ?> 