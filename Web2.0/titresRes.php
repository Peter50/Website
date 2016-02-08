<?php
	include 'compteur.php';
?>
<h1>Resultats titre</h1>
<?php
	echo "<h2>Ouvrages</h2>";
	$req="SELECT * FROM ouvrage WHERE nom LIKE '%".$_GET["titre"]."%'";
	$res=pg_query($dbconn,$req);
	echo "<table border=\"1px\" witdh='50%'>";
	echo "<tr>";
	for($i=0;$i<pg_num_fields($res);$i++)
	  echo "<th>".pg_field_name($res,$i)."</th>";
	echo "</tr>";

	for($i=0;$i<pg_num_rows($res);$i++)
	  {
	    echo "<tr>";
	    for($j=0;$j<pg_num_fields($res);$j++)
	      {
		if (pg_field_type($res,$j) =="bytea")
		{
		 $table=pg_field_table($res,0);
		 echo "<td><img width='60%' src='photo.php?table=" . $table . "&id=" . pg_field_name($res,0). "&valeur=" . pg_fetch_result($res,$i,0) . "&champ=" . pg_field_name($res,$j) . "'></td>";
		}
		else echo "<td>".pg_fetch_result($res,$i,$j)."</td>";
	      }
	    echo "</tr>";
	  }
	echo "</table>";
	echo "<h2>Exemplaires</h2>";
	$req="SELECT * FROM exemplaire WHERE code_ouvrage IN (SELECT code FROM ouvrage WHERE nom LIKE '%".$_GET["titre"]."%') ORDER BY code_ouvrage";
	$res=pg_query($dbconn,$req);
	echo "<table border=\"1px\" witdh='50%'>";
	echo "<tr>";
	for($i=0;$i<pg_num_fields($res);$i++)
	  echo "<th>".pg_field_name($res,$i)."</th>";
	echo "</tr>";

	for($i=0;$i<pg_num_rows($res);$i++)
	  {
	    echo "<tr>";
	    for($j=0;$j<pg_num_fields($res);$j++)
	      {
		if (pg_field_type($res,$j) =="bytea")
		{
		 $table=pg_field_table($res,0);
		 echo "<td><img width='60%' src='photo.php?table=" . $table . "&id=" . pg_field_name($res,0). "&valeur=" . pg_fetch_result($res,$i,0) . "&champ=" . pg_field_name($res,$j) . "'></td>";
		}
		else echo "<td>".pg_fetch_result($res,$i,$j)."</td>";
	      }
	    echo "</tr>";
	  }
	echo "</table>";
?>
<?php
	include 'compteurFin.php';
?>