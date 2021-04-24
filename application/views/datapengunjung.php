<?php $this->load->view('template/header')?>
    <!-- Header -->
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
    <div class="container mt--7">
      <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Pengunjung </h3>
              </div>
              <div class="col text-right">
                <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#modal-prediksi"><i class="fa fa-plane"></i> Prediksi Data</button>
                <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i> Tambah Data</button>
              </div>
            </div>
          </div>
          <div class="table-responsive animated fadeIn">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr align="center">
                  <th width="2">No</th>
                  <th >Time Series</th>
                  <th >Pengunjung</th>
                  <th >X</th>
                  <th >Y</th>
                  <th >XX</th>
                  <th >XY</th>
                  <th></th>
                </tr>
              </thead>
              <?php
              $no= 0;
              $total_x = 0;
              $total_y = 0;
              $total_xx = 0;
              $total_xy = 0;
              $x = -1;
              foreach ($tpengunjung->result_object() as $tp){
                $no++;
                $x++;
                $bulan    = $tp->bulan;
                $tahun    = $tp->tahun;
                $jumlah   = $tp->jumlah;
                $xx       = $x * $x;
                $xy       = $x * $jumlah;
                $total_x  = $total_x + $x;
                $total_y  = $total_y + $jumlah;
                $total_xx = $total_xx + $xx;
                $total_xy = $total_xy + $xy;
              ?>
              <tbody>
                <tr align="center">
                  <td><?=$no?>.</td>
                  <td align="left"><?="$bulan $tahun"?></td>
                  <td><?=$jumlah?></td>
                  <td><?=$x?></td>
                  <td><?=$jumlah?></td>
                  <td><?=$xx?></td>
                  <td><?=$xy?></td>
                  <td>
                    <a data-toggle="modal" data-target="#modal-edit<?=$tp->id?>" title="Edit data" href=""><i class="fa fa-edit"></i></a>
                    <a href="hapusdata/<?=$tp->id?>" title="Hapus data"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              <?php }?>
                <tr align="center">
                  <td colspan="3">Jumlah</td> 
                  <td><?=$total_x?></td>
                  <td><?=$total_y?></td>
                  <td><?=$total_xx?></td>
                  <td><?=$total_xy?></td>
                </tr>
                <tr align="center">
                  <td colspan="3">Rata-rata</td>
                  <td><?=$total_x/$no?></td>
                  <td><?=$total_y/$no?></td>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                </tr>
              </tbody>
            </table>
            <div class="container">
              <?php 
              #Regresi Linier
              $b1 = ($total_xy - (($total_x * $total_y)/$no))/($total_xx - (($total_x * $total_x)/$no));
              $b0 = ($total_y/$no) - $b1 * ($total_x/$no);
              
              echo "B0 = $b0<br>";
              echo "B1 = $b1 <br>";
              echo "Rumus Regresi Linier<br>";
              echo "y = $b0 + $b1 x<br>";

              error_reporting(0);
              $prediksi = $_POST['prediksi'];
              if ($prediksi){
                $list_pilihan = $_POST['list_pilihan'];
                $x = $x + $list_pilihan;
                $y = $b0 + $b1 * $x;
                echo "Prediksi pengunjung untuk $list_pilihan bulan berikutnya adalah $y ";
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="copyright text-center text-xl-let text-muted">
          &copy; 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">Forecasting Pengunjung Perpus UMK</a>
        </div>
      </footer>

      <!-- Modal tambah -->
      <div id="modal-tambah" class="modal">
        <div class="modal-dialog">
          <form action="<?=site_url('Admin/tambah')?>" method="post">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <div class="modal-title" style="color: #fff;text-transform: uppercase;">Tambah Data</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>FAKULTAS</label>
                  <select class="form-control" name="fakultas">
                    <option value="FAKULTAS TEKNIK">FAKULTAS TEKNIK</option>
                  </select> 
                </div>
                <div class="form-group">
                  <label>Bulan</label>
                  <select class="form-control" name="bulan">
                    <option value="Januari">Januari</option>
                    <option value="Febuari">Febuari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <input class="form-control" type="year" name="tahun" required="">
                </div>
                <div class="form-group">
                  <label>Jumlah Pengunjung</label>
                  <input class="form-control" type="number" name="jumlah" required="">
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- End Modal tambah -->
      <!-- Modal Edit -->
      <?php foreach($tpengunjung->result_object() as $tp){?>
      <div id="modal-edit<?=$tp->id?>" class="modal">
        <div class="modal-dialog">
          <form action="<?=site_url('Admin/editdata')?>" method="post">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <div class="modal-title" style="color: #fff;text-transform: uppercase;">Edit Data</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" value="<?=$tp->id?>">
                <div class="form-group">
                  <label>FAKULTAS</label>
                  <select class="form-control" name="fakultas">
                    <option value="FAKULTAS TEKNIK">FAKULTAS TEKNIK</option>
                  </select> 
                </div>
                <div class="form-group">
                  <label>Bulan</label>
                  <select class="form-control" name="bulan">
                    <option value="Januari">Januari</option>
                    <option value="Febuari">Febuari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <input class="form-control" type="year" name="tahun" required="" value="<?=$tp->tahun?>">
                </div>
                <div class="form-group">
                  <label>Jumlah Pengunjung</label>
                  <input class="form-control" type="number" name="jumlah" required="" value="<?=$tp->jumlah?>">
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    <?php }?>
      <!-- End Modal Edit -->
      <!-- Modal Prediksi -->
      <div id="modal-prediksi" class="modal">
        <div class="modal-dialog">
          <form method="post" action="<?=site_url('admin/ft')?>">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <div class="modal-title" style="color: #fff;text-transform: uppercase;">Prediksi Data</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                Peramalan pengunjung untuk
                <select name="list_pilihan" id="list_pilihan">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="4">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
                bulan berikutnya
                <div class="modal-footer">
                  <input class="btn btn-sm btn-primary" type="submit" name="prediksi" id="prediksi" value="Prediksi"> 
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- End Modal Prediksi -->
    </div>
<?php $this->load->view('template/footer')?>