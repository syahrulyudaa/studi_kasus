<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data</title>
    <style>
    .error {
        background-color: #ffcccc;
    }

    .error-message {
        color: red;
        font-size: 12px;
        margin-top: 5px;
    }
    </style>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH Data
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama_pelanggan" class="form-control">
                                <div class="error-message">Field ini harus diisi.</div>
                            </div>

                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control">
                                <div class="error-message">Field ini harus diisi.</div>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control">
                                <div class="error-message">Field ini harus diisi.</div>
                            </div>

                            <div class="form-group">
                                <label>Barang Keluar</label>
                                <input type="text" name="barang_keluar" class="form-control">
                                <div class="error-message">Field ini harus diisi.</div>
                            </div>


                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="datetime-local" name="tanggal" />
                                <div class="error-message">Field ini harus diisi.</div>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" rows="4"></textarea>
                                <div class="error-message">Field ini harus diisi.</div>
                            </div>

                            <button type="submit" class="btn btn-success" id="input">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('input, textarea').blur(function() {
            if ($(this).val() === '') {
                $(this).addClass('error');
                $(this).siblings('.error-message').show();
            } else {
                $(this).removeClass('error');
                $(this).siblings('.error-message').hide();
            }
        });

        $('form').submit(function(event) {
            var fields = $(this).find('input, textarea');
            var valid = true;

            fields.each(function() {
                if ($(this).val() === '') {
                    $(this).addClass('error');
                    $(this).siblings('.error-message').show();
                    valid = false;
                } else {
                    $(this).removeClass('error');
                    $(this).siblings('.error-message').hide();
                }
            });

            if (!valid) {
                event.preventDefault(); // Mencegah pengiriman form ke server
            }
        });
    });
    </script>
</body>

</html>