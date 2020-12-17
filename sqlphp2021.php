<!DOCTYPE html>
<html>
    <body>
    <h1>INSERISCI IMPIEGATO</h1>

    <form action="sqlphp2021.php" method="get">
        Nome: <input type="text" name="nome" required><br>
        Cognome : <input type="text" name="cognome" required><br>
        Stipendio : <input type="foat" name="stipendio"><br>
        Dipartimento : <input type="text" name="dipartimento"><br>
        Data di nascita : <input type="date" name="datadinascita"><br>
        <input type="submit" value="Invio"><br>
    </form>
    
    <?php
    if (empty($_GET)){
		echo "Inserisci i valori richiesti";
	}
    else{
		$nome = $_GET['nome'];
		$cognome = $_GET['cognome'];
		$stipendio= $_GET['stipendio'];
		$dipartmento = $_GET['dipartimento'];
		$datadinascita = $_GET['datadinascita'];
		$server="vecchia.beatrice.tave.osdb.it";
		$user="c146_vecchia";
		$password="Susanna1";
		$dbname="c146_esercitazione1";
		$connection2= new mysqli($server, $user, $password, $dbname);
		if($connection2->connect_error){
			die("Connessione fallita".$connection2->connect_error);
		}
		else{
			$sqlimpiegati= 'insert into impiegati (nome, cognome, stipendio, dipartimento, datadinascita) values ("'.$nome.'","'. $cognome.'","'.$stipendio.'","'. $dipartimento.'","'. $datadinascita.'");';
			$r = $connection2->query($sqlimpiegati);
			if($r){
				echo "Impiegato inserito";
			}	
			else{
				echo "Errore: ".$connection2->connect_error;
			}
			$connection2->close();
		}	
    }       
    ?>
    </body>
</html>
