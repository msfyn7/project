    <!-- Main content -->
    <section class="content">
        
      <!-- Default box -->
      <div class="card">
        <div class="header">
        <a type="button" class="btn btn-primary ml-2 mt-2" href="<?php echo base_url('admin/surat_kelahiran'); ?>">
            Kembali</a>
		</div>
<div class="content">
    <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/input_data_kelahiran'); ?>">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="no_surat">No. Surat</label>
                <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="Nomor Surat" value="<?php echo $no_surat ?>" readonly>
                <?php echo form_error('no_surat', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                  <label for="baby_name">Nama Bayi</label>
                  <input type="text" class="form-control" id="baby_name" name="baby_name" placeholder="Nama Bayi" value="<?= set_value('baby_name'); ?>">
                  <?php echo form_error('baby_name', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
            <div class="row">
            <div class="form-group col-md-4">
                <label for="tempatLahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir" value="<?= set_value('tempatLahir'); ?>">
                <?php echo form_error('tempatLahir', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="datepicker">Tanggal Lahir</label>
                <input type="text" class="form-control" id="datepicker" name="tanggalLahir" placeholder="Tanggal Lahir" value="<?= set_value('tanggalLahir'); ?>">
                <?php echo form_error('tanggalLahir', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="gender">Jenis Kelamin</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="">-Pilih Jenis Kelamin-</option>
                    <option value="Laki-laki" <?= set_select('gender', 'Laki-laki'); ?>>Laki-laki</option>
                    <option value="Perempuan" <?= set_select('gender', 'Perempuan'); ?>>Perempuan</option>
                </select>
                <?php echo form_error('gender', '<small class="text-danger">', '</small>'); ?>
            </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="father_name">Nama Ayah</label>
                    <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Nama Ayah" value="<?= set_value('father_name'); ?>">
                    <?php echo form_error('father_name', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="mother_name">Nama Ibu</label>
                    <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Nama Ibu" value="<?= set_value('mother_name'); ?>">
                    <?php echo form_error('mother_name', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Alamat" value="<?= set_value('address'); ?>">
                    <?php echo form_error('address', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="surat_pengantar">Surat Pengantar</label>
                    <input type="file" class="form-control" id="surat_pengantar" name="surat_pengantar">
                    <?php echo form_error('surat_pengantar', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="surat_ket_lahir">Surat Keterangan Lahir</label>
                    <input type="file" class="form-control" id="surat_ket_lahir" name="surat_ket_lahir">
                    <?php echo form_error('surat_ket_lahir', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="book_of_married">Buku Nikah</label>
                    <input type="file" class="form-control" id="book_of_married" name="book_of_married">
                    <?php echo form_error('book_of_married', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="father_id">KTP Ayah</label>
                    <input type="file" class="form-control" id="father_id" name="father_id">
                    <?php echo form_error('father_id', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="mother_id">KTP Ibu</label>
                    <input type="file" class="form-control" id="mother_id" name="mother_id">
                    <?php echo form_error('mother_id', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="kk">Kartu Keluarga (KK)</label>
                    <input type="file" class="form-control" id="kk" name="kk">
                    <?php echo form_error('kk', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" href="<?php echo base_url('admin/surat'); ?>">Tutup</a>
              <button type="submit" class="btn btn-primary">Buat Surat</button>
            </div>
        </form>
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