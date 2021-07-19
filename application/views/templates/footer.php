<footer class="text-secondary text-center">Copyright E-VOTING KEPALA LINGKUNGAN TAMAN SERUNI AS - RIFQI ALTHOF 2021</footer>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/'); ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>sweetalert/sweetalert2.all.min.js"></script>

    <script>
    	$(document).ready(function(){
    		$('.nav-active').on('click', function(){
    			$('.nav-active').removeClass('active');
    			$(this).addClass('active');
    		});
            $('.btn-success').on('click', function(){
                let nama_kandidat = $(this).data('nama_kandidat');
                let id_user = $(this).data('id_user');

                Swal.fire({
                  title: 'Apakah anda yakin?',
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yakin'
                }).then((result) => {
                  if (result.isConfirmed) {
                   $.ajax({
                    type: 'post',
                    url: '<?php echo site_url('home/pilih_kandidat/') ?>',
                    dataType: 'json',
                    data: {
                    
                        'id_user': id_user,
                        'nama_kandidat': nama_kandidat,
                    },
                    success: function(result) {
                        if (result.success == true) {
                            Swal.fire({
                              title: 'Terima kasih sudah berpartisipasi',
                              icon: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              confirmButtonText: 'Ok!'
                            }).then((result) => {
                              if (result.isConfirmed) {
                                    location.reload();
                              }
                            })
                        }

                    }
                   })
                  }
                })
            })
    	});
    </script>
  </body>
</html>