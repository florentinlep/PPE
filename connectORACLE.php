<?php

echo "Liste des drivers PDO<br />";
foreach(PDO::getAvailableDrivers() as $driver)
	echo $driver,"<br />";

	//$test = getenv('LD_LIBRARY_PATH')."  ".getenv('ORACLE_HOME');
	
echo "<hr />";	


	//configurer le driver PDO Oracle dans le fichier php.ini
	//     extension=php_pdo_oci.dll
	
	
	$host='10.0.220.100';    	// le chemin vers le serveur
	$port='1521';				// 1521 port pour oracle 3306 pour mysql
	$dbname='ORAPROF';  	        // le nom de votre base de données ou du service oracle
	$user='scott';  			    // nom d'utilisateur pour se connecter
	$password='tiger';       // mot de passe de l'utilisateur

	
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
		//die();
	}	

	/*echo "Connexion ouverte<br />";	
	
	if ($connexion) {
		
		// on va chercher tous les infos de la table
		$resultats=$connexion->query("SELECT * FROM EMP;");
		
		// on récupére le résultat sous forme d'objet
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		
		// on récupère la liste des infos
		while( $ligne = $resultats->fetch() )
		{
			// on affiche les infos
			echo "Information : $ligne->ENAME <br />";
		}
		
		$connexion = NULL ; // Fermeture de la connexion
		echo "Connexion fermee";
	}
*/
	phpinfo();
	echo "<hr />";
 
	$conn = oci_connect('scott', 'tiger', '10.0.220.100:1521/ORAPROF');
	if (!$conn) {
		$e = oci_error();
		var_dump($e);
		//trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}
	

?>

