<?php
	$this->load->view('Header');
?>
<div class="panel">
  <div class="panel-body">
      <div>
        <ul class="breadcrumb">
          <li><i class="fa fa-home fa-lg"></i></li>
          <li>Dasboard</li>
        </ul>
      </div>
      <h3>Selamat Datang, <?php echo $this->session->userdata('kasir_nama'); ?></h3>
    
  </div>                    
</div>

<div class="col-md-6">
    <div class="panel box-v1">
      <div class="panel-heading bg-white border-none">
        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
          <h4 class="text-left">Tamu Hari ini</h4>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
           <h4>
           <span class="icon-user icons icon text-right"></span>
           </h4>
        </div>
      </div>
      <div class="panel-body text-center">
        <h1>0</h1>
        <p>Tamu</p>
        <hr/>
      </div>
    </div>
</div>
<div class="col-md-6">
	<div class="panel box-v1">
	  <div class="panel-heading bg-white border-none">
	    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
	      <h4 class="text-left">Jumlah Tamu Bulan Ini</h4>
	    </div>
	    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
	       <h4>
	       <span class="icon-basket-loaded icons icon text-right"></span>
	       </h4>
	    </div>
	  </div>
	  <div class="panel-body text-center">
	    <h1>0</h1>
	    <p>Tamu</p>
	    <hr/>
	  </div>
	</div>
</div>

<div class="col-md-12">
	<div class="panel" style="padding-left:20px;padding-right:20px;">
	   <div class="panel-heading panel-heading-white">
	      <h4>Chart Tamu</h4>
	    </div>
	    <div class="panel-body">
	       <div id="line-chart" style="height:300px;"></div>
	    </div>
	</div>
</div>
<?php 
	$this->load->view('Footer');
?>
	<script src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.min.js"></script>
	 <script type="text/javascript">
	     lineChart();


	     function lineChart(){
	          var dataLine = [
	              {label: '&nbsp Tamu', color:'#58B2F4', data: [[1,25], [2,50], [3,25], [4,30], [5,20],[6,60],[7,70]]},
	          ];

	          var optionsLine = {
	             grid: {
	                borderWidth: 0
	            }
	          };

	          $.plot("#line-chart",dataLine,optionsLine);
	      };
	</script>