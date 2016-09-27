<?php

	//configurer le driver PDO Oracle dans le fichier php.ini
	//     extension=php_pdo_oci.dll
	
	
	$host='10.23.104.80';    	// le chemin vers le serveur
	$port='1521';				// 1521 port pour oracle 3306 pour mysql
	$dbname='orcl';  	        // le nom de votre base de données ou du service oracle
	$user='sdis';  			    // nom d'utilisateur pour se connecter
	$password='Estr@n29';       // mot de passe de l'utilisateur

	
	// ceation du Data Source Name, ou DSN, qui contient les infos
	// requises pour se connecter à la base en PDO driver mysql.
	// exemple : mysql:host=10.100.22.20;port=1521;dbname=ora18sdis29
	$dsn='mysql:host='.$host.';port='.$port.';dbname='.$dbname;
	
	// ceation du Data Source Name, ou DSN, qui contient les infos
	// requises pour se connecter à la base en PDO driver oracle.
	// exemple : oci:dbname=//10.100.22.20:1521/ora18sdis29
	$dsn='oci:dbname=//'.$host.':'.$port.'/'.$dbname;
	

	echo "DSN : $dsn<br />";
	
	try
	{
		$connexion = new PDO($dsn, $user, $password);
	}
	
	catch(Exception $e)
	{
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N° : '.$e->getCode();
		die();
	}	

	echo "Connexion ouverte<br />";	
	
	if ($connexion) {
		
		// on va chercher tous les infos de la table
		$resultats=$connexion->query("SELECT * FROM GRADE");
		
		// on récupére le résultat sous forme d'objet
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		
		// on récupère la liste des infos
		while( $ligne = $resultats->fetch() )
		{
			// on affiche les infos
			echo "Information : $ligne->GRA_LIBELLE <br />";
		}
		
		$connexion = NULL ; // Fermeture de la connexion
		echo "Connexion fermee";
	}


?>

