<?php
	include 'compteur.php';
?>
<h1>Resultats Auteurs</h1>
<?php
	$req="SELECT * FROM auteurs WHERE nom LIKE '%".$_GET["nom"]."%'";
	$res=pg_query($dbconn,$req);
	echo "<table border=\"1px\" witdh='50%'>";
	echo "<tr>";
	for($i=0;$i<pg_num_fields($res);$i++)
	  echo "<th>".pg_field_name($res,$i)."</th>";
	echo "</tr>";

	for($i=0;$i<pg_num_rows($res);$i++){
	    echo "<tr>";
	    for($j=0;$j<pg_num_fields($res);$j++){
			if (pg_field_name($res,$j) =="nom"){
		 		$table=pg_field_table($res,0);
		 		echo "<td><a href=auteursRes2.php?code=".pg_fetch_result($res,$i,0).">".pg_fetch_result($res,$i,$j)."</td>";
			}else echo "<td>".pg_fetch_result($res,$i,$j)."</td>";
	    }
	    echo "</tr>";
	  }
	echo "</table>";
?>
<?php
	include 'compteurFin.php';
?>