<?php
include 'connect.php';



$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$barang_keluar = $_POST['barang_keluar'];

$tanggal = date("Y-m-d", strtotime($_POST['tanggal']));


$query1 = mysqli_query($conn, "INSERT INTO detail_pelanggan ( nama_pelanggan, alamat) VALUES ( '$nama_pelanggan', '$alamat')");

$query2 = mysqli_query($conn, "INSERT INTO detail_barang ( nama_barang, harga) VALUES ('$nama_barang', '$harga')");

$query3 = mysqli_query($conn, "SELECT * FROM detail_barang Order by id_barang DESC LIMIT 1");
while($detail_barang = mysqli_fetch_array($query3)){
    $id_barang = $detail_barang['id_barang'];
}

$query4 = mysqli_query($conn, "SELECT * FROM detail_pelanggan Order by id_pelanggan DESC LIMIT 1");
while($detail_pelanggan = mysqli_fetch_array($query4)){
    $id_pelanggan = $detail_pelanggan['id_pelanggan'];
}

$query5 = mysqli_query($conn, "INSERT INTO penjualan ( id_barang, id_pelanggan, tanggal, barang_keluar) VALUES ('$id_barang', '$id_pelanggan',  '$tanggal', '$barang_keluar')");


header("location:index.php");