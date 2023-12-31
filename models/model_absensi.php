<?php

require_once("./koneksi.php");

function getAllData()
{
    global $koneksi;
    $sql = "SELECT * FROM kehadiran order by id_kehadiran ASC";
    $query = mysqli_query($koneksi, $sql);
    while ($ambilData = mysqli_fetch_assoc($query)) {
        $list[] = $ambilData;
    }
    return $list;
}

function getData($id)
{
    global $koneksi;
    $sql = "SELECT * FROM kehadiran WHERE id_kehadiran='$id';";
    $query = mysqli_query($koneksi, $sql);
    $ambilData = mysqli_fetch_assoc($query);
    return $ambilData;
}

function tambahData($data)
{
    $kode = $data["int_kehad"];
    $nisn = $data["char_nisn"];
    $tanggal =  $data["datetime"];
    $status = $data["rd_status"];
    $keterangan = $data["txt_keter"];
    global $koneksi;
    $sql = "INSERT INTO kehadiran(id_kehadiran, nisn, tanggal, status,keterangan)
    VALUES ('$kode','$nisn','$tanggal','$status', '$keterangan');";
    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}

function hapusData($id)
{
    global $koneksi;
    $sql = "DELETE FROM kehadiran WHERE id_kehadiran='$id';";
    $query = mysqli_query($koneksi, $sql);
}

function editData($data)
{
    $kode = $data["int_kehad"];
    $nisn = $data["char_nisn"];
    $tanggal =  $data["datetime"];
    $status = $data["rd_status"];
    $keterangan = $data["txt_keter"];
    global $koneksi;
    $sql = "UPDATE kehadiran SET nisn='$nisn', tanggal='$tanggal', status='$status', keterangan='$keterangan' WHERE id_kehadiran = '$kode';";

    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}
