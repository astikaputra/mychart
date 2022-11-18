<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <!-- <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            <div class="row mt-4">	-->
            <div class="col-8"> 
            <p><b>DEPARTEMENT ICT</b></p>
                <canvas id="bar" height="100"></canvas>
            </div>
        </div>
           
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/chart.js"></script>	
	<script>

		const baseUrl = "<?php echo base_url();?>"
		const myChart = (chartType) => {
				$.ajax({
					url: baseUrl+'welcome/chart_data',
					dataType: 'json',
					method: 'get',
					success: data => {
						let chartX = []
						let chartY = []
						let chartZ = []
						let chartM = []
						data.map( data => {
							chartX.push(data.month)
							chartY.push(data.achievment)
							chartZ.push(data.target)
							chartM.push(data.median)
						})
						const chartData = {
							labels: chartX,
							datasets: [
								{
									label: 'ACHIEVMENT',
									data: chartY,
									backgroundColor: ['blue'],
									borderColor: ['blue'],
									borderWidth: 4
								},
								{
									label: 'TARGET',
									data: chartZ,
									backgroundColor: ['silver'],
									borderColor: ['silver'],
									borderWidth: 4
								},
								{
									label: 'MEDIAN',
									data: chartM,
									backgroundColor: ['lightcoral'],
									borderColor: ['lightcoral'],
									borderWidth: 4
								}
							]
						}
						const ctx = document.getElementById(chartType).getContext('2d')
						const config = {
							type: chartType,
							data: chartData
						}
					
						const chart = new Chart(ctx, config)
					}
				})
		}
		myChart('line')
		myChart('bar')
		myChart('pie')

    </script>