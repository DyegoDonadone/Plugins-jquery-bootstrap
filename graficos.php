<!DOCTYPE <!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>Chart - Gráfico</title>
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/Chart.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Chart.js</h1>

		<h2>Gráfico com Barras</h2>
		<canvas id="barras" width="400" height="120">
			
		</canvas>
		<script type="text/javascript">
			// objeto canvas
			var ctx = document.getElementById('barras');
			// configurar os dados do gráfico
			var myChart = new Chart(ctx, {
				type: 'bar', // tipo de grafico
				data: {
					labels: ["diessyca","Lhuana","Renan Safadão","Dyego"],
					datasets: [{
						label: "Número de vendas de Agosto",
						data: [12,21,5,22],
						backgroundColor: [
							'rgba(255,99,132,0.2)',
							'rgba(54,162,235,0.2)',
							'rgba(255,206,86,0.2)',
							'rgba(85,26,226,0.2)'
						],

						borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54,162,235,1)',
							'rgba(255,206,86,1)',
							'rgba(85,26,226,1)'
						],
						borderWidth: 1
					}]
				}
			})
		</script>

		<h2>Gráfico em Torta</h2>	
		<canvas id="torta" width="400" height="120">
			
		</canvas>
		<script type="text/javascript">
			// objeto canvas
			var ctx = document.getElementById('torta');
			// configurar os dados do gráfico
			var myChart = new Chart(ctx, {
				type: 'pie', // tipo de grafico
				data: {
					labels: ["diessyca","Lhuana","Renan Safadão","Dyego"],
					datasets: [{
						label: "Número de vendas de Agosto",
						data: [12,21,5,22],
						backgroundColor: [
							'rgba(255,99,132,0.2)',
							'rgba(54,162,235,0.2)',
							'rgba(255,206,86,0.2)',
							'rgba(85,26,226,0.2)'
						],

						borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54,162,235,1)',
							'rgba(255,206,86,1)',
							'rgba(85,26,226,1)'
						],
						borderWidth: 1
					}]
				}
			})
		</script>

		<h2>Gráfico em Linha</h2>	
		<canvas id="linha" width="400" height="120">
			
		</canvas>
		<script type="text/javascript">
			// objeto canvas
			var ctx = document.getElementById('linha');
			// configurar os dados do gráfico
			var myChart = new Chart(ctx, {
				type: 'line', // tipo de grafico
				data: {
					labels: ["diessyca","Lhuana","Renan Safadão"],
					datasets: [{
						label: "Número de vendas de Agosto",
						data: [12,21,5],
						backgroundColor: [
							'rgba(255,99,132,0.2)',
							'rgba(54,162,235,0.2)',
							'rgba(255,206,86,0.2)'
						],

						borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54,162,235,1)',
							'rgba(255,206,86,1)'
						],
						borderWidth: 1
					}]
				}
			})
		</script>

	</div>
</body>
</html>