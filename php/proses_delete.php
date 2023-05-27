<?php
include 'connect.php';
$id_penjualan = $_GET['id_penjualan'];
$result = mysqli_query($conn, "DELETE FROM `penjualan` where id_penjualan= '$id_penjualan'");

header("location:index.php");