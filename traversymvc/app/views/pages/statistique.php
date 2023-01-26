<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/nav.php'; ?>





<div class="container" style="margin-top: 6rem;">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Prix</h6>
                    <h2 class="text-right"><i class="fa fa-money-bill"></i><span>&nbsp;&nbsp; $ <?php echo $data['TotalPrix'] ?></span></h2>
                   
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Max Prix</h6>
                    <h2 class="text-right"><i class="fa fa-money-bill"></i><span>&nbsp;&nbsp; $ <?php echo $data['MaxPrix'] ?></span></h2>

                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">MIN Prix</h6>
                    <h2 class="text-right"><i class="fa fa-money-bill"></i><span>&nbsp;&nbsp; $ <?php echo $data['minprix'] ?></span></h2>

                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20"> Total product</h6>
                    <h2 class="text-right"><span><i class="fa fa-list"></i></span>&nbsp;&nbsp; $ <?php echo $data['nbproudct'] ?></span></h2>
                </div>
            </div>
        </div>
	</div>
</div>

<canvas id="myChart" ></canvas>
<!-- <?php //require  APPROOT . '/views/inc/footer.php'; ?> -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js"></script>
<script>
const data = {
  labels: [
    'Red',
    'Blue',
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};

const config = {
  type: 'doughnut',
  data: data,
};

var myChart =new CharacterData (
  document.getElementById("myChart"),config
)
</script>




