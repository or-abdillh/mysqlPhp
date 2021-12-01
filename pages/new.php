<?php

    include("../helper/connection.php");

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
    <h3>Tambah Data Mahasiswa Baru</h3>
    <form method="post" action="../helper/new.php">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input required type="text" name="nama" class="form-control" id="nama">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input required type="text" name="nim" class="form-control" id="nim">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input required type="text" name="alamat" class="form-control" id="alamat">
        </div>
        <select required name="jurusan" class="form-select mb-3" aria-label="Default select example">
            <option>Jurusan</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Otomotif">Teknik Otomotif</option>
            <option value="Budidaya Tanaman Perkebunan">Budidaya Tanaman Perkebunan</option>
        </select>
        <select required name="gender" class="form-select mb-3" aria-label="Default select example">
            <option selected>Jenis Kelamin</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="../" class="btn btn-secondary">Back</button>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>