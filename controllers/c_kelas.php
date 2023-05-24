<?php

define("URL", "http://localhost/bew_xirplb_1920_22_Paris/controllers/c_kelas.php?aksi=");

$aksi = $_GET["aksi"];
require_once("../models/model_kelas.php");
require_once("../app/helper/form_helpers.php");


if ($aksi == "dashboard") {
    header("Location: http://localhost/bew_xirplb_1920_22_Paris/index.php");
}


elseif ($aksi == "list") {
    $data = getAllData();
    require_once("../views/data_kelas/list_data.php");
}


elseif ($aksi == "detail") {
    $id = $_GET["id"];
    $data = getData($id);
    require_once("../views/data_kelas/detail_data.php");
}


elseif ($aksi == "tambah") {
    require_once("../views/data_kelas/tambah_data.php");
}


elseif ($aksi == "prosestambah") {
    $proses = tambahData($_POST);
    if ($proses) {
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        echo "<script>window.location='c_kelas.php?aksi=list'</script>";
    } else {
        echo "<script>alert('Data tidak berhasil ditambahkan')</script>";
        echo "<script>window.history.back()</script>";
    }
}


elseif ($aksi == "hapus") {
    $id = $_GET["id"];
    hapusData($id);
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<script>window.location='c_kelas.php?aksi=list'</script>";
}


elseif ($aksi == "edit") {
    $id = $_GET["id"];
    $data = getData($id);
    require_once("../views/data_kelas/edit_data.php");
}


elseif ($aksi == "prosesedit") {
    $proses = editData($_POST);
    if ($proses) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<script>window.location='c_kelas.php?aksi=list'</script>";
    } else {
        echo "<script>alert('Data tidak berhasil diedit')</script>";
        echo "<script>window.history.back()</script>";
    }
} 

elseif ($aksi == "logout") {
    require_once("../views/login.php");
}
