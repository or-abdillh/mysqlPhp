<?php

require("./connection.php");

if ( isset($_POST) ){
    //Get all form
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $alamat = $_POST["alamat"];
    $jurusan = $_POST["jurusan"];
    $gender = $_POST["gender"];

    //Create sql
    $sql = "INSERT INTO `mahasiswa`(`id_mhs`, `nim`, `nama`, `jenis_kelamin`, `jurusan`, `alamat`) 
        VALUES (null, '$nim', '$nama','$gender','$jurusan','$alamat')";
    
    $res = mysqli_query($conn, $sql);

    header("Location: ../index.php?success=true&action=new");
}