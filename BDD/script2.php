<?php
	include_once "utils.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 Transitional//EN">
<html>
	<head>
		<meta HTTP-EQUIV="CONTENT-TYPE" content="text/html; charset=UTF-8">
		<title>script</title>
	</head>
  <body>
  	<h1> Choisir une table dans la liste </h1>
  	<?php
  		echo "<form action='http://www.ecole.ensicaen.fr/~pelay/BDD/script3.php'>";
  		$req="SELECT tablename FROM pg_tables WHERE schemaname='pelay' AND tablename NOT LIKE 'pg%'";
  		$query=pg_query($dbconn,$req);
  		$nom='table'; 
  		aff_select($query,$nom,0);
  		echo "<input type='submit' value='Puis choisir les colones'>";
  	?>
  </body>
</html>