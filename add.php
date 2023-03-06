 <?php 
 require 'functions.php';
    // connection DB
    $conn = mysqli_connect("localhost", "root", "", "hospital");

        if(isset($_POST["submit"])){

            if (add($_POST) > 0 ){
            echo "<script>
                    alert('data berhasil di tambahkan');
                </script>";
            }else{
            echo "<script>
                    alert('data berhasil di tambahkan');
                </script>";
            }
        }

?> 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
 </head>
 <body>
    <h1>Tambah Data Pasien</h1>

    <form method="post" action="">
        <ul>
            <li>
                <label for="nrp">nrp :</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="alamat">alamat :</label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <label for="gambar">gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit" id="submit">tambah data!</button>
            </li>
        </ul>
    </form>
 </body>
 </html>