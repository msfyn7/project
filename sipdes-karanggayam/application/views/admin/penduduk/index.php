    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="header">
                <div class="ml-1 mb-2 mr-2 float-left">
                    <!-- Tombol dengan ikon dan teks (untuk layar desktop) -->
                    <a type="button" class="btn btn-primary ml-2 mt-2 d-none d-md-inline" href="<?php echo base_url('admin/tambah_penduduk');?>">Tambah Penduduk</a>
                    <!-- Tombol hanya dengan ikon (untuk layar ponsel) -->
                    <a type="button" class="btn btn-primary ml-2 mt-2 d-inline d-md-none" href="<?php echo base_url('admin/tambah_penduduk');?>"><i class="fas fa-plus"></i></a>
                     <!-- Tombol dengan ikon dan teks (untuk layar desktop) -->
                    <a type="button" class="btn btn-success mt-2 d-none d-md-inline" href="<?php echo base_url('excel/export');?>">
                        <i class="fas fa-download"></i> Export Excel
                    </a>
                    <!-- Tombol hanya dengan ikon (untuk layar ponsel) -->
                    <a type="button" class="btn btn-success mt-2 d-inline d-md-none" href="<?php echo base_url('excel/export');?>">
                        <i class="fas fa-download"></i>
                    </a>
                    <!-- Tombol dengan ikon dan teks (untuk layar desktop) -->
                    <a type="button" class="btn btn-success mt-2 d-none d-md-inline" href="<?php echo base_url('print/file');?>">
                        <i class="fas fa-print"></i> Print File
                    </a>
                    <!-- Tombol hanya dengan ikon (untuk layar ponsel) -->
                    <a type="button" class="btn btn-success mt-2 d-inline d-md-none" href="<?php echo base_url('print/file');?>">
                        <i class="fas fa-print"></i>
                    </a>
                </div>
			<h4 class="title ml-2" style="text-transform:capitalize;"></h4>
			<!-- <p class="category">Last Campaign Performance</p> -->
		</div>
    <div class="content">
			<div class="content table-responsive table-full-width">
            <?php echo $this->session->flashdata('notif'); ?>
				<table class="table table-hover table-striped table-responsive">
					<thead>
						<th>#</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Golongan Darah</th>
						<th>Alamat</th>
						<th>Dusun</th>
						<th>RT/RW</th>
						<th>Desa</th>
						<th>Kecamatan</th>
						<th>Kabupaten</th>
						<th>Provinsi</th>
						<th>Agama</th>
						<th>Status Perkawinan</th>
						<th>Pekerjaan</th>
						<th>Kewarganegaraan</th>
                        <th>Tindakan</th>
					</thead>
					<tbody>
						<?php $i=1; foreach ($penduduk as $pnddk) { ?>      
							<tr>
								<td><?= $i++; ?></td>
								<td><?php echo $pnddk['nik']; ?></td>
								<td><?php echo $pnddk['name']; ?></td>
								<td><?php echo $pnddk['place_of_birth']; ?></td>
								<td><?php echo $pnddk['date_of_birth']; ?></td>
								<td><?php echo $pnddk['gender']; ?></td>
								<td><?php echo $pnddk['blood_type']; ?></td>
								<td><?php echo $pnddk['address']; ?></td>
								<td><?php echo $pnddk['dusun']; ?></td>
								<td><?php echo $pnddk['rt_rw']; ?></td>
								<td><?php echo $pnddk['village']; ?></td>
								<td><?php echo $pnddk['subdistrict']; ?></td>
								<td><?php echo $pnddk['regency']; ?></td>
								<td><?php echo $pnddk['province']; ?></td>
								<td><?php echo $pnddk['religion']; ?></td>
								<td><?php echo $pnddk['is_married']; ?></td>
								<td><?php echo $pnddk['job_status']; ?></td>
								<td><?php echo $pnddk['citizenship']; ?></td>
								<td class="tindakan">
								    <div class="d-none d-md-inline">
                                        <div class="btn-group" role="group">
                                            <!--<a href="#" class="btn btn-info" title="Lihat"><i class="fas fa-eye"></i> Info</a>&nbsp;&nbsp;-->
                                            <a href="<?php echo base_url('admin/ubah_penduduk/'.$pnddk['nik']); ?>" class="btn btn-info" title="Ubah"><i class="fas fa-pen"></i> Edit</a>&nbsp;&nbsp;
                                            <a href="<?php echo base_url('admin/hapus_penduduk/'.$pnddk['nik']); ?>" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah kamu yakin mau menghapus data ini?')"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                    <div class="d-inline d-md-none">
                                        <div class="btn-group" role="group">
                                            <!--<a href="#" class="btn btn-info" title="Lihat"><i class="fas fa-eye"></i></a>&nbsp;&nbsp;-->
                                            <a href="<?php echo base_url('admin/ubah_penduduk/'. $pnddk['nik']); ?>" class="btn btn-info" title="Ubah"><i class="fas fa-pen"></i></a>&nbsp;&nbsp;
                                            <a href="<?php echo base_url('admin/hapus_penduduk/'.$pnddk['nik']); ?>" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah kamu yakin mau menghapus data ini?')"><i class="fas fa-trash"></i></a>
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