
<?php

	$user = "root"; $pwd = ""; $risposta = ""; $conn = null;
	try{
		// connessione
		$conn = new PDO("mysql:host=localhost;dbname=comuni", $user, $pwd);
		// abilita gestione errori tramite try … catch  (Exception)
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $ex){
	   $risposta = "Errore connessione: ".$ex->getMessage();
	}
	


	if(isset($_GET['azione']) && !empty($_GET['azione'])) {
		$azione = $_GET['azione'];
		switch($azione) {
			case 'ricerca' : 
				ricerca($_GET['nome'], $conn);
				break;
			// ...etc...
		}
	}

	$conn=null;


      // server side function
	function ricerca($nome, $conn) {   


        /* generazione stringa sql parametrizzata */
		$nome = strtoupper($nome);
		$nome = str_replace("'", "''", $nome);
        
		$query="select citta from comuni where Ucase(citta) like concat(?,'%') order by citta";
		$stmSql = $conn->prepare($query);
		$stmSql ->bindParam(1, $nome);
		
		// esecuzione query
		$result = $stmSql ->execute();
		
		// crea table risultti
        $risposta= "<table class='tabAuto'>";
		$i=0;
		while ($i<10 && $row = $stmSql->fetch()){
			$nomeCit = $row['citta'];
			$nomeCit = str_replace("'", "&#39;", $nomeCit);
			$risposta .= "<tr><td onclick='riportaNome(\"$nomeCit\");'>".$nomeCit."</td></tr>";
			$i++;
        }
		$risposta .= "</table>";

		echo $risposta;
	}



?>

