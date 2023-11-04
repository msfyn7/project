    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="header">
        <a type="button" class="btn btn-primary ml-2 mt-2" href="<?php echo base_url('admin/santri') ;?>">
            Kembali</a>
			<h4 class="title ml-2" style="text-transform:capitalize;"></h4>
			<!-- <p class="category">Last Campaign Performance</p> -->
		</div>

          <div class="content">
          <div class="modal-body">
            <?php foreach ($santri as $s) { ?>
        <form  method="post" action="<?php echo base_url('admin/updateSantri'); ?>">
          <div class="form-group">
            <label for="nis">NIS</label>
            <input type="hidden" name="id" value="<?php echo $s->id_santri; ?>">
            <input type="number" class="form-control" id="nis" name="nis" placeholder="NIS" value="<?php echo $s->nis; ?>">
            <?php echo form_error('nis', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?php echo $s->nama; ?>">
              <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                    <option value="<?php echo $s->jenis_kelamin; ?>" selected="selected" disabled="disabled"><?php echo $s->jenis_kelamin; ?></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <?php echo form_error('jenisKelamin', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="tempatLahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir" value="<?php echo $s->tempat_lahir; ?>">
                <?php echo form_error('tempatLahir', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control" id="datepicker" name="tanggalLahir" placeholder="Tanggal Lahir" value="<?php echo $s->tanggal_lahir; ?>">
                <?php echo form_error('tanggalLahir', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" value="<?php echo $s->alamat; ?>">
              <?php echo form_error('alamat', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="nomorHp">Nomor HP</label>
                <input type="text" class="form-control" id="nomorHp" placeholder="Nomor HP" name="nomorHP" value="<?php echo $s->nomor_hp; ?>">
                <?php echo form_error('nomorHP', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="namaAyah">Nama Ayah</label>
                <input type="text" class="form-control" id="namaAyah" placeholder="Nama Ayah" name="namaAyah" value="<?php echo $s->nama_ayah; ?>">
                <?php echo form_error('namaAyah', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="pekerjaan1">Pekerjaan Ayah</label>
                <input type="text" class="form-control" id="pekerjaan1" placeholder="Pekerjaan Ayah" name="pekerjaan1" value="<?php echo $s->pekerjaan1 ?>">
                <?php echo form_error('pekerjaan1', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="namaIbu">Nama Ibu</label>
              <input type="text" class="form-control" id="namaIbu" placeholder="Nama Ibu" name="namaIbu" value="<?php echo $s->nama_ibu; ?>">
              <?php echo form_error('namaIbu', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="pekerjaan2">Pekerjaan Ibu</label>
                <input type="text" class="form-control" id="pekerjaan2" placeholder="Pekerjaan Ibu" name="pekerjaan2" value="<?php echo $s->pekerjaan2; ?>">
                <?php echo form_error('pekerjaan2', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" href="<?php echo base_url('admin/santri'); ?>">Tutup</a>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
            <?php } ?>
      </div>
	    </div>
</div>

<script type="text/javascript">

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>

<script>

$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
});

</script>