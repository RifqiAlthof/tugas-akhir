<section class="content">
 <div class="row">
        <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $total_user ?></h3>

              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo site_url('admin/user'); ?>" class="small-box-footer">Klik Untuk Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $total_suara ?></h3>

              <p>Total Pemilih</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('admin/suara'); ?>" class="small-box-footer">Klik Untuk Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible">
                <h4><i class="icon fa fa-check"></i> Perolehan Suara</h4>
               <a href="<?php echo site_url('admin/dashboard'); ?>" class="btn btn-warning" style="text-decoration: none"><i class="fa fa-refresh"></i> Refresh untuk melihat data perolehan suara baru</a>
              </div>
          
        </div>
      </div>

        <div class="row">
          <div class="col-md-6">
            <canvas id="myChart"  height="200"></canvas>  
          </div>
          <div class="col-md-6">
            <canvas id="myChart1"  height="200"></canvas>  
          </div>
        </div>
        
      
      </section>
      
      <script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
        datasets: [{
            label: '# Hasil Suara',
            data: [ 
                    <?php echo $kandidat1 ?>,
                    <?php echo $kandidat2 ?>,
                    <?php echo $kandidat3 ?>,
                    0,
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
               
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
               
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
    
    <script>
var ctx = document.getElementById('myChart1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
        datasets: [{
            label: '# Hasil Suara',
            data: [
                    <?php echo $kandidat1 ?>,
                    <?php echo $kandidat2 ?>,
                    <?php echo $kandidat3 ?>,
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
               
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'

               
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>




 