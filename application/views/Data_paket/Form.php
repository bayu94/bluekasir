<?php 
	$this->load->view('Header');
?>
<div class="panel">
  <div class="panel-body">
      <div>
        <ul class="breadcrumb">
          <li><i class="fa fa-home fa-lg"></i></li>
          <li>Data Paket</li>
          <li>Form Tambah Paket</li>
        </ul>
      </div>
  </div>                    
</div>

<div class="col-md-4">
	<a class="btn btn-success" href="<?php echo base_url('Data_paket'); ?>" align="right">Data Paket</a>
</div>

<div class="form-element">
  <div class="col-md-12 padding-0">
    <div class="col-md-12">
      <div class="panel form-element-padding">
	        <div class="panel-heading">
	         <h4>Form Tambah Paket</h4>
	        </div>
	        <form action="<?php echo base_url('Data_paket/insert'); ?>" method="post">
	        	<input type="hidden" name="paket_id"  value="<?php echo @$list[0]['paket_id']; ?>">
		         <div class="panel-body" style="padding-bottom:30px;">
		          <div class="col-md-8">
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Nama Paket</label>
		              <div class="col-sm-10">
		                 <input type="text" class="form-control" placeholder="Nama Paket" name="paket_name" value="<?php echo @$list[0]['paket_name']; ?>">
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Harga Paket</label>
		              <div class="col-sm-10">
		                <input type="number" min="0" class="form-control" name="paket_price" placeholder="Harga Paket" value="<?php echo @$list[0]['paket_price']; ?>">
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