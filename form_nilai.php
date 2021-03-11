<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1 | Form Nilai</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
    <form method="POST" action="array_siswa.php">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" required />
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" name="nim" id="nim" required />
                </div>
                <div class="form-group">
                    <label for="matkul">Mata Kuliah</label>
                    <select class="form-control" name="matkul" id="matkul">
                        <option value="DDP">Dasar-Dasar Pemrograman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemrograman Web</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nilai_uts">Nilai UTS</label>
                    <input type="text" class="form-control" name="nilai_uts" id="nilai_uts" required />
                </div>
                <div class="form-group">
                    <label for="nilai_uas">Nilai UAS</label>
                    <input type="text" class="form-control" name="nilai_uas" id="nilai_uas" required />
                </div>
                <div class="form-group">
                    <label for="nilai_tugas">Nilai Tugas/Praktikum</label>
                    <input type="text" class="form-control" name="nilai_tugas" id="nilai_tugas" required />
                </div>
                <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
            </div>
        </div>
    </form>

    <?php
        if (isset($_POST['proses'])) {
            $proses= $_POST['proses'];
            $nama_siswa = $_POST['nama'];
            $mata_kuliah = $_POST['matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];
            echo 'Proses : '.$proses;
            echo '<br/>Nama : '.$nama_siswa;
            echo '<br/>Mata Kuliah : '.$mata_kuliah;
            echo '<br/>Nilai UTS : '.$nilai_uts;
            echo '<br/>Nilai UAS : '.$nilai_uas;
            echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
        }
    ?>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>