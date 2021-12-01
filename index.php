<?php

include("./helper/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>MYSQL - PHP</title>
</head>
<body>
    <div class="px-5 py-3">

    <!-- Table -->
    <h3>Tabel Mahasiswa</h3>

    <!-- Create new data -->
    <a href="./pages/new.php" class="btn btn-success mt-3 mb-2">
        Tambah data
        <i class="fa fa-plus"></i>
    </a>

    <table class="table table-borderless">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            //Menampilkan data dari DB
            $sql = "SELECT * FROM mahasiswa";
            $rows = mysqli_query($conn, $sql);

            if (mysqli_num_rows($rows) > 0) {
                
                //Print data
                while($row = mysqli_fetch_assoc($rows)) {
                    // get data
                    $id = $row["id_mhs"];
                    $nim = $row["nim"];
                    $nama = $row["nama"];
                    $gender = $row["jenis_kelamin"];
                    $jurusan = $row["jurusan"];
                    $alamat = $row["alamat"];

                    echo <<<EOT
                    <tr>
                        <td>$id</td>
                        <td>$nim</td>
                        <td>$nama</td>
                        <td>$jurusan</td>
                        <td>$gender</td>
                        <td>$alamat</td>
                        <td>
                            <a href="./pages/edit.php?id=$id" class="btn btn-primary w-full mb-2"><i class="far fa-edit"></i></a>
                            <a class="btn btn-danger w-full mb-2"><i class="far fa-trash-alt"></i></a>
                        </td>
                    <tr/>
EOT;
                }
            } else echo "Empty";

            ?>
        </tbody>
    </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>