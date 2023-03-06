 <?php 
    require 'functions.php';
    //mengambil data pada tabel / query data tabel
    $pasien = mysqli_query($conn, "SELECT * FROM hospital.pasien");


 ?> 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR DATA PASIEN</title>
    <link rel="stylesheet" href="src/style.css">
 </head>
 <body> 
    <div class="navigation">
        <h1>DAFTAR DATA PASIEN</h1>
    <ul>
        <li><a href="add.php">Tambah Pasien</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="services.php">Services</a></li>
    </ul>
</div>
 <div class="container">
    <table border="1" cellpadding="50" cellspacing="3">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nrp</th>
            <th>Nama</th>
            <th>alamat</th>
            <th>Gambar</th>
        </tr>
         <?php $i = 1; ?>
         <?php foreach($pasien as $psn) : ?> 
        <tr>
            <td> <?= $i; ?> </td>
            <td>
                <a href="">Edit</a> |
                <a href="">Delete</a>
            </td>
            <td> <?= $psn["nrp"]; ?> </td>
            <td> <?= $psn["nama"]; ?> </td>
            <td> <?= $psn["alamat"]; ?> </td>
            <td><img src="img/<?= $psn["gambar"]; ?>"  width="100" ></td>
        </tr>
         <?php $i++; ?> 
        <?php endforeach;  ?> 
    </table>
    </div>
 </body>
 </html>