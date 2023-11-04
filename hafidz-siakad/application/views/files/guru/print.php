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
        <h3 class="text-center mt-3">Data Guru TPQ Nurul Islam</h3>
        <div class="container">
        <table class="table table-bordered table-striped ml-2 mr-2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIG</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach ($guru as $gr) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $gr['nig']; ?></td>
                        <td><?= $gr['nama']; ?></td>
                        <td><?= $gr['jenis_kelamin']; ?></td>
                        <td><?= $gr['tempat_lahir']; ?></td>
                        <td><?= $gr['tanggal_lahir']; ?></td>
                        <td><?= $gr['alamat']; ?></td>
                        <td><?= $gr['nomor_hp']; ?></td>
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