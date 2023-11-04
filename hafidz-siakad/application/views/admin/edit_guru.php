    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="header">
        <a type="button" class="btn btn-primary ml-2 mt-2" href="<?php echo base_url('admin/guru') ;?>">
            Kembali</a>
			<h4 class="title ml-2" style="text-transform:capitalize;"></h4>
			<!-- <p class="category">Last Campaign Performance</p> -->
		</div>

          <div class="content">
          <div class="modal-body">
            <?php foreach ($guru as $g) { ?>
        <form  method="post" action="<?php echo base_url('admin/updateGuru'); ?>">
          <div class="form-group">
            <label for="nis">NIG</label>
            <input type="hidden" name="id" value="<?php echo $g->id_guru; ?>">
            <input type="number" class="form-control" id="nig" name="nig" placeholder="NIG" value="<?php echo $g->nig; ?>">
            <?php echo form_error('nig', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?php echo $g->nama; ?>">
              <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                    <option value="<?php echo $g->jenis_kelamin; ?>" selected="selected" disabled="disabled"><?php echo $g->jenis_kelamin; ?></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <?php echo form_error('jenisKelamin', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="tempatLahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir" value="<?php echo $g->tempat_lahir; ?>">
                <?php echo form_error('tempatLahir', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control" id="datepicker" name="tanggalLahir" placeholder="Tanggal Lahir" value="<?php echo $g->tanggal_lahir; ?>">
                <?php echo form_error('tanggalLahir', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" value="<?php echo $g->alamat; ?>">
              <?php echo form_error('alamat', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="nomorHp">Nomor HP</label>
                <input type="text" class="form-control" id="nomorHp" placeholder="Nomor HP" name="nomorHP" value="<?php echo $g->nomor_hp; ?>">
                <?php echo form_error('nomorHP', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" href="<?php echo base_url('admin/guru'); ?>">Tutup</a>
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