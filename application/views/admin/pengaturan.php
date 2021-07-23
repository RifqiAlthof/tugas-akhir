<section class="content">
	<div class="box">
		<div class="box-header">
			<?php echo $this->session->flashdata('message'); ?>
			<h3 class="box-title"><?php echo $title ?></h3>
		</div>
		<div class="box-body">
			<h3 class="m-0 font-weight-bold text-dark">Waktu Pemilihan</h3>
			<form action="<?php echo site_url('admin/pengaturan/simpan'); ?>" method="post">
				<div class="row mb-4" style="margin-bottom: 10px">
					<div class="col-md-6">
						<label for="mulai">Tanggal dan jam pemilu</label>
						<input type="hidden" name="id" value="<?= $pengaturan->id; ?>">
						<input required type="text" class="mulai form-control" id="mulai" name="mulai"
							   value="<?= (isset($pengaturan->mulai) ? $pengaturan->mulai : ''); ?>">
					</div>
					<div class="col-md-6">
						<label for="selesai">Tanggal dan jam selesai pemilu</label>
						<input type="text" required class="selesai form-control" id="selesai"
							   name="selesai"
							   value="<?= (isset($pengaturan->selesai) ? $pengaturan->selesai : ''); ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<button type="submit" class="btn bg-navy"><i fa fa-save></i> Simpan Pengaturan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<script>
	$(".mulai, .selesai").flatpickr({
		"minDate": "today",
		enableTime: true,
		dateFormat: "Y-m-d H:i:ss",
	});
	// $(".selesai").flatpickr();
</script>
      
      

    





