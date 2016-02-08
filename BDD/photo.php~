<?php
   $connexion = pg_connect("host=postgres user=pelay password=123456 dbname=clinique");
   $table=$_GET["table"];
   $id=$_GET["id"];
   $valeur=$_GET["valeur"];
   $champ=$_GET["champ"];
   $requete="SELECT " . $champ . " FROM " . $table . " WHERE " .  $id . "='" . $valeur . "'";
   pg_query('SET bytea_output = "escape";'); 
   $pg_result=pg_query($connexion, $requete);
   if(!$pg_result) die("Erreur lors du listage de la photo");
   $ligne = pg_fetch_row($pg_result);
   if (!$ligne) die("Erreur pas de photo");
   $image_oid =$ligne[0];

   header('Content-type: image/jpeg');
   echo pg_unescape_bytea( $image_oid);
?>
