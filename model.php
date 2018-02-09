<?php
$conn = null;

class Banco{
	function Banco(){
		global $conn;
		$servername = "localhost";
		$username = "root";
		$password = "teste";
		$dbnome = "sistema";

		$conn = new mysqli($servername, $username, $password,$dbnome);

		// Check connection
		if ($conn->connect_error) {
		    die("Erro ao Conectar " . $conn->connect_error);
		} 

	}

	function buscar(){
		global $conn;
		$sql = "SELECT NS.ID_NS as Numero_Nota,U.Nome as Separador,N.Vendedor
				FROM notas_separadas as NS
				INNER JOIN notas AS N
				INNER JOIN usuarios as U
				ON NS.ID_Nota=N.ID_Nota
				and NS.ID_Usuario = U.ID_Usuario;
				";

		$result = mysqli_query($conn,$sql);

		while($row = mysqli_fetch_array($result)) {
				
		        echo "id: " . $row["Numero_Nota"]. " ".$row["Separador"]." ".$row["Vendedor"]."<br>";

		}
	}

	function validaUsuario($usuario,$senha){
		global $conn;
		$sql = "SELECT * FROM usuarios WHERE Login='$usuario' and Senha='$senha'";
		$result = mysqli_query($conn,$sql);

		$num_results = mysqli_num_rows($result);

		if($num_results != 0){
			while($row = mysqli_fetch_object($result)) {
				echo $row->Nome;

		}
				header("Location: teste.php");
				

		}
	}
}
?>