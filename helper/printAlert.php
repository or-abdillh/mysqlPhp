<?php

if ( isset($_GET["success"]) && isset($_GET["action"]) ) {
    $action = $_GET["action"];
    switch ($action) {
        case "edit": 
            echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Action succes!</strong> Edit data mahasiswa sukses dilakukan
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
            break;
        case "new":
            echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Action succes!</strong> Tambah data mahasiswa baru sukses ditambahkan
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
            break;
        case "delete":
            echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Action succes!</strong> Hapus data mahasiswa sukses dilakukan
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
    }
}
