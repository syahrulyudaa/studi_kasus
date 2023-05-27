<?php
include 'connect.php';

$id_penjualan = $_GET['id_penjualan'];
// $id_pelanggan = $_GET['id_pelanggan'];
// $id_barang = $_GET['id_barang'];

$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$barang_keluar = $_POST['barang_keluar'];

$tanggal = date("Y-m-d", strtotime($_POST['tanggal']));

$result = mysqli_query($conn, "UPDATE pelanggan SET nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', nama_barang = '$nama_barang', harga = '$harga', barang_keluar = '$barang_keluar' WHERE id_penjualan = '$id_penjualan' ");

// $query1  = mysqli_query($conn, "UPDATE detail_pelanggan SET nama_pelanggan = '$nama_pelanggan', alamat = '$alamat',  WHERE id_pelanggan ='$id_pelanggan' ");

// $query2 = mysqli_query($conn, "UPDATE detail_barang SET nama_barang = '$nama_barang', harga = '$harga', barang_keluar = '$barang_keluar', WHERE id_barang = '$id_barang' ");

// $query3 = mysqli_query($conn, "SELECT * FROM detail_barang Order by id_barang DESC LIMIT 1");
// while($detail_barang = mysqli_fetch_array($query3)){
//     $id_barang = $detail_barang['id_barang'];
// }

// $query4 = mysqli_query($conn, "SELECT * FROM detail_pelanggan Order by id_pelanggan DESC LIMIT 1");
// while($detail_pelanggan = mysqli_fetch_array($query4)){
//     $id_pelanggan = $detail_pelanggan['id_pelanggan'];
// }

// $query5 = mysqli_query($conn, "UPDATE penjualan SET ( id_barang = '$id_barang', id_pelanggan = '$id_pelanggan', tanggal = '$tanggal', barang_keluar = '$barang_keluar')  WHERE id_penjualan = '$id_penjualan' ");


header("location:index.php");