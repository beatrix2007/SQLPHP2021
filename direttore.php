<!DOCTYPE html>
	<html>
		<body>
			<!-- <?php
				$server="vecchia.beatrice.tave.osdb.it";
				$user="c146_vecchia";
				$password="Susanna1";
				$dbname="c146_esercitazione1";
				$connection2= new mysqli($server, $user, $password, $dbname);
				if($connection2->connect_error){
				die("Connessione fallita".$connection2->connect_error);
				}
				
			?>
			<form action="direttore.php" method="get">
				<fieldset>
					<legend>Direttore: </legend>
					<label for="dipartimenti"> Scegli il dipartimento: </label>
					<select name="dipartimenti">
				<?php
					$dipartimento = $conn->query("select *from dipartimenti");
					while($row = $dipartimento -> fetch_assoc()) {
						echo '<option value = "'.$row["codice"].'">'.$row["nome"].'-'.$row["città"]'</option>';
					}
					echo '</select>
						  <label for="impiegati"> Scegli impiegato: </label>
						  <select name="impiegati">';
					$impiegato = $conn->query("select matricola, cognome, dipartimento * from impiegati");
					while($row1 = $impiegato -> fetch_assoc()) {
						echo "<option value = '$row1[matricola]'>$row1[cognome]-$row1[dipartimento]</option>";
					}
				?>
					<input type="submit" value="Assegna">
				</fieldset>		
			</form>	
			<?php
				if (empty($_GET)){
					echo "Inserisci i valori richiesti";
			?> -->
			
		</body>
	</html>