<?php $this->load->view('template/header') ?>
<div class="header bg-gradient-primary pb-5 pt-5 pt-md-3">
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
<div class="container-fluid mt--5" >
	<div class="row animated fadeIn">
		<div class="col-xl-8 p-2 mb-0 ">
			<div class="card bg-secondary shadow">
				<div class="card-header bg-white border-0">
					<h3 class="mb-0">Hitung Data Pengunjung</h3>
				</div>
				<div class="card-body">
					<form action="<?=site_url('admin/totaldata')?>"method="post">
						<div class="form-group">
							<label>Tanggal Awal</label>
							<input class="form-control" type="date" name="tglawal" placeholder="DD-MM-YYYY" value="2018-00-01">
						</div>
						<div class="form-group">
							<label>Tgl Akhir</label>
							<input class="form-control" type="date" name="tglakhir" placeholder="DD-MM-YYYY" value="2018-00-31">
						</div>
						<!-- <div class="form-group">
							<label>Progdi</label>
							<select class="form-control" name="progdi">
								<option value="51">Teknik Informatika</option>
								<option value="52">Teknik Elektro</option>
								<option value="53">Sistem Informasi</option>
								<option value="54">Teknik Mesin</option>
								<option value="57">Teknik Industri</option>
							</select>
						</div> -->
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="total">Hitung</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
		<div class="col-xl-4 mb-0 p-2 ">
			<div class="card bg-secondary shadow">
				<div class="card-header bg-white text-center">
					<h3 >TOTAL</h3>
				</div>
				<div class="card-body ">
					<h2 class="text-center mb-0" style="font-size: 50px;margin-top: -15px "><?php echo "$teknik";?></h2>
					<table class="table">
						<tr>
							<td>Teknik Informatika</td>
							<td>: <?=$ti?></td>
						</tr>
						<tr>
							<td>Teknik Elektro</td>
							<td>: <?=$te?></td>
						</tr>
						<tr>
							<td>Sistem Informasi</td>
							<td>: <?=$si?></td>
						</tr>
						<tr>
							<td>Teknik Mesin</td>
							<td>: <?=$tm?></td>
						</tr>
						<tr>
							<td>Teknik Industri</td>
							<td>: <?=$tind?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('template/footer')?>
