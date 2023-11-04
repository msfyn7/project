<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <table class="table table-hover table-striped table-responsive" id="santri">
			<thead>
				<th>#</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>No HP</th>
				<th>Nama Ayah</th>
				<th>Pekerjaan</th>
				<th>Nama Ibu</th>
				<th>Pekerjaan</th>
			</thead>
			<tbody>
				<?php $i=1; foreach ($santri as $stri) { ?>      
					<tr>
						<td><?= $i++; ?></td>
						<td><?php echo $stri['nis']; ?></td>
						<td><?php echo $stri['nama']; ?></td>
						<td><?php echo $stri['jenis_kelamin']; ?></td>
						<td><?php echo $stri['tempat_lahir']; ?></td>
						<td><?php echo $stri['tanggal_lahir']; ?></td>
						<td><?php echo $stri['alamat']; ?></td>
						<td><?php echo $stri['nomor_hp']; ?></td>
						<td><?php echo $stri['nama_ayah']; ?></td>
						<td><?php echo $stri['pekerjaan1']; ?></td>
						<td><?php echo $stri['nama_ibu']; ?></td>
						<td><?php echo $stri['pekerjaan2']; ?></td>
					</tr>
                <?php } ?>
			</tbody>
		</table>
    </body>
</html>