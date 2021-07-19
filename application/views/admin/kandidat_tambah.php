<section class="content">

 <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message'); ?>
              <h3 class="box-title"><?php echo $title ?></h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form action="<?php echo site_url('admin/kandidat/simpan'); ?>" method="post">

                <div class="form-group">
                  <label for="nama_kandidat">Nama Kandidat</label>
                  <input type="text" name="nama_kandidat" id="nama_kandidat" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="nama_calon">Nama Calon</label>
                  <input type="text" name="nama_calon" id="nama_calon" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" name="foto" id="foto" class="form-control">
                </div>


                <a href="<?php echo site_url('admin/kandidat'); ?>" class="btn bg-olive "><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn bg-navy" ><i fa fa-save></i> Simpan</button>
                
              </form>
              
            </div>
 </div>
</section>


      
      
      

    





