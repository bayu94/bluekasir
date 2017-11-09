<?php 
	$this->load->view('Header');
?>
<div class="panel">
  <div class="panel-body">
      <div>
        <ul class="breadcrumb">
          <li><i class="fa fa-home fa-lg"></i></li>
          <li>Data Room</li>
          <li>Form Tambah Room</li>
        </ul>
      </div>
  </div>                    
</div>

<div class="col-md-4">
	<a class="btn btn-success" href="<?php echo base_url('Data_room'); ?>" align="right">Data Room</a>
</div>


<div class="form-element">
  <div class="col-md-12 padding-0">
    <div class="col-md-12">
      <div class="panel form-element-padding">
	        <div class="panel-heading">
	         <h4>Form Tambah Room</h4>
	        </div>
	        <form action="<?php echo base_url('Data_room/insert'); ?>" method="post">
	        	<input type="hidden" name="room_id" value="<?php echo @$list[0]['room_id']; ?>">
		         <div class="panel-body" style="padding-bottom:30px;">
		          <div class="col-md-8">
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Nama Room</label>
		              <div class="col-sm-10">
		                <input type="text" class="form-control" placeholder="Nama Room" name="room_name" value="<?php echo @$list[0]['room_name']; ?>">
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Lantai Room</label>
		              <div class="col-sm-10">
		                <input type="text" class="form-control" name="room_lantai" placeholder="Lantai Room" value="<?php echo @$list[0]['room_lantai']; ?>">
		              </div>
		            </div>
		            <div class="form-group">
	                  <div class="col-lg-10 col-lg-offset-2">
	                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
	                  </div>
	                </div>
		          </div>
		        </div>
	        </form>
      </div>
    </div>
  </div>
</div>
<?php 
	$this->load->view('Footer');
?>