<?php

require_once("./koneksi.php");

// untuk melakukan getalldata yang akan di perlihatkan
function getAllData()
{
    global $koneksi;
    $sql = "SELECT * FROM siswa order by nama ASC";
    $query = mysqli_query($koneksi, $sql);
    while ($ambilData = mysqli_fetch_assoc($query)) {
        $list[] = $ambilData;
    }
    return $list;
}

// untuk melakukan data yang detail
function getData($id)
{
    global $koneksi;
    $sql = "SELECT * FROM siswa WHERE nisn='$id';";
    $query = mysqli_query($koneksi, $sql);
    $ambilData = mysqli_fetch_assoc($query);
    return $ambilData;
}

// untuk melakukan penambahan pada sebuah data
function tambahData($data)
{
    $kode = $data["txt_kode"];
    $nama = $data["txt_nama"];
    $agama =  $data["select_agama"];
    $jenis = $data["rd_jenkel"];
    $alamat = $data["txt_alamat"];
    global $koneksi;
    $sql = "INSERT INTO siswa(nisn, nama, agama, jenkel, alamat)
    VALUES ('$kode','$nama','$agama','$jenis','$alamat');";
    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}

// untuk melakukan hapus data
function hapusData($id)
{
    global $koneksi;
    $sql = "DELETE FROM siswa WHERE nisn='$id';";
    $query = mysqli_query($koneksi, $sql);
}

// untuk melakukan edit pada sebuah data
function editData($data)
{
    $kode = $data["txt_kode"];
    $nama = $data["txt_nama"];
    $agama =  $data["select_agama"];
    $jenis = $data["rd_jenkel"];
    $gambar = $data["file_gambar"];
    $alamat = $data["txt_alamat"];
    global $koneksi;
    $sql = "UPDATE siswa SET nama='$nama', agama='$agama', jenkel='$jenis',alamat='$alamat' WHERE nisn = '$kode';";

    $proses = mysqli_query($koneksi, $sql);
    return $proses;
}
