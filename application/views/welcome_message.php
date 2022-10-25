<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
  <center>  
	<div class="row mt-4">	
		<div class="col-4">
		<p><b>DEPARTEMENT ICT</b></p>
			<canvas id="line" height="100"></canvas>
		</div>
		<div class="col-4">
		<p><b>DEPARTEMENT QR</b></p>
			<canvas id="bar" height="100"></canvas>
		</div>
		<div class="col-4">
		<p><b>DEPARTEMENT MARKETING</b></p>
			<canvas id="line"></canvas>
		</div>
		<div class="col-4">
		<p><b>DEPARTEMENT ICT</b></p>
			<canvas id="line" height="100"></canvas>
		</div>
		<div class="col-4">
		<p><b>DEPARTEMENT QR</b></p>
			<canvas id="line" height="100"></canvas>
		</div>
		<div class="col-4">
		<p><b>DEPARTEMENT MARKETING</b></p>
			<canvas id="line" height="100"></canvas>
		</div>
		<div class="col-4">
		<p><b>DEPARTEMENT ICT</b></p>
			<canvas id="line" height="100"></canvas>
		</div>
		<div class="col-4">
		<p><b>DEPARTEMENT QR</b></p>
			<canvas id="line" height="100"></canvas>
		</div>
		<div class="col-4">
		<p><b>DEPARTEMENT MARKETING</b></p>
			<canvas id="line" height="100"></canvas>
		</div>
	</div>	
	</center>
</div>


	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
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
</body>
</html>
