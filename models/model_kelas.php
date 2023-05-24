<?php

require_once("koneksi.php");

function getAllData()
{
    global $koneksi;
    $sql = "SELECT * FROM kelas order by id_kelas ASC";
    $query = mysqli_query($koneksi, $sql);
    while ($ambilData = mysqli_fetch_assoc($query)) {
        $list[] = $ambilData;
    }
    return $list;
}

function getData($id)
{
    global $koneksi;
    $sql = "SELECT * FROM kelas WHERE id_kelas='$id';";
    $query = mysqli_query($koneksi, $sql);
    $ambilData = mysqli_fetch_assoc($query);
    return $ambilData;
}

function tambahData($data)
{
    $kode = $data["int_kode"];
    $nama = $data["txt_nama"];
    $kelas =  $data["int_kelas"];
    global $koneksi;
    $sql = "INSERT INTO kelas(id_kelas, nama_kelas, id_tahun_ajaran)
    VALUES ('$kode','$nama','$kelas');";
    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}

function hapusData($id)
{
    global $koneksi;
    $sql = "DELETE FROM kelas WHERE id_kelas='$id';";
    $query = mysqli_query($koneksi, $sql);
}

function editData($data)
{
    $kode = $data["int_kode"];
    $nama = $data["txt_nama"];
    $kelas = $data["int_kelas"];
    global $koneksi;
    $sql = "UPDATE kelas SET nama_kelas='$nama', id_tahun_ajaran='$kelas' WHERE id_kelas = '$kode';";
    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}
