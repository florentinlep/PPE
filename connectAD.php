<?php
	include "AccesDonnees4.6.php";

	$ip=explode(".",$_SERVER['SERVER_ADDR']);

	switch ($ip[0]) {

		case 127 :
		case 192 :
		//local
			$host = "127.0.0.1";
			$user = "root";
			$password = "";
			$dbname = "slam4";
			$port='3306';
			break;
			
		case 31 :
			//hostinger
			$host = "mysql.hostinger.fr";
			$user = "u627393142_user";
			$password = "P@ssword";
			$dbname = "u627393142_slam4";
			$port='3306';
			break;
			
		default :
			exit ("Serveur non reconnu...");
			break;
	}

	$connexion=connexion($host,$port,$dbname,$user,$password);
	
	if ($connexion) {
		echo "Connexion reussie<br />";
		echo "Base $dbname selectionnee... <br />";
		echo "Mode acces : $modeacces<br />";
	}

	
?>

