<?php

include("../helper/connection.php");

if ( isset($_POST) ){
    //GET DATA
    $key = $_POST['key'];
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $alamat = $_POST["alamat"];
    $jurusan = $_POST["jurusan"];
    $gender = $_POST["gender"];

    // Create sql
    $sql = "UPDATE `mahasiswa` SET `nim`='$nim', `nama`='$nama',`jenis_kelamin`='$gender',`jurusan`='$jurusan',`alamat`='$alamat' WHERE `id_mhs` = '$key'";
    mysqli_query($conn, $sql);
    
    header('Location: ../index.php');
}