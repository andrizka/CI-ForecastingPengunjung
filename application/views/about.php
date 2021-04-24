<style type="text/css">

</style>
<?php $this->load->view('template/header')?>
<div class="header bg-gradient-primary pb-7 pt-5 pt-md-3">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="">
        <?php if($this->session->flashdata('info')){ ?> 
        <div id="notifikasi" class="alert alert-default">
        <?php echo $this->session->flashdata('info') ?>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<div class="container ml-0 mt--7 mb-0 ">
 	<div class="col-sm-12">
 		<div>
 			<h1 class="text-center animated flipInX" style="font-size: 65px; text-shadow:2px 2px #fff; animation-delay: 1s">KELOMPOK</h1>
 			<div class="mt-7 text-uppercase">
 				<!-- <div class="col-xl-6 m-auto">
 					<table class="table" style="font-weight: bold; list-style-type: none; font-size: 25px">
 					<tr>
 						<td>Andrian Rizka Ramadhan</td>
 						<td>: 201851114</td>
 					</tr>
 					<tr>
 						<td>Khoirul Lubis pamungkas</td>
 						<td>: 201851101</td>
 					</tr>
 					<tr>
 						<td>Ikhsan Adi Laksana</td>
 						<td>: 201851129</td>
 					</tr>
 					<tr>
 						<td>Fian Aldiano</td>
 						<td>: 201851148</td>
 					</tr>
 				
 				</table>	
 				</div> -->
 				
 				<ul style="font-weight: bold; list-style-type: none; font-size: 25px">
 					<li class="animated fadeInUp" style="animation-delay: 2s"><i class="ni ni-user-run"></i> 201851101-Khoirul Lubis Pamungkas</li>
 					<li class="animated fadeInUp" style="animation-delay: 3s"><i class="ni ni-user-run"></i> 201851106-Khotibul Umam</li>
 					<li class="animated fadeInUp" style="animation-delay: 4s"><i class="ni ni-user-run"></i> 201851114-Andrian Rizka Ramadhan</li>
 					<li class="animated fadeInUp" style="animation-delay: 5s"><i class="ni ni-user-run"></i> 201851129-Ichsan Adi Laksanan</li>
          <li class="animated fadeInUp" style="animation-delay: 6s"><i class="ni ni-user-run"></i> 201851148-Fian Aldiano</li>
          <li class="animated fadeInUp" style="animation-delay: 7s"><i class="ni ni-user-run"></i> 201851252-Agung Rizsqyan L</li>
 				</ul>
 			</div>
 		</div>
 	</div>
</div>
<?php $this->load->view('template/footer')?>