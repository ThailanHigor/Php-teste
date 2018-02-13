<?php
include("model.php");
$a = new Banco();


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="static/css/notass.css">
	<title>Testando</title>
</head>
<body style="background-color: gray;">
<div class="login">
	<center>
	<form method="post" action="login.php">
		<div>
			<label style="padding-right:9px; margin-right:0px; " >Usuario:</label>
			<input type="text" name="usuario">
		</div>
		</br>
		<div>
			<label style="padding-left: 10px; margin-right:20px; ">Senha:</label>
			<input type="text" name="senha">
		</div>
		<br>
		<button type="submit">Entrar</button>
	</form>
	</center>
</div>
</body>
</html>