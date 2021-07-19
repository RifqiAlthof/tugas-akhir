<section class="sec1" id="sec1">
  <div class="container">
    <div class="row">
      <div class="col-md-6">

        <h2 class="display-4 text-primary mt-5 h2-sec1">Selamat Datang <br>Di E-Voting </h2>
        <p class="text-secondary p-sec1">Silahkan gunakan hak suara anda untuk <br> menentukan kepala lingkungan yang baru</p>
       <div class="a-sec1">
         <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">Login disini </a>
        <a href="#sec2" class="btn btn-secondary">Buat akun </a>
       </div>
        
        
      </div>
      <div class="col-md-6">
        <img src="<?php echo base_url('assets/img/A1.jpg'); ?>" class="img-fluid img-sec1">
      </div>
    </div>
  </div>
</section>

<section class="sec2" id="sec2">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
       <img src="<?php echo base_url('assets/img/A3.jpg'); ?>" class="img-fluid img-sec2">
       </div>

       <div class="col-md-6">
         <h2 class="text-primary h2-sec2" >Belum punya akun?</h2>
         <p class="text-secondary p-sec2" > Silahkan daftar terlebih dahulu diri anda di form bawah ini, jika sudah silahkan login lalu pilih menu voting</p>
         <form action="<?php echo site_url('Auth/registrasi'); ?>" method="post">

           <div class="form-group">
             <label for="nama" class="text-secondary">Nama*</label>
             <input type="text" name="nama" class="form-control" value="<?php echo set_value('nama') ?>">
             <?php echo form_error('nama', '<span class="text-danger small pl-3">', '</span>'); ?>
           </div>

            <div class="form-group">
             <label for="nik" class="text-secondary">NIK*</label>
             <input type="text" name="nik" class="form-control">
              <?php echo form_error('nik', '<span class="text-danger small pl-3">', '</span>'); ?>
           </div>

           <div class="form-group">
             <label for="ttl" class="text-secondary">TTL*</label>
             <input type="text" name="ttl" class="form-control" value="<?php echo set_value('ttl') ?>">
              <?php echo form_error('ttl', '<span class="text-danger small pl-3">', '</span>'); ?>
           </div>

           <div class="form-group">
             <label for="id_RT" class="text-secondary">RT/RW *</label>
             <select name="id_RT" id="id_RT" class="form-control">
               <?php foreach ($rt as $r) : ?> 
                 <option value="<?php echo $r->id ?>"><?php echo $r->nama ?></option>
               <?php endforeach; ?>
               
             </select>
           </div>

           <button type="submit" class="btn btn-primary"> Registrasi Akun </button>

         </form>
       </div>
    </div>
  </div>
  
</section>



<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="exampleModalLabel">Form Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="<?php echo site_url('Auth/login'); ?>" method="post">
          <div class="form-group">
          <label class ="text-secondary"for="nama"> Nama </label>
          <input type="text" name="nama" id="nama" class="form-control">
        </div>

          <div class="form-group">
          <label class ="text-secondary" for="nik"> NIK </label>
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
