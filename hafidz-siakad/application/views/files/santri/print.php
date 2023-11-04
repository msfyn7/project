<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            @media print {
                @page {
                    size: landscape;
                    position: center;
                }
            }
            table {
                width: 100%; /* Lebar tabel mengisi seluruh lebar halaman */
            }
            .container {
                position: absolute;
                top: 2cm; /* Mengatur posisi konten agar sesuai */
                left: 1cm;
                right: 1cm;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <h3 class="text-center mt-3">Data Santri TPQ Nurul Islam</h3>
        <div class="container">
        <table class="table table-bordered table-striped ml-2 mr-2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Nama Ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ibu</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach ($santri as $stri) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $stri['nis']; ?></td>
                        <td><?= $stri['nama']; ?></td>
                        <td><?= $stri['jenis_kelamin']; ?></td>
                        <td><?= $stri['tempat_lahir']; ?></td>
                        <td><?= $stri['tanggal_lahir']; ?></td>
                        <td><?= $stri['alamat']; ?></td>
                        <td><?= $stri['nomor_hp']; ?></td>
                        <td><?= $stri['nama_ayah']; ?></td>
                        <td><?= $stri['pekerjaan1']; ?></td>
                        <td><?= $stri['nama_ibu']; ?></td>
                        <td><?= $stri['pekerjaan2']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
		<script type="text/javascript">
            window.print();
        </script>
    </body>
</html>