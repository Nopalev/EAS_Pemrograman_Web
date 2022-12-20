<!DOCTYPE html>
<html>
<head>
    <title>Data Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Poppins'/>
    <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
    <header class="d-flex justify-content-center">
        <h1>Data Peserta</h1>
    </header>

    <div class="d-block mx-5">
        <nav class="mx-5 d-flex justify-content-between">
            <nav class="mx-5 d-flex">
                <a href="index.php" class="mt-4 mx-5 btn btn-danger"><< Back</a>
            </nav>
            <nav class="mx-5 d-flex justify-content-end">
                <a href="form_simpan.php" class="btn btn-primary mt-4 mx-2">[+] Tambah</a>
            </nav>
        </nav>

        <br>
        <div class="d-flex justify-content-center">
            <table border="1">
            <thead>
                <tr class="text-center col-md-2">
                    <th class="text-center col-md-2">KTP</th>
                    <th class="text-center col-md-2">Pas Foto</th>
                    <th class="text-center col-md-2">NIK</th>
                    <th class="text-center col-md-2">Nama</th>
                    <th class="text-center col-md-2">Jenis Kelamin</th>
                    <th class="text-center col-md-2">Tempat Lahir</th>
                    <th class="text-center col-md-2">Tanggal Lahir</th>
                    <th class="text-center col-md-2">Kualifikasi Pendidikan</th>
                    <th class="text-center col-md-2">Terferivikasi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "koneksi.php";
                $sql = $pdo->prepare("SELECT * FROM peserta");
                $sql->execute();

                while($data = $sql->fetch()){
                    echo "<tr>";
                    echo "<td class='col-md-2 text-center'><img src='images/ktp/".$data['Foto']."' width='100' height='100'></td>";
                    echo "<td class='col-md-2 text-center'><img src='images/pasFoto/".$data['Foto']."' width='100' height='100'></td>";
                    echo "<td class='col-md-2'>".$data['NIK']."</td>";
                    echo "<td class='col-md-2'>".$data['NomorPeserta']."</td>";
                    echo "<td class='col-md-2'>".$data['Nama']."</td>";
                    echo "<td class='col-md-2'>".$data['JenisKelamin']."</td>";
                    echo "<td class='col-md-2'>".$data['TempatLahir']."</td>";
                    echo "<td class='col-md-2'>".$data['TanggalLahir']."</td>";
                    echo "<td class='col-md-2'>".$data['KualifikasiPendidikan']."</td>";
                    echo "<td class='col-md-2'>".$data['Terferivikasi']."</td>";

                    echo "<td class='text-center col-md-2'>";
                    echo "<a href='form_ubah.php?id=".$data['id']."' class='btn-sm btn-info mx-1'>Edit</a>";
                    echo "<a href='proses_hapus.php?id=".$data['id']."' class='btn-sm btn-danger mx-1'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
            </table>
        </div>
        <a href="report.php" class="btn btn-success mt-4 mx-2 d-flex justify-content-center">Download PDF</a>
    </div>
</body>
</html>