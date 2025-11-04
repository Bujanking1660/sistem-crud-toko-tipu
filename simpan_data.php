<?php
include 'koneksi.php';

$id = @$_POST['id_barang'];
$nama = @$_POST['nama'];
$harga = @$_POST['harga'];

$sql;

if(!$id){
    $sql = "INSERT into barang (nama, harga) VALUES ('$nama', '$harga')";
}
else{
    $sql = "UPDATE barang SET nama='$nama', harga='$harga' WHERE id_barang='$id'";
}

$sql_simpan = mysqli_query($koneksi, $sql);

if ($sql_simpan) {
    echo "Data berhasil disimpan";
    header("Location: index.php");
} else {
    echo "Data gagal disimpan";
}
 ?>