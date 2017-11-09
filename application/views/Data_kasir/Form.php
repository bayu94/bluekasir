<?php 
	$this->load->view('Header');
?>
<div class="panel">
  <div class="panel-body">
      <div>
        <ul class="breadcrumb">
          <li><i class="fa fa-home fa-lg"></i></li>
          <li>Data Kasir</li>
          <li>Form Tambah kasir</li>
        </ul>
      </div>
  </div>                    
</div>

<div class="col-md-4">
	<a class="btn btn-success" href="<?php echo base_url('Data_kasir'); ?>" align="right">Data Kasir</a>
</div>


<div class="form-element">
  <div class="col-md-12 padding-0">
    <div class="col-md-12">
      <div class="panel form-element-padding">
	        <div class="panel-heading">
	         <h4>Form Tambah Kasir</h4>
	        </div>
	        <form action="<?php echo base_url('Data_kasir/insert'); ?>" method="post">
	        	<input type="hidden" name="kasir_id" value="<?php echo @$list[0]['kasir_id']; ?>">
		         <div class="panel-body" style="padding-bottom:30px;">
		          <div class="col-md-8">
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Nama Kasir</label>
		              <div class="col-sm-10">
		                <input type="text" class="form-control" placeholder="Nama Kasir" name="kasir_nama" value="<?php echo @$list[0]['kasir_nama']; ?>">
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Username</label>
		              <div class="col-sm-10">
		                <input type="text" class="form-control" name="kasir_username" placeholder="Username" value="<?php echo @$list[0]['kasir_username']; ?>">
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Password</label>
		              <div class="col-sm-10">
		                <input type="password" class="form-control" name="kasir_password" placeholder="Password" value="<?php echo @$list[0]['kasir_password']; ?>">
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Jenis Kelamin</label>
		              <div class="col-sm-10">
		                <input type="text"  class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo @$list[0]['jenis_kelamin']; ?>">
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Email</label>
		              <div class="col-sm-10">
		                <input type="email" min="0" class="form-control" name="kasir_email" placeholder="E-mail" value="<?php echo @$list[0]['kasir_email']; ?>">
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