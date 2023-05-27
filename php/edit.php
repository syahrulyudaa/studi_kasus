<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Data</title>
</head>

<body>
    <?php 
		include('connect.php');

        $id_penjualan    =isset($_GET['id_penjualan']) ? $_GET['id_penjualan'] :'';

		$query = mysqli_query($conn, "SELECT * FROM penjualan INNER JOIN detail_barang on penjualan.id_barang = detail_barang.id_barang");

		while($penjualan = mysqli_fetch_array($query)) { 
			$nama_barang		= $penjualan['nama_barang'];
			$harga 	            = $penjualan['harga'];
			$tanggal 	    	= $penjualan['tanggal'];
			$barang_keluar		= $penjualan['barang_keluar'];
		}

	?>


    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT Data
                    </div>
                    <div class="card-body">
                        <form action="proses_edit.php" method="POST">

                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama_barang" value="<?php echo $nama_barang; ?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" value="<?php echo $harga; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="datetime-local" name="tanggal" value="<?php echo $tanggalr; ?>" />
                            </div>
                            <div class="form-group">
                                <label>Jumlah Barang Keluar</label>
                                <input type="text" name="barang_keluar" value="<?php echo $barang_keluar; ?>"
                                    class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <a href="index.php" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>