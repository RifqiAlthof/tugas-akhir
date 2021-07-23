<section class="content">

 <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message'); ?>
              <h3 class="box-title"><?php echo $title ?></h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form action="<?php echo site_url('admin/home/simpan'); ?>" method="post">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark">Waktu Pemilihan</h6>
            </div>
            <div class="card-body">
              <form class="needs-validation" novalidate method="post" action="pengaturan.php" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="mulai">Tanggal dan jam pemilu</label>
                    <input type="datetime-local" class="form-control" id="mulai" name="mulai" value="">
                      </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="selesai">Tanggal dan jam selesai pemilu</label>
                    <input type="datetime-local" class="form-control" id="selesai" name="selesai"  value="">
                    
                  </div>
                </div>

                
                <button type="submit" class="btn bg-navy" ><i fa fa-save></i> Simpan</button>
                
              </form>
              
            </div>

</div>
</section>


      
      
      

    





