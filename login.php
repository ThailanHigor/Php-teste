<?php

include "model.php";
$a = new Banco();


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if($usuario and $senha != null){
	$a->validaUsuario($usuario,$senha);
}else{
	echo "Campos vazio ou invalidos";
}

?>