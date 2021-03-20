<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Praktikum 1 | Form Belanja</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Belanja Online</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="form_belanja.php">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Customer</label>
                                <div class="col-md-6">
                                    <input type="text" name="customer" id="customer" class="form-control" placeholder="Nama Customer">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Pilih Produk</label>
                                <div class="col-md-10 col-form-label">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="produk" id="tv" value="tv">
                                        <label class="form-check-label">TV</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="produk" id="kulkas" value="kulkas">
                                        <label class="form-check-label">Kulkas</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="produk" id="mesin_cuci" value="mesin cuci">
                                        <label class="form-check-label">Mesin Cuci</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Jumlah</label>
                                <div class="col-md-2">
                                    <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" name="proses">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <table class="table table-bordered">
                    <tr class="text-white bg-primary">
                        <td>Daftar Harga</td>
                    </tr>
                    <tr>
                        <td>TV : Rp 4.200.000,00</td>
                    </tr>
                    <tr>
                        <td>Kulkas : Rp 3.100.000,00</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci : Rp 3.800.000,00</td>
                    </tr>
                    <tr class="text-white bg-primary">
                        <td>Harga Dapat Berubah Setiap Saat</td>
                    </tr>
                </table>
            </div>
        </div>

        <?php
            if (isset($_POST['proses'])) {
                $customer = $_POST['customer'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];

                $total  = 0;
                if ($produk == 'tv') {
                    $total = $jumlah * 4200000;
                } else if ($produk == 'kulkas') {
                    $total = $jumlah * 3100000;
                } else if ($produk == 'mesin cuci') {
                    $total = $jumlah * 3800000;
                }

                echo "
                    <br><hr><br>
                    Nama Customer : {$customer}<br>
                    Produk Pilihan : {$produk}<br>
                    Jumlah Beli : {$jumlah}<br>
                    Total Belanja : Rp ".number_format($total, 2, ',' , '.')."
                ";
            }
        ?>

    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>