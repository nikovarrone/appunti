<?php
    // nessuna dichiarazione
	$user = "root"; $pwd = ""; $risposta = "";
	try{
		// connessione
		$conn = new PDO("mysql:host=localhost;dbname=comuni", $user, $pwd);
		// abilita gestione errori tramite try … catch  (Exception)
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$codice= $_GET['codComune'];
				
		/* generazione stringa sql parametrizzata */
		$query = "select citta, cap from comuni where codcit=?";
		$stmSql = $conn->prepare($query);
		$stmSql ->bindParam(1, $codice);
		
		// esecuzione query
		$result = $stmSql ->execute();
		
		if ($row = $stmSql->fetch()) {	
			$risposta = $row['citta'];
		}	

	} catch(PDOException $ex){
	   $risposta = "Errore connessione: ".$ex->getMessage();
	}
	
	$conn=null;
	
	echo  $risposta;	

?>

