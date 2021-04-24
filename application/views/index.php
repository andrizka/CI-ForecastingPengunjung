<?php $this->load->view('template/header')?>
    
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-2 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <!-- <div class="row">
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Teknik Informatika</h5>
                      <span class="h2 font-weight-bold mb-0"><?=$ti?></span>
                    </div>
                    <div class="col">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <div class="container mt--7 animated fadeIn">
      <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card bg-gradient-default shadow">
          <div class="card-header border-0 bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="text-uppercase text-light text-center ls-1 mb-1">Grafik Pengunjung Perpus Fakultas Teknik 2018</h3>
              </div>
            </div>
          </div>
          <div class="table-responsive bg-gradient-default ">
            <?php
              foreach($data->result_object() as $data){
                $bulan[] = $data->bulan;
                $jumlah[]= $data->jumlah;
              }
            ?>
            <!-- Projects table
            <div class="container">
              <canvas id="myChart" height="100"></canvas>
            </div> -->
            <div class="card-body ">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-sales" class="chart-canvas"></canvas>
              </div>
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
    </div>
    
    
    
<?php $this->load->view('template/footer')?>
<!-- chart -->
<script type="text/javascript">
  var SalesChart = (function() {
  // Variables
  var $chart = $('#chart-sales');
  // Methods
  function init($chart) {
    var salesChart = new Chart($chart, {
      type: 'line',
      options: {
        scales: {
          yAxes: [{
            gridLines: {
              lineWidth: 1,
              color: Charts.colors.gray[900],
              zeroLineColor: Charts.colors.gray[900]
            },
          }]
        },
        tooltips: {
          callbacks: {
            label: function(item, data) {
              var label = data.datasets[item.datasetIndex].label || '';
              var yLabel = item.yLabel;
              var content = '';
              content += '<span class="popover-body-value">' + yLabel + '</span>';
              return content;
            }
          }
        }
      },
      data: {
        labels: <?= json_encode($bulan)?>,
        datasets: [{
          label: 'Performance',
          data: <?= json_encode($jumlah)?>
        }]
      }
    });
    // Save to jQuery object
    $chart.data('chart', salesChart);
  };
  // Events
  if ($chart.length) {
    init($chart);
  }
})();
</script>