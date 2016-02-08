<html>
	<?php
		$dbconn=pg_connect("host=postgres dbname=livres user=pelay password=123456") or die ("Connexion Impossible".pg_last_error());
		if(!isset($_COOKIE["cookie"])){
			setcookie("cookie","yes",time()+3600);
		}
		$file = fopen('./compteur.txt', 'r+');
		$line = fgets($file);
		fseek($file, 0);
		if(!isset($_COOKIE["cookie"])){
			$line=$line+1;
		}
		fputs($file,$line);
		fclose($file);
	?>
	<body>
		<header>
			<table style="width:100%">
				<tr>
					<td align="left">Nombre de visiteurs : 
						<?php
							$file = fopen('./compteur.txt', 'r');
							$line = fgets($file);
							echo $line;
							fclose($file);
						?>
					</td>
					<td align="center">
						<h1>Vente de livres</h1>
					</td>
					<td align="center">Bienvenue : XXX<br/>Deconnexion</td>
				</tr>
			</table>
		</header>
		<section style="float:left">
			Recherche:
			<ul>
				<li><a href="index.php">Page Principal</a></li>
				<li><a href="auteurs.php">Par Auteurs</a></li>
				<li><a href="titres.php">Par Titres</a></li>
			</ul>
		</section>
		<section style="text-align:center">
