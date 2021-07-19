<section class="content">

 <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message'); ?>
              <h3 class="box-title"><?php echo $title ?></h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form action="<?php echo site_url('admin/user/simpan'); ?>" method="post">

                <div class="form-group">
                  <label for="id_rt">RT</label>
                  <select name="id_rt" id="id_rt" class="form-control">
                  <?php foreach ($rt as $r) : ?>
                    <option value="<?php echo $r->id ?>"><?php echo $r->nama ?></option>
                  <?php endforeach; ?>
                  </select>
                  
                </div>

                <div class="form-group">
                  <label for="nama">Nama *</label>
                  <input type="text" name="nama" id="nama" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="nik">NIK *</label>
                  <input type="password" name="nik" id="nik" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="ttl">TTL *</label>
                  <input type="text" name="ttl" id="ttl" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="level">Level</label>
                  <select name="level" id="level" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="warga">Warga</option>
                  </select>
                </div>

                <a href="<?php echo site_url('admin/user'); ?>" class="btn bg-olive "><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn bg-navy" ><i fa fa-save></i> Simpan</button>
                
              </form>
              
            </div>
 </div>
</section>


      
      
      

    





