 <?php 
    // connection DB

    $conn = mysqli_connect("localhost", "root", "", "hospital");

    function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
        }
        return $rows;
    }
    // list add item
    function add($data){
        global $conn;
        $nrp = $data["nrp"];
        $nama = $data["nama"];
        $alamat = $data["alamat"];
        $gambar = $data["gambar"];

        $query = "INSERT INTO pasien (nrp, nama, alamat, gambar)
                                VALUES
                    ('$nrp', '$nama', '$alamat', '$gambar')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    // list delete item
    function delete($data){
        global $conn;
        mysqli_query($conn, "DELETE FROM pasien WHERE id = id");
        return mysqli_affected_rows($conn);
    }


 
 
 ?> 