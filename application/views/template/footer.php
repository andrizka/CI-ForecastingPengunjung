  </div>
  <!--   Core   -->
  <script src="<?=base_url()?>assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="<?=base_url()?>assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="<?=base_url()?>assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="<?=base_url()?>assets/js/argon-dashboard.js?v=1.1.0"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  <script type="text/javascript">
  $('#notifikasi').slideDown('slow').delay(2000).slideUp('slow');
  </script>

  <!-- <script type="text/javascript">
  
      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'line',
  
          // The data for our dataset
          data: {
              labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
              datasets: [{
                  label: 'My First dataset',
                  backgroundColor: 'rgb(255, 99, 132)',
                  borderColor: 'rgb(255, 99, 132)',
                  data: [0, 10, 5, 2, 20, 30, 45]
              }]
          },
  
          // Configuration options go here
          options: {}
      });
    </script> -->
</body>

</html>