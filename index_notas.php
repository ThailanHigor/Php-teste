<?php  
include "model.php";
$a = new Banco();


require_once("xajax/xajax_core/xajax.inc.php");
$xajax->registerFunction("atualizar");
 
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="static/css/notass.css">
	<title>Notas</title>
</head>
<body>

	<div class="menu-top-notas">
		<CENTER>AQUI CONTERA TODAS AS INFORMAÇOES SOBRE O USUARIO NO MOMENTO</CENTER>
	</div>
	<div class="notas-content">
		<div class='row table-notas legenda'>
			<div class='col-sm-4 bord'>Nota</div>
			<div class='col-sm-4 bord '>Vendedor</div>
			<div class='col-sm-4 bord'>Cliente</div>
		</div>
		<div> <?php $a->buscarNotasEmAberto() ?></div>
	</div>

	<footer>
		<div class='row'>
			<div class='col-sm-4 bord-menu'>Nota</div>
			<div class='col-sm-4 bord-menu '>Separadas</div>
			<div class='col-sm-4 bord-menu'>Sair</div>
		</div>
		
	</footer>
</body>
</html>



