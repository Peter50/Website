<?php
	include 'compteur.php';
?>
<h1>Resultats Auteurs : 
<?php
	$req="SELECT * FROM auteurs WHERE code =".$_GET["code"];
	$res=pg_query($dbconn,$req);
	echo pg_fetch_result($res,0,2)." ".pg_fetch_result($res,0,1);
?></h1>
<?php
	echo "<h2>Ouvrages</h2>";
	$req="SELECT * FROM ouvrage WHERE code IN ( SELECT code_ouvrage FROM ecrit_par WHERE code_auteur =".$_GET["code"]." )";
	$res=pg_query($dbconn,$req);
	echo "<table border=\"1px\" witdh='50%'>";
	echo "<tr>";
	for($i=0;$i<pg_num_fields($res);$i++)
	  echo "<th>".pg_field_name($res,$i)."</th>";
	echo "</tr>";

	for($i=0;$i<pg_num_rows($res);$i++)
	  {
	    echo "<tr>";
	    for($j=0;$j<pg_num_fields($res);$j++){
			echo "<td>".pg_fetch_result($res,$i,$j)."</td>";
	      }
	    echo "</tr>";
	  }
	echo "</table>";
	echo "<h2>Exemplaires</h2>";
	$req="SELECT * FROM exemplaire WHERE code_ouvrage IN (SELECT code FROM ouvrage WHERE code IN ( SELECT code_ouvrage FROM ecrit_par WHERE code_auteur =".$_GET["code"]."))";
	$res=pg_query($dbconn,$req);
	echo "<table border=\"1px\" witdh='50%'>";
	echo "<tr>";
	for($i=0;$i<pg_num_fields($res);$i++)
	  echo "<th>".pg_field_name($res,$i)."</th>";
	echo "</tr>";

	for($i=0;$i<pg_num_rows($res);$i++)
	  {
	    echo "<tr>";
	    for($j=0;$j<pg_num_fields($res);$j++){
			echo "<td>".pg_fetch_result($res,$i,$j)."</td>";
	    }
	    echo "</tr>";
	  }
	echo "</table>";
?>
<?php
	include 'compteurFin.php';
?>