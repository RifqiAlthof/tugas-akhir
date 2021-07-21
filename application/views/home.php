<section class="sec1" id="sec1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="display-4 text-primary mt-5 h2-sec1 text-center">Perolehan Suara</h2>
				<div class="row">
					<div class="col-md-6">
						<canvas id="myChart" height="263"></canvas>
					</div>
					<div class="col-md-6">
						<canvas id="myChart1" height="263"></canvas>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<section class="sec2" id="sec2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 style="padding-top: 50px; " class="display-4 text-primary mt-5 h2-sec1 text-center">Voting</h2>
			</div>
		</div>

		<div class="row">
			<?php foreach ($kandidat as $knd) : ?>

				<div class="col-md-4">

					<div class="card mb-3">
						<img src="<?php echo base_url('assets/img/' . $knd->foto) ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-center text-primary font-weight-bold"><?php echo $knd->nama_kandidat ?></h5>
							<p class="card-text text-center text-secondary"><?php echo $knd->nama_calon ?></p>
							<div class="d-flex justify-content-between">
								<a href="<?php echo site_url('home/visimisi/' . $knd->id); ?>"
								   class="btn btn-primary btn-sm">Lihat Visi & Misi</a>
								<?php if ($user->status == 0) : ?>
									<a href="#" id="vot" class="vot btn btn-success btn-sm"
									   data-nama_kandidat="<?php echo $knd->nama_kandidat ?>"
									   data-id_user="<?php echo $this->session->userdata('id'); ?>">Pilih <?php echo $knd->nama_kandidat ?></a>
								<?php else : ?>
									Anda sudah memilih
									<!--              <button class="btn btn-success btn-sm" disabled>Pilih --><?php //echo $knd->nama_kandidat ?><!--</button>-->
								<?php endif; ?>


							</div>
						</div>

					</div>

				</div>
			<?php endforeach; ?>
		</div>
	</div>

</section>


<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form action="<?php echo site_url('Auth/login'); ?>" method="post">
					<div class="form-group">
						<label class="text-secondary" for="nama"> Nama </label>
						<input type="text" name="nama" id="nama" class="form-control">
					</div>

					<div class="form-group">
						<label class="text-secondary" for="nik"> NIK </label>
						<input type="password" name="nik" id="nik" class="form-control">

					</div>

					<button type="submit" class="btn btn-primary">Login</button>

				</form>
			</div>
			<div class="modal-footer">

			</div>
		</div>
	</div>
</div>

<script>
	var ctx = document.getElementById('myChart').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
			datasets: [{
				label: '# Hasil Suara',
				data: [
					<?php echo $kandidat1 ?>,
					<?php echo $kandidat2 ?>,
					<?php echo $kandidat3 ?>,
					0,
				],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'

				],
				borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'

				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		}
	});
</script>

<script>
	var ctx = document.getElementById('myChart1').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
			datasets: [{
				label: '# Hasil Suara',
				data: [
					<?php echo $kandidat1 ?>,
					<?php echo $kandidat2 ?>,
					<?php echo $kandidat3 ?>,
				],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'

				],
				borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'

				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		}
	});
</script>
<script>
	$(document).ready(function () {
		if (dateCheck("<?=$waktu['mulai']?>", "<?=$waktu['selesai']?>", "<?=$waktu['today']?>")) {
			$('.vot').attr('class', 'btn btn-success btn-sm vot');
			// $('.vot').after("<p>Waktu memilih telah habis</p>")
			console.log('pilih')
		} else {
			console.log('timeout')
			$('.vot').attr('class', 'disabled btn btn-success btn-sm vot').hide();
			$('.vot').after("<small>Waktu memilih telah habis/belum mulai</small>")
		}

		function dateCheck(from, to, check) {
			var fDate, lDate, cDate;
			fDate = Date.parse(from);
			lDate = Date.parse(to);
			cDate = Date.parse(check);
			if ((cDate <= lDate && cDate >= fDate)) {
				return true;
			}
			return false;
		}
	});
</script>
