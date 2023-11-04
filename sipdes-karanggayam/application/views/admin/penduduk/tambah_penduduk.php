    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="header">
        <a type="button" class="btn btn-primary ml-2 mt-2" href="<?php echo base_url('admin/penduduk') ;?>">
            Kembali</a>
		</div>
          <div class="content">
          <div class="modal-body">
        <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/input_penduduk'); ?>">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="nik">NIK</label>
                <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK">
                <?php echo form_error('nik', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
                  <?php echo form_error('name', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
            <div>
            <div class="row">
              <div class="form-group col-md-3">
                <label for="tempatLahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir">
                <?php echo form_error('tempatLahir', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-3">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control" id="datepicker" name="tanggalLahir" placeholder>
                <?php echo form_error('tanggalLahir', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group col-md-3">
                    <label for="gender">Jenis Kelamin</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="">-Pilih Jenis Kelamin-</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <?php echo form_error('gender', '<small class="text-danger">', '</small>'); ?>
               </div>
               <div class="form-group col-md-3">
                    <label for="blood_type">Golongan Darah</label>
                    <select class="form-control" id="blood_type" name="blood_type">
                        <option value="">-Pilih Golongan Darah-</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                    <?php echo form_error('blood_type', '<small class="text-danger">', '</small>'); ?>
               </div>
            </div>
            <div class="row">
            <div class="form-group col-md-4">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Alamat">
              <?php echo form_error('address', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="dusun">Dusun</label>
              <input type="text" class="form-control" id="dusun" name="dusun" placeholder="Dusun">
              <?php echo form_error('dusun', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
              <label for="rt_rw">RT/RW</label>
              <input type="text" class="form-control" id="rt_rw" name="rt_rw" placeholder="RT/RW">
              <?php echo form_error('rt_rw', '<small class="text-danger">', '</small>'); ?>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-3">
              <label for="village">Desa</label>
              <input type="text" class="form-control" id="village" name="village" placeholder="Desa">
              <?php echo form_error('village', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-3">
              <label for="subdistrict">Kecamatan</label>
              <input type="text" class="form-control" id="subdistrict" name="subdistrict" placeholder="Kecamatan">
              <?php echo form_error('subdistrict', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-3">
              <label for="regency">Kabupaten</label>
              <input type="text" class="form-control" id="regency" name="regency" placeholder="Kabupaten">
              <?php echo form_error('regency', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-3">
              <label for="province">Provinsi</label>
              <input type="text" class="form-control" id="province" name="province" placeholder="Provinsi">
              <?php echo form_error('province', '<small class="text-danger">', '</small>'); ?>
            </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="religion">Agama</label>
                    <input type="text" class="form-control" id="religion" name="religion" placeholder="Agama">
                    <?php echo form_error('religion', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-3">
                    <label for="is_married">Status Perkawinan</label>
                    <input type="text" class="form-control" id="is_married" name="is_married" placeholder="Status Perkawinan">
                    <?php echo form_error('is_married', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-3">
                    <label for="job_status">Pekerjaan</label>
                    <input type="text" class="form-control" id="job_status" name="job_status" placeholder="Pekerjaan">
                    <?php echo form_error('job_status', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-3">
                    <label for="citizenship">Kewarganegaraan</label>
                    <input type="text" class="form-control" id="citizenship" name="citizenship" placeholder="Kewarganegaraan">
                    <?php echo form_error('citizenship', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" href="<?php echo base_url('admin/penduduk'); ?>">Tutup</a>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
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