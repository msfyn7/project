    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="header">
                <div class="ml-1 mb-2 mr-2 float-left">
                    <a type="button" class="btn btn-primary ml-2 mt-2" href="<?php echo base_url('admin/tambahSantri');?>">
                    Tambah Santri Baru</a>
                </div>
                <div class="mb-2 mr-2 float-right">
                    <!-- Tombol dengan ikon dan teks (untuk layar desktop) -->
                    <a type="button" class="btn btn-success mt-2 d-none d-md-inline" href="<?php echo base_url('print/file');?>">
                        <i class="fas fa-print"></i> Print File
                    </a>
                    <!-- Tombol hanya dengan ikon (untuk layar ponsel) -->
                    <a type="button" class="btn btn-success mt-2 d-inline d-md-none" href="<?php echo base_url('print/file');?>">
                        <i class="fas fa-print"></i>
                    </a>
                </div>
                <!--<div class="mb-2 mr-2 float-right">-->
                <!--    <a type="button" class="btn btn-danger mt-2 d-none d-md-inline" href="<?php echo base_url('pdf/export');?>">-->
                <!--        <i class="fas fa-download"></i>-->
                <!--    Export PDF-->
                <!--    </a>-->
                <!--    <a type="button" class="btn btn-danger mt-2 d-inline d-md-none" href="<?php echo base_url('pdf/export');?>">-->
                <!--        <i class="fas fa-download"></i>-->
                <!--    </a>-->
                <!--</div>-->
                <div class="mb-2 mr-2 float-right">
                    <!-- Tombol dengan ikon dan teks (untuk layar desktop) -->
                    <a type="button" class="btn btn-success mt-2 d-none d-md-inline" href="<?php echo base_url('excel/export');?>">
                        <i class="fas fa-download"></i> Export Excel
                    </a>
                    <!-- Tombol hanya dengan ikon (untuk layar ponsel) -->
                    <a type="button" class="btn btn-success mt-2 d-inline d-md-none" href="<?php echo base_url('excel/export');?>">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
			<h4 class="title ml-2" style="text-transform:capitalize;"></h4>
			<!-- <p class="category">Last Campaign Performance</p> -->
		</div>

    <div class="content">
			<div class="content table-responsive table-full-width">
            <?php echo $this->session->flashdata('sukses'); ?>
				<table class="table table-hover table-striped table-responsive">
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
                        <th>Tindakan</th>
					</thead>
					<tbody>
						<?php 
            $i=1;

            foreach ($santri as $stri) { ?>      

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
								<td class="tindakan">
                                    <div class="btn-group d-none d-md-inline" role="group">
                                        <a href="#" class="btn btn-info" title="Lihat"><i class="fas fa-eye"></i> Info</a>
                                        <a href="<?php echo base_url('admin/editSantri/'.$stri['id_santri']); ?>" class="btn btn-success" title="Ubah"><i class="fas fa-pen"></i> Edit</a>
                                        <a href="<?php echo base_url('admin/deleteSantri/'.$stri['id_santri']); ?>" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah kamu yakin mau menghapus data ini?')"><i class="fas fa-trash"></i> Delete</a>
                                    </div>
                                    <div class="d-inline d-md-none">
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-info" title="Lihat"><i class="fas fa-eye"></i></a>
                                            <a href="<?php echo base_url('admin/editSantri/'. $stri['id_santri']); ?>" class="btn btn-success" title="Ubah"><i class="fas fa-pen"></i></a>
                                            <a href="<?php echo base_url('admin/deleteSantri/'.$stri['id_santri']); ?>" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah kamu yakin mau menghapus data ini?')"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </td>

							</tr>
             <?php } ?>
					</tbody>
				</table>
			</div>
	    </div>
    </div>
</div>

<script>
$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
});
</script>