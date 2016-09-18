<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chart - Gráfico</title>

	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
	
	<script>
		$(document).ready(function() {
		    $('#example').DataTable( {
		        "language": {
		            "lengthMenu": "Mostrar _MENU_ registros por página",
		            "zeroRecords": "Nenhum registro encontrado - sorry",
		            "info": "Mostrando página _PAGE_ de _PAGES_",
		            "infoEmpty": "Nenhum registro",
		            "infoFiltered": "(filtrados from _MAX_ total records)"
		        }
		    } );
		} );
	</script>


	<!-- http://professorburnes.com.br/pos/outros/tabelas.php -->

</head>
<body>
	<div class="container">
		<h1>Data Table</h1>

		<h2>Cadastro de alunos:</h2>
		
		<table id="example" class="display" cellspacing="0" width="100%">
			<thead>
	            <tr>
	                <th>Nome</th>
	                <th>Idade</th>
	                <th>Nota</th>
	            </tr>
	        </thead>
	        <tbody>
	            <tr>
	                <td>Dyego</td>
	                <td>24</td>
	                <td>9</td>
	            </tr>
	            <tr>
	                <td>Lucas</td>
	                <td>21</td>
	                <td>8</td>
	            </tr>
	            <tr>
	                <td>Danilo</td>
	                <td>25</td>
	                <td>8</td>
	            </tr>
	            <tr>
	                <td>Marcos</td>
	                <td>22</td>
	                <td>7</td>
	            </tr>
	            <tr>
	                <td>Thiago</td>
	                <td>26</td>
	                <td>9</td>
	            </tr>
	            <tr>
	                <td>Ana</td>
	                <td>20</td>
	                <td>10</td>
	            </tr>
	            <tr>
	                <td>Amanda</td>
	                <td>18</td>
	                <td>7</td>
	            </tr>
	            <tr>
	                <td>Bruno</td>
	                <td>29</td>
	                <td>10</td>
	            </tr>
	            <tr>
	                <td>Thais</td>
	                <td>22</td>
	                <td>8</td>
	            </tr>
	            <tr>
	                <td>Renato</td>
	                <td>23</td>
	                <td>8</td>
	            </tr>
	            <tr>
	                <td>Maria</td>
	                <td>24</td>
	                <td>7</td>
	            </tr>
	            <tr>
	                <td>Marta</td>
	                <td>25</td>
	                <td>8</td>
	            </tr>
	            <tr>
	                <td>Igor</td>
	                <td>29</td>
	                <td>10</td>
	            </tr>
	        </tbody>
		</table>
		
	</div>


</body>
</html>