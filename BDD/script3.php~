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
  	<h1> Choisir la liste des colones que vous voulez afficher</h1>
  	<?php
      $table=$_GET["table"];
  		echo "<form action='http://www.ecole.ensicaen.fr/~pelay/BDD/script4.php'>";
      echo '<input type="hidden" name="table" value="'.$table.'">';
  		$req="SELECT a.attname FROM pg_attribute as a, pg_class as c WHERE c.relname='".$table."' AND pg_get_userbyid(c.relowner)='pelay' AND a.attrelid=c.relfilenode AND a.attname NOT IN ('cmax','xmax','cmin','xmin','oid','ctid','tableoid');";
  		$query=pg_query($dbconn,$req);
  		$nom='colone'; 
  		aff_check_box($query,$nom,0);
  		echo "<input type='submit' value='Puis choisir les infos a afficher'>";
      echo "<a href='http://www.ecole.ensicaen.fr/~pelay/BDD/script2.php'><br/>Retour au choix de la table</a>";

  	?>
  </body>
</html>
