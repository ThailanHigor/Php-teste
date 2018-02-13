<?php  
include "model.php";
$a = new Banco();


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="static/css/notas.css">
	<title>Notas</title>
</head>
<body>
	<div class="menu-top-notas">

		<CENTER>AQUI CONTERA TODAS AS INFORMAÇOES SOBRE O USUARIO NO MOMENTO<CENTER>
	</div>
	<div class="notas-content">
		<div class='row table-notas legenda'>
			<div class='col-sm-1'>ID</div>
			<div class='col-sm-2'>Codigo Nota</div>
			<div class='col-sm-2'>Vendedor</div>
			<div class='col-sm-2'>Cliente</div>
			<div class='col-sm-2'>Observação</div>
		</div>
		<div> <?php $a->buscarNotasEmAberto() ?></div>
	</div>
</body>
</html>



