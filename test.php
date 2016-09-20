<?php
	include "connectAD.php";
	
	
	echo "TEST fonction compteSQL <hr />";
	
	$sql= "select * from matable";
	
	$result = compteSQL($sql);
	
	echo "RESULTAT : ".$result;
	
?>