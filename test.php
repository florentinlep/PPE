<?php
	include "connectAD.php";
	
	
	/*echo "TEST fonction compteSQL <hr />";
	$sql= "select * from matable";
	$result = compteSQL($sql);
	echo "RESULTAT : ".$result;
	
	echo "TEST fonction tableSQL <hr />";
	$sql= "select * from matable";
	$result = tableSQL($sql);
	var_dump($result);	
	
	echo "TEST champSQL<hr />";
	$sql = "select count(*) from matable;";
	$result = champSQL($sql);
	echo $result;
	
	echo "TEST nombreChamp<hr />";
	$sql = "select * from matable;";
	$result = nombreChamp($sql);
	echo $result;*/
	
	echo "TEST typeChamp<hr />";
	$sql = "select * from matable;";
	$result = typeChamp($sql,0);
	echo versionMYSQL();
	
?>