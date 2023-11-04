    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="header">
        <a type="button" class="btn btn-primary ml-2 mt-2" href="<?php echo base_url('admin/kelas') ;?>">
            Kembali</a>
			<h4 class="title ml-2" style="text-transform:capitalize;"></h4>
			<!-- <p class="category">Last Campaign Performance</p> -->
		</div>

          <div class="content">
          <div class="modal-body">
        <form  method="post" action="<?php echo base_url('admin/inputKelas'); ?>">
          <div class="form-group">
                <label for="pilihKelas">Nama Kelas</label>
                <select class="form-control" id="pilihKelas" name="pilihKelas">
                    <option value="">-Pilih Kelas-</option>
                <?php foreach ($pilih_kelas as $kls) : ?>
                    <option value="<?php echo $kls; ?>"><?php echo $kls; ?></option>
                <?php endforeach; ?>
                </select>
                <?php echo form_error('namaKelas', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
                <label for="pilihGuru">Nama Guru</label>
                <select class="form-control" id="pilihGuru" name="pilihGuru">
                    <option value="">-Pilih Pengajar-</option>
                <?php foreach ($pilih_guru as $gr) : ?>
                    <option value="<?php echo $gr['nama']; ?>"><?php echo $gr['nama']; ?></option>
                <?php endforeach; ?>
                </select>
                <?php echo form_error('namaKelas', '<small class="text-danger">', '</small>'); ?>
          </div>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" href="<?php echo base_url('admin/kelas'); ?>">Tutup</a>
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