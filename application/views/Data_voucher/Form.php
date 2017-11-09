<?php 
	$this->load->view('Header');
?>
<div class="panel">
  <div class="panel-body">
      <div>
        <ul class="breadcrumb">
          <li><i class="fa fa-home fa-lg"></i></li>
          <li>Data Voucher</li>
          <li>Form Tambah Voucher</li>
        </ul>
      </div>
  </div>                    
</div>

<div class="col-md-4">
	<a class="btn btn-success" href="<?php echo base_url('Data_voucher'); ?>" align="right">Data Voucher</a>
</div>

<div class="form-element">
  <div class="col-md-12 padding-0">
    <div class="col-md-12">
      <div class="panel form-element-padding">
	        <div class="panel-heading">
	         <h4>Form Tambah Voucher</h4>
	        </div>
	        <form action="<?php echo base_url('Data_voucher/insert'); ?>" method="post">
	        	<input type="hidden" name="voucher_id"  value="<?php echo @$list[0]['voucher_id']; ?>">
		         <div class="panel-body" style="padding-bottom:30px;">
		          <div class="col-md-8">
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Kode Voucher</label>
		              <div class="col-sm-10">
		              	 <?php if (@$list[0]['voucher_kode']!=""): ?>
		                	<input type="text" class="form-control" placeholder="" name="voucher_kode" value="<?php echo @$list[0]['voucher_kode']; ?>" readonly="">
		                 <?php else: ?>
		                 	<input type="text" class="form-control" placeholder="" name="voucher_kode" value="<?php echo $kode_voucher; ?>" readonly="">
		                 <?php endif ?>
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Nominal Voucher</label>
		              <div class="col-sm-10">
		                <input type="number" min="0" class="form-control" name="voucher_nominal" placeholder="Nominal Voucher" value="<?php echo @$list[0]['voucher_nominal']; ?>">
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