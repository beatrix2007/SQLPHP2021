<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	<h1>INSERISCI DIPARTIMENTO</h1>
	<form action="dipartimento.php" method="get">
		Nome: <input type="text" name="nome" required><br>
		Città: <input type="text" name="citta" required><br>
		<input type="submit" value="Invio"><br>
	</form>
		<?php
			if (empty($_GET)){
			echo "Inserisci i valori richiesti";
			}
			else{
				$nome = $_GET['nome'];
				$citta = $_GET['citta'];
				$server="vecchia.beatrice.tave.osdb.it";
				$user="c146_vecchia";
				$password="Susanna1";
				$dbname="c146_esercitazione1";
				$connection3= new mysqli($server, $user, $password, $dbname);
			}	
			if($connection2->connect_error){
			die("Connessione fallita".$connection2->connect_error);
			}
			else{
				$sqldipartimento= 'insert into dipartimenti (nome, città) values ("'. $nome.'","'.$citta.'");';
				$c = $connection3->query($sqldipartimento);
				if($c){
					echo "Dipartimento inserito";
				}	
				else{
					echo "Errore: ".$connection3->connect_error;
				}
				$connection3->close();
			}	
		?>
	</body>
</html>	