<!DOCTYPE <!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>Chart - Gráfico</title>
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/moment-with-locales.js"></script>
	<script type="text/javascript" src="js/fullcalendar.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fullcalendar.min.css">

	<script type="text/javascript">
		$(document).ready(function(){
			$("#calendario").fullCalendar({
				locale: "pt",
				events: [
				{
					title: "Casamento da Luana",
					start: "2016-09-24",
					color: "pink",
					url: "javascript:alert('teste');"
				},
				{
					title: "Aula da Pós",
					start: "2016-09-10",
					color: "red"
				},
				{
					title: "Semana de provas",
					start: "2016-09-16",
					end: "2016-09-25",
					color: "orange"
				},
				{
					title: "Festa do Manara",
					start: "2016-09-17",
					color: "blue"
				}

				]
			});
		});
	</script>
	<style type="text/css">
	.fc-left {
		text-transform: capitalize;
		color: #f00;
	}
	</style>
</head>
<body>

	<div class="container">
			<h1>Calendário</h1>

			<div id="calendario"></div>
	</div>

</body>
</html>