<?php 
	$this->load->view('Header');
?>
<div class="panel">
  <div class="panel-body">
      <div>
        <ul class="breadcrumb">
          <li><i class="fa fa-home fa-lg"></i></li>
          <li>Data Barang</li>
          <li>Form Tambah Barang</li>
        </ul>
      </div>
  </div>                    
</div>

<div class="col-md-4">
	<a class="btn btn-success" href="<?php echo base_url('Data_barang'); ?>" align="right">Data Barang</a>
</div>


<div class="form-element">
  <div class="col-md-12 padding-0">
    <div class="col-md-12">
      <div class="panel form-element-padding">
	        <div class="panel-heading">
	         <h4>Form Tambah Barang</h4>
	        </div>
	        <form action="<?php echo base_url('Data_barang/insert'); ?>" method="post">
	        	<input type="hidden" name="barang_id" value="<?php echo $kode_barang; ?>">
		         <div class="panel-body" style="padding-bottom:30px;">
		          <div class="col-md-8">
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Nama Barang</label>
		              <div class="col-sm-10">
		                <input type="text" class="form-control" placeholder="Nama Barang" name="barang_name" value="<?php echo @$list[0]['barang_name']; ?>">
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Harga Jual</label>
		              <div class="col-sm-10">
		                <input type="number" min="0" class="form-control" name="barang_harga_jual" placeholder="Harga Jual" value="<?php echo @$list[0]['barang_harga_jual']; ?>">
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Harga Beli</label>
		              <div class="col-sm-10">
		                <input type="number" min="0" class="form-control" name="barang_harga_beli" placeholder="Harga Beli" value="<?php echo @$list[0]['barang_harga_beli']; ?>">
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