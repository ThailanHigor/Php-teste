<?php
include("model.php");
$a = new Banco();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Testando</title>
</head>
<body>
<div>
<fieldset>
	<legend>Login</legend>
	<form method="post" action="login.php">
	<label>Usuario:</label>
	<input type="text" name="usuario">
	
	<label>Senha:</label>
	<input type="text" name="senha">

	<button type="submit">Enviar</button>
	</form>
</fieldset>
</div>
</body>
</html>