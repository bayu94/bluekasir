<?php
	$this->load->view('Header_kasir');
?>
<div class="panel">
  <div class="panel-body">
      <div>
        <ul class="breadcrumb">
          <li><i class="fa fa-home fa-lg"></i></li>
          <li>Transaksi</li>
        </ul>
      </div>
  </div>                    
</div>

<div class="form-element">
  <div class="col-md-12 padding-0">
    <div class="col-md-12">
      <div class="panel form-element-padding">
	        <form action="<?php echo base_url('Data_kasir/insert'); ?>" method="post">
	        	<input type="hidden" name="room_id" value="<?php echo @$list[0]['room_id']; ?>">
		         <div class="panel-body" style="padding-bottom:30px;">
		          <div class="col-md-8">
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Room</label>
		              <div class="col-sm-10">
		                <input type="text" class="form-control" name="room_name" readonly="" value="<?php echo @$room[0]['room_name']; ?>">
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Pelanggan</label>
		              <div class="col-sm-10">
		                <input type="text" class="form-control" readonly="" name="nama_pelanggan" value="PLG">
		              </div>
		            </div>
		            
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Paket</label>
		              <div class="col-sm-10">
		                <input type="text" class="form-control" name="paket_id" value="">
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">Nama Terapis</label>
		              <div class="col-sm-10">
		                <input type="text" class="form-control" name="nama_terapis" value="">
		              </div>
		            </div>
		            <div class="form-group"><label class="col-sm-2 control-label text-right">F&B</label>
		              <div class="col-sm-10">
		                <input type="text" class="form-control" name="makanan_minuman" value="">
		              </div>
		            </div>
		            <table>
		            	<thead>
		            		<tr>
		            			<td>Nama Barang</td>
		            			<td>Jumlah</td>
		            			<td>harga</td>
		            		</tr>
		            	</thead>
		            	<tbody>
		            		<tr>
		            			<td></td>
		            			<td></td>
		            			<td></td>
		            		</tr>
		            	</tbody>
		            </table>

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

<script src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jquery.knob.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/ion.rangeSlider.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jquery.mask.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/nouislider.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jquery.validate.min.js"></script>
