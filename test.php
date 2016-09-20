<?php
	include "connectAD.php";
	
	
	/*echo "TEST fonction compteSQL <hr />";
	$sql= "select * from matable";
	$result = compteSQL($sql);
	echo "RESULTAT : ".$result;*/
	
	echo "TEST fonction tableSQL <hr />";
	$sql= "select * from matable";
	$result = tableSQL($sql);
	var_dump($result);	
	
?>