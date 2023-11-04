    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="header">
                <div class="ml-1 mb-2 mr-2 float-left">
                    <a type="button" class="btn btn-primary ml-2 mt-2" href="<?php echo base_url('admin/tambahGuru');?>">
                    Tambah Guru Baru</a>
                </div>
                <div class="mb-2 mr-2 float-right">
                    <!-- Tombol dengan ikon dan teks (untuk layar desktop) -->
                    <a type="button" class="btn btn-success mt-2 d-none d-md-inline" href="<?php echo base_url('print-file');?>">
                        <i class="fas fa-print"></i> Print File
                    </a>
                    <!-- Tombol hanya dengan ikon (untuk layar ponsel) -->
                    <a type="button" class="btn btn-success mt-2 d-inline d-md-none" href="<?php echo base_url('print-file');?>">
                        <i class="fas fa-print"></i>
                    </a>
                </div>
                <!--<div class="mb-2 mr-2 float-right">-->
                <!--    <a type="button" class="btn btn-danger mt-2 d-none d-md-inline" href="<?php echo base_url('pdf-export');?>">-->
                <!--        <i class="fas fa-download"></i>-->
                <!--    Export PDF-->
                <!--    </a>-->
                <!--    <a type="button" class="btn btn-danger mt-2 d-inline d-md-none" href="<?php echo base_url('pdf-export');?>">-->
                <!--        <i class="fas fa-download"></i>-->
                <!--    </a>-->
                <!--</div>-->
                <div class="mb-2 mr-2 float-right">
                    <!-- Tombol dengan ikon dan teks (untuk layar desktop) -->
                    <a type="button" class="btn btn-success mt-2 d-none d-md-inline" href="<?php echo base_url('excel-export');?>">
                        <i class="fas fa-download"></i> Export Excel
                    </a>
                    <!-- Tombol hanya dengan ikon (untuk layar ponsel) -->
                    <a type="button" class="btn btn-success mt-2 d-inline d-md-none" href="<?php echo base_url('excel-export');?>">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
			<h4 class="title ml-2" style="text-transform:capitalize;"></h4>
			<!-- <p class="category">Last Campaign Performance</p> -->
		</div>

    <div class="content">
			<di cv class="content table-responsive table-full-width">
            <?php echo $this->session->flashdata('sukses'); ?>
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
                        <th>Tindakan</th>
					</thead>
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
								<td class="tindakan">
                                    <div class="btn-group d-none d-md-inline" role="group">
                                        <a href="#" class="btn btn-info" title="Lihat"><i class="fas fa-eye"></i> Info</a>
                                        <a href="<?php echo base_url('admin/editGuru/'. $gr['id_guru']); ?>" class="btn btn-success" title="Ubah"><i class="fas fa-pen"></i> Edit</a>
                                        <a href="#" class="btn btn-danger" title="Hapus"><i class="fas fa-trash"></i> Delete</a>
                                    </div>
                                    <div class="d-inline d-md-none">
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-info" title="Lihat"><i class="fas fa-eye"></i></a>
                                            <a href="<?php echo base_url('admin/editGuru/'. $gr['id_guru']); ?>" class="btn btn-success" title="Ubah"><i class="fas fa-pen"></i></a>
                                            <a href="#" class="btn btn-danger" title="Hapus"><i class="fas fa-trash"></i></a>
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

<script>
$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
});
</script>