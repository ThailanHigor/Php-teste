<?php
$conn = null;


/*		$sql = "SELECT NS.ID_NS,U.Nome,N.Vendedor
				FROM notas_separadas as NS
				INNER JOIN notas AS N
				INNER JOIN usuarios as U
				ON NS.ID_Nota=N.ID_Nota
				and NS.ID_Usuario = U.ID_Usuario;
				";*/
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



	function atualizar() {

	}

	function buscarNota($codnota){
		global $conn;
		$sql="SHOW COLUMNS FROM 'notas'";
		$result = mysqli_query($conn,$sql);

	}

	function buscarNotasEmAberto(){
		global $conn;
		$sql = "SELECT ID_Nota,Cod_Nota,Vendedor,Cliente,Observacao FROM notas";

		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($result)) {

			echo "<div class='row table-notas'>";
			echo "<div class='col-sm-4 bord'>".$row["Cod_Nota"]."</div>";
			echo "<div class='col-sm-4 bord'>".$row["Vendedor"]."</div>";
			echo "<div class='col-sm-4 bord'>".$row["Cliente"]."</div>";
			echo "<div class='col-sm-12 bord ob'>".$row["Observacao"]."</div>";
			echo "<div class='col-sm-12  nova'>";
			echo "<form method='POST' action='exibeNota.php'>";
			echo "<center><button type='submit' name='codigo' value='".$row["Cod_Nota"]."'>Separar</button></center>";
			echo "</form></div>";
			echo "</div>";
		}
	}

	function validaUsuario($usuario,$senha){
		global $conn;
		$sql = "SELECT * FROM usuarios WHERE Login='$usuario' and Senha='$senha'";
		$result = mysqli_query($conn,$sql);

		$num_results = mysqli_num_rows($result);
		$row = mysqli_fetch_object($result);

		if($num_results != 0){
			$sqlstatus = "UPDATE usuarios SET Status=1 WHERE ID_Usuario=$row->ID_Usuario";
			$result2 = mysqli_query($conn,$sqlstatus);
			if(!$result2){
				echo "Erro ao mudar status para online";
			}
		}
			
			header("Location:index_notas.php");	

		} 
	}



?>