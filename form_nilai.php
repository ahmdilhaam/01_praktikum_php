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
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-6">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-header text-white bg-primary">Form Nilai Siswa</div>
                                <div class="card-body">
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
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right" name="proses">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <?php 
                    $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
                    $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
                    $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
                    $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
                    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
                    if (isset($_POST['proses'])) {
                        $ns5 = ['id'=>5,'nim'=> $_POST['nim'],'uts'=>$_POST['nilai_uts'],'uas'=>$_POST['nilai_uas'],'tugas'=>$_POST['nilai_tugas']];
                        array_push($ar_nilai, $ns5);
                    }
                ?>
                <table class="table table-bordered">
                    <thead class="text-center thead-dark">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>Tugas</th>
                            <th>Nilai Akhir</th>
                        </tr> 
                    </thead>
                    <tbody class="text-center">
                    <?php
                    $nomor = 1; 
                        foreach($ar_nilai as $ns){
                        echo '<tr><td>'.$nomor.'</td>';
                        echo '<td>'.$ns['nim'].'</td>';
                        echo '<td>'.$ns['uts'].'</td>';
                        echo '<td>'.$ns['uas'].'</td>';
                        echo '<td>'.$ns['tugas'].'</td>';
                        $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                        echo '<tr/>';
                        $nomor++;
                        }
                    ?>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>