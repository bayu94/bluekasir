<?php 
	$this->load->view('Header_kasir');
?>
<div class="panel">
  <div class="panel-body">
      <div>
        <ul class="breadcrumb">
          <li><i class="fa fa-home fa-lg"></i></li>
          <li>Dasboard</li>
        </ul>
      </div>
    
  </div>                    
</div>
	
<div class="col-md-12">
  <div class="row">
  	<?php
		foreach ($list as $key => $value): 
	?>
	   <a href="<?php echo base_url('Transaksi/form/'.$value['room_id']); ?>">
	  	<div class="col-sm-6 col-md-3">
		  	<div class="panel bg-dark-grey box-shadow-none">
		      <div class="panel-body">
		        <center><h4 class="text-white">Room</h4></center>
		        <center><h4 class="text-white"><?php echo $value['room_name']; ?></h4></center>
		      </div>
		    </div>
		</div>
	   </a>
   <?php endforeach ?>

  </div>
</div>

<?php
	$this->load->view('Footer');
?>