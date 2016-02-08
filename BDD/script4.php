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
      $table=$_GET["table"];
      $colone=$_GET["colone"];

      $liste='';
      for($i=0;$i<count($colone);$i++)
      {
        $liste=$liste.$colone[$i];
        if($i<(count($colone)-1)){
          $liste=$liste.",";
        }
        $liste=$liste." ";
      }
      echo $liste;
      echo $table;
  		$req="SELECT ".$liste." FROM ".$table."";
  		$query=pg_query($dbconn,$req);
  		aff_table($query);
      echo "<a href='http://www.ecole.ensicaen.fr/~pelay/BDD/script3.php?table=".$table."' >Retour au choix des colones</a> ";
      echo "</br>";
      echo "<a href='http://www.ecole.ensicaen.fr/~pelay/BDD/script2.php'> Retour au choix de la table</a>";
  	?>
  </body>
</html>