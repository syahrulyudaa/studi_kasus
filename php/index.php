<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<tbody>
    <div class="container card mt-5">
        <div class="card-body ">
            <h1 class="text-center">DATA PENJUALAN</h1>
            <a href="tambah.php" Class="btn btn-primary mt-3 mb-3">Tambah Data</a>
            <table class="table" id="example">
                <thead>
                    <tr class="text-center">
                        <th scope="col"> ID Penjualan</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">ID Tanggal</th>
                        <th scope="col">Barang Keluar</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>

                <body>
                    <?php
                    include('connect.php');
                    $toko_helmet = mysqli_query($conn, "SELECT * FROM penjualan INNER JOIN detail_barang on penjualan.id_barang = detail_barang.id_barang");
                    while ($penjualan = mysqli_fetch_array($toko_helmet)) {
                    ?>
                    <tr class="text-center">
                        <td><?php echo $penjualan['id_penjualan'] ?></td>
                        <td><?php echo $penjualan['nama_barang'] ?></td>
                        <td><?php echo $penjualan['harga'] ?></td>
                        <td><?php echo $penjualan['tanggal'] ?></td>
                        <td><?php echo $penjualan['barang_keluar'] ?></td>
                        <td>
                            <a href="edit.php?id_kpenjualan=<?php echo $penjualan['id_penjualan']; ?>"
                                class="btn btn-primary">Edit</a>
                            <a href="proses_delete.php?id_penjualan=<?php echo $penjualan['id_penjualan']; ?>"
                                class="btn btn-danger" onclick="confirm('Apakah Anda Yakin Mau Dihapus ?')">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </body>
            </table>
        </div>
    </div>
</tbody>

<tbody>
    <div class="container card mt-5">
        <div class="card-body ">
            <div class="card-body ">
                <h1 class="text-center">DATA PElANGGAN</h1>
                <a href="tambah.php" Class="btn btn-primary mt-3 mb-3">Tambah Data</a>
                <table class="table" id="example">
                    <thead>
                        <tr class="text-center">
                            <th scope="col"> ID Pelanggan</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Alamat Pelanggan</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>

                    <body>
                        <?php
                        include('connect.php');
                        $toko_helmet = mysqli_query($conn, "SELECT * FROM detail_pelanggan");
                        while ($detail_pelanggan = mysqli_fetch_array($toko_helmet)) {
                        ?>
                        <tr class="text-center">
                            <td><?php echo $detail_pelanggan['id_pelanggan'] ?></td>
                            <td><?php echo $detail_pelanggan['nama_pelanggan'] ?></td>
                            <td><?php echo $detail_pelanggan['alamat'] ?></td>
                            <td>
                                <a href="edit.php?id_kpenjualan=<?php echo $detail_pelanggan['id_pelanggan']; ?>"
                                    class="btn btn-primary">Edit</a>
                                <a href="proses_delete.php?id_penjualan=<?php echo $detail_pelanggan['id_pelanggan']; ?>"
                                    class="btn btn-danger"
                                    onclick="confirm('Apakah Anda Yakin Mau Dihapus ?')">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </body>
                </table>
            </div>
        </div>
</tbody>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
</body>

</html>