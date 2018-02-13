<?php
include("model.php");
$a = new Banco();

$cod=$_POST['codigo'];

$a->buscarNota($cod);

?>