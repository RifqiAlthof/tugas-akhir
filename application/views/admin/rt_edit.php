<section class="content">
	<div class="box">
	<div class="box-header">
	  <h3 class="box-title"><?php echo $title ?></h3>
	  
	</div>
	<!-- /.box-header -->
	<div class="box-body">

	  <form action="<?php echo site_url('admin/rt/update'); ?>" method="post">
		<input type="hidden" name="id" value="<?php echo $row->id ?>">
		<table id="table" width="30%">
			<tr>
				<td> 
					<div class="form-group">
						<label for="nama">Nama RT *</label> 
						<input type="text" name="nama" id="nama" class="form-control" required value="<?php echo $row->nama ?>">

					</div>
				</td>
			</tr>
		</table>

		<a href="<?php echo site_url('admin/rt'); ?>" class="btn bg-olive "><i class="fa fa-arrow-left"></i> Kembali</a>
		<button type="submit" class="btn bg-navy" ><i fa fa-save></i> Update</button>
		
	  </form>
	  
	</div>
	</div>
</section>

	  
	  
	  

	





