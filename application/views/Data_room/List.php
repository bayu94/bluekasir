<?php 
	$this->load->view('Header');
?>

<div class="panel">
  <div class="panel-body">
      <div>
        <ul class="breadcrumb">
          <li><i class="fa fa-home fa-lg"></i></li>
          <li>Data Room</li>
        </ul>
      </div>
  </div>                    
</div>
<div class="col-md-4">
	<a class="btn btn-success" href="<?php echo base_url('Data_room/form'); ?>" align="right">Tambah Data Room</a>
</div>
<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading"><h3>Data Room</h3></div>
        <div class="panel-body">
          <div class="responsive-table">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
	          <thead>
	            <tr>
	              <th>No</th>
	              <th>Nama Room</th>
	              <th>Lantai Room</th>
	              <th></th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php
					$no = 0; 
					foreach ($list as $key => $value): 
					// var_dump($value);
					// die();
				?>
			  <tr>
			  	<td><?php echo $key+1; ?></td>
			  	<td><?php echo $value['room_name']; ?></td>
			  	<td><?php echo $value['room_lantai']; ?></td>
			  	<td>
			  		<a class=" btn btn-gradient btn-primary" href="<?php echo base_url('Data_room/form/'.$value['room_id']); ?>" ><i class="fa fa-edit"></i></a>
			  		<a class="btn btn-danger" href="<?php echo base_url('Data_room/delete/'.$value['room_id']); ?>" onclick="return confirm('Apakah Anda yakin Ingin Hapus?')"><i class="icons icon-trash"></i></a>
			  	</td>
			  </tr>
			  	<?php endforeach ?>
	          </tbody>
	        </table>
	        </div>
	    </div>
	  </div>
	</div>
</div>



<?php
	$this->load->view('Footer');
?>
<script src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jquery.datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>