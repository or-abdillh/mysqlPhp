<?php

require("./connection.php");

if (isset($_GET)) {
    //Get key
    $key = $_GET["id"];
    $sql = "DELETE FROM `mahasiswa` WHERE `id_mhs` = '$key'";
    $res = mysqli_query($conn, $sql);

    header("Location: ../index.php?success=true&action=delete");
}