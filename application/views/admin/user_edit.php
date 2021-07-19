<section class="content">

 <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('message'); ?>
              <h3 class="box-title"><?php echo $title ?></h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <form action="<?php echo site_url('admin/user/update'); ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $row->id ?>">

                <div class="form-group">
                  <label for="id_rt">RT</label>
                  <select name="id_rt" id="id_rt" class="form-control">
                  <?php foreach ($rt as $r) : ?>
                    <option value="<?php echo $r->id ?>" <?php echo $row->id_RT == $r->id ? 'selected' : '' ?>><?php echo $r->nama ?></option>
                  <?php endforeach; ?>
                  </select>
                  
                </div>

                <div class="form-group">
                  <label for="nama">Nama *</label>
                  <input type="text" name="nama" id="nama" class="form-control" required value="<?php echo $row->nama ?>">
                </div>


                <div class="form-group">
                  <label for="ttl">TTL *</label>
                  <input type="text" name="ttl" id="ttl" class="form-control" required value="<?php echo $row->ttl ?>">
                </div>

                <div class="form-group">
                  <label for="level">Level</label>
                  <select name="level" id="level" class="form-control">
                    <option value="admin" <?php echo $row->level == 'admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="warga" <?php echo $row->level == 'warga' ? 'selected' : '' ?>>Warga</option>
                  </select>
                </div>

                <a href="<?php echo site_url('admin/user'); ?>" class="btn bg-olive "><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn bg-navy" ><i fa fa-save></i> Update</button>
                
              </form>
              
            </div>
 </div>
</section>


      
      
      

    





