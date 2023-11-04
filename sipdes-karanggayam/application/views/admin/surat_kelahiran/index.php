    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="header">
            <div class="ml-1 mb-2 mr-2 float-left">
                <!-- Tombol dengan ikon dan teks (untuk layar desktop) -->
                <a type="button" class="btn btn-primary ml-2 mt-2 d-none d-md-inline" href="<?php echo base_url('admin/create_surat_kelahiran');?>">Buat Surat Kelahiran</a>
                <!-- Tombol hanya dengan ikon (untuk layar ponsel) -->
                <a type="button" class="btn btn-primary ml-2 mt-2 d-inline d-md-none" href="<?php echo base_url('admin/create_surat_kelahiran');?>"><i class="fas fa-plus"></i></a>
            </div>
		</div>
			<h4 class="title ml-2" style="text-transform:capitalize;"> # Surat Baru</h4>
			<!-- <p class="category">Last Campaign Performance</p> -->

        <div class="content">
			<div class="content table-responsive table-full-width">
            <?php echo $this->session->flashdata('notif'); ?>
				<table class="table table-hover table-striped table-responsive">
					<thead>
						<th>#</th>
						<th>No. Surat</th>
						<th>Nama Bayi</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Nama Ayah</th>
						<th>Nama Ibu</th>
						<th>Surat Pengantar</th>
						<th>Surat Keterangan Lahir</th>
						<th>Buku Nikah</th>
						<th>KTP Ayah</th>
						<th>KTP Ibu</th>
						<th>Kartu Keluarga</th>
						<th>Tanggal Permohonan</th>
						<th>Tanggal Edit</th>
                        <th>Tindakan</th>
					</thead>
					<tbody>
			    <?php $i=1; foreach($surat as $dt_srt) { ?>      
							<tr>
								<td><?= $i++; ?></td>
								<td><?php echo $dt_srt['no_surat']; ?></td>
								<td><?php echo $dt_srt['baby_name']; ?></td>
								<td><?php echo $dt_srt['tempat_lahir']; ?></td>
								<td><?php echo $dt_srt['tanggal_lahir']; ?></td>
								<td><?php echo $dt_srt['gender']; ?></td>
								<td><?php echo $dt_srt['father_name']; ?></td>
								<td><?php echo $dt_srt['mother_name']; ?></td>
								<td>
								    <?php if (!empty($dt_srt['surat_pengantar'])) { ?>
								    <a class="badge badge-success" href="<?php echo base_url('uploads/').$dt_srt['surat_pengantar']; ?>" target="_blank">Lihat Lampiran</a>
								    <?php } else { ?>
								    <p class="badge badge-warning">Lampiran tidak tersedia</p>
								    <?php } ?>
								</td>
								<td>
								    <?php if (!empty($dt_srt['surat_ket_lahir'])) { ?>
								    <a class="badge badge-success" href="<?php echo base_url('uploads/').$dt_srt['surat_ket_lahir']; ?>" target="_blank">Lihat Lampiran</a>
								    <?php } else { ?>
								    <p class="badge badge-warning">Lampiran tidak tersedia</p>
								    <?php } ?>
								</td>
								<td>
								    <?php if (!empty($dt_srt['book_of_married'])) { ?>
								    <a class="badge badge-success" href="<?php echo base_url('uploads/').$dt_srt['book_of_married']; ?>" target="_blank">Lihat Lampiran</a>
								    <?php } else { ?>
								    <p class="badge badge-warning">Lampiran tidak tersedia</p>
								    <?php } ?>
								</td>
								<td>
								    <?php if (!empty($dt_srt['father_id'])) { ?>
								    <a class="badge badge-success" href="<?php echo base_url('uploads/').$dt_srt['father_id']; ?>" target="_blank">Lihat Lampiran</a>
								    <?php } else { ?>
								    <p class="badge badge-warning">Lampiran tidak tersedia</p>
								    <?php } ?>
								</td>
								<td>
								    <?php if (!empty($dt_srt['mother_id'])) { ?>
								    <a class="badge badge-success" href="<?php echo base_url('uploads/').$dt_srt['mother_id']; ?>" target="_blank">Lihat Lampiran</a>
								    <?php } else { ?>
								    <p class="badge badge-warning">Lampiran tidak tersedia</p>
								    <?php } ?>
								</td>
								<td>
								    <?php if (!empty($dt_srt['kk'])) { ?>
								    <a class="badge badge-success" href="<?php echo base_url('uploads/').$dt_srt['kk']; ?>" target="_blank">Lihat Lampiran</a>
								    <?php } else { ?>
								    <p class="badge badge-warning">Lampiran tidak tersedia</p>
								    <?php } ?>
								</td>
								<td><?php echo $dt_srt['tgl_permohonan']; ?></td>
								<td><?php echo $dt_srt['tgl_edit']; ?></td>
								<td class="tindakan">
								    <div class="d-none d-md-inline">
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-success" title="Setujui"><i class="fas fa-check-circle"></i> Setujui</a>&nbsp;&nbsp;
                                            <!--<a href="#" class="btn btn-info" title="Lihat"><i class="fas fa-eye"></i> Lihat</a>&nbsp;&nbsp;-->
                                            <a href="<?php echo base_url('admin/edit_srt_kelahiran/').$dt_srt['id']; ?>" class="btn btn-info" title="edit"><i class="fas fa-pen"></i> Edit</a>&nbsp;&nbsp;
                                            <a href="<?php echo base_url('admin/delete_srt_kelahiran/').$dt_srt['id']; ?>" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                    <div class="d-inline d-md-none">
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-success" title="Setujui"><i class="fas fa-check-circle"></i></a>&nbsp;&nbsp;
                                            <!--<a href="#" class="btn btn-info" title="Lihat"><i class="fas fa-eye"></i></a>&nbsp;&nbsp;-->
                                            <a href="<?php echo base_url('admin/edit_srt_kelahiran/').$dt_srt['id']; ?>" class="btn btn-info" title="edit"><i class="fas fa-pen"></i></a>&nbsp;&nbsp;
                                            <a href="<?php echo base_url('admin/delete_srt_kelahiran/').$dt_srt['id'];; ?>" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
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