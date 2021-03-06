<?php

    include("../helper/connection.php");

    //Get id from $_GET
    if (isset($_GET)) {
        $key = $_GET["id"];
    }

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
    <h3>Edit Data Mahasiswa</h3>

    <!-- Form -->
    <form class="mt-4" method="post" action="../helper/edit.php">
        
    <?php

        //Get data by key
        $sql = "SELECT * FROM mahasiswa WHERE id_mhs = $key";
        $rows = mysqli_query($conn, $sql);

        if ( mysqli_num_rows($rows) > 0 ) {
            while($row = mysqli_fetch_assoc($rows)) {

                //Get data
                $nim = $row["nim"];
                $nama = $row["nama"];
                $jurusan = $row["jurusan"];
                $alamat = $row["alamat"];
                $gender = $row["jenis_kelamin"];

                echo <<<EOT
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input required type="text" value="$nama" name="nama" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input required type="text" value="$nim" name="nim" class="form-control" id="nim">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input required type="text" value="$alamat" name="alamat" class="form-control" id="alamat">
                </div>
                <div class="mb-3">
                    <label for="alamat">
                        Jurusan
                    </label>
                    <select required name="jurusan" class="form-select" aria-label="Default select example">
                        <option>Jurusan</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Otomotif">Teknik Otomotif</option>
                        <option value="Budidaya Tanaman Perkebunan">Budidaya Tanaman Perkebunan</option>
                    </select>
                </div>
                <div class="mb-3 d-flex">
                    <label class="me-3" for="gender">
                        Jenis kelamin
                    </label>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="radio" name="gender" value="Pria">
                        <label class="form-check-label">
                            Pria
                        </label>
                    </div>
                    <div class="form-check me-2">
                        <input class="form-check-input" type="radio" name="gender" value="Wanita">
                        <label class="form-check-label">
                            Wanita
                        </label>
                    </div>
                </div>
                <input type="hidden" value="$gender" name="genderUser" />
                <input type="hidden" value="$key" name="key" />
                <input type="hidden" value="$jurusan" name="jurusanGender" />
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="../" class="btn btn-secondary">Back</button>
EOT;
            }
        }
    ?> 
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="../JS/select.js"></script>
    <script src="../JS/option.js"></script>

</body>
</html>