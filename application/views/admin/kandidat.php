<section class="content">

   <div class="box">
    <div class="box-header">

       <!--  <?php echo $this->session->flashdata('message'); ?>
        <h3 class="box-title"><?php echo $title ?></h3> -->

        <?php echo $this->session->flashdata('message'); ?>
         <a href="<?php echo site_url('admin/kandidat/tambah'); ?>" class="btn bg-olive "><i class="fa fa-plus-circle"></i> Tambah Kandidat</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
               <tr>
                <th>No</th>
                <th>Nama Kandidat</th>
                <th>Nama Calon</th>
                <th>Foto</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            <?php $no= 1;
            foreach ($rows as $row) : 
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->nama_kandidat ?></td>
                    <td><?php echo $row->nama_calon ?></td>
                    <td>
                        <img src="<?php echo base_url('assets/img/'.$row->foto); ?>" width="100">
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/kandidat/edit/' . $row->id); ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil-square-o"></i> Edit</a>
                            <a href="<?php echo site_url('admin/kandidat/hapus/' . $row->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau dihapus?')">
                                        <i class="fa fa-trash-o"></i> Hapus</a>

                        </td>
                    </tr> 
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</section>