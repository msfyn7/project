<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <table class="table table-hover table-striped table-responsive">
			<thead>
				<th>#</th>
				<th>NIG</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>No HP</th>
			<tbody>
				<?php $i=1; foreach ($guru as $gr) { ?>      
					<tr>
						<td><?= $i++; ?></td>
						<td><?php echo $gr['nig']; ?></td>
						<td><?php echo $gr['nama']; ?></td>
						<td><?php echo $gr['jenis_kelamin']; ?></td>
						<td><?php echo $gr['tempat_lahir']; ?></td>
						<td><?php echo $gr['tanggal_lahir']; ?></td>
						<td><?php echo $gr['alamat']; ?></td>
						<td><?php echo $gr['nomor_hp']; ?></td>
					</tr>
                <?php } ?>
			</tbody>
		</table>
    </body>
</html>