<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>absence</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <style type="text/css">
    table
        {
            border-collapse:collapse;
            border:2px solid black;
            margin:auto;
        }
	th, td
        {
            border:1px solid black;
        }
        </style>
    </head>
    <body>
<?php
mysql_connect("127.0.0.1", "root", "");
mysql_select_db("recrutement");

$retour = mysql_query('SELECT COUNT(*) AS nb_messages FROM recrue ');
$donnees = mysql_fetch_array($retour);
$reponse = mysql_query('SELECT * FROM recrue');

mysql_close(); 


?>



<table><tr>
<th>Pseudo</th>
<th>Age</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>Niveau</th>
<th>Nombre de lan</th>
<th>disponibilité lundi</th>
<th>disponibilité mardi</th>
<th>disponibilité mercredi</th>
<th>disponibilité jeudi</th>
<th>disponibilité vendredi</th>
<th>Nombre_exteam</th>
<th>Arme terro</th>
<th>Arme ct</th>
<th>Localisation</th>
<th>Motivation_au_niveau_du_jeu&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pourquoi_nous?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>Ou avez vous entendu parlez de nous</th>
<th>Autre</th>
<th>Steam_id</th>
<th>Msn</th>
<th>Steam_amis</th>
<th>lan 1</th>
<th>lan 2</th>
<th>lan 3</th>
<th>lan 4</th>
<th>lan 5</th>
<th>lan 6</th>
<th>lan 7</th>
<th>lan 8</th>
<th>lan 9</th>
<th>lan 10</th>
<th>team 1</th>
<th>team 2</th>
<th>team 3</th>
<th>team 4</th>
<th>team 5</th>
<th>team 6</th>
<th>team 7</th>
<th>team 8</th>
<th>team 9</th>
<th>team 10</th>
<th>site team 1</th>
<th>site team 2</th>
<th>site team 3</th>
<th>site team 4</th>
<th>site team 5</th>
<th>site team 6</th>
<th>site team 7</th>
<th>site team 8</th>
<th>site team 9</th>
<th>site team 10</th>



</tr>
<?php
while ($donnees = mysql_fetch_array($reponse) )
{
?>
<tr>
<td><?php echo $donnees['pseudo']; ?></td>
<td><?php echo $donnees['age']; ?></td>
<td><?php echo $donnees['xp_m']; ?> moi(s)<br /> <?php echo $donnees['xp_a']; ?> année(s)</td>
<td><?php echo $donnees['niveau']; ?></td>
<td><?php echo $donnees['n_lan_a']; ?></td>
<td><?php echo $donnees['dispo_de_lundi']; ?> à <?php echo $donnees['dispo_a_lundi']; ?></td>
<td><?php echo $donnees['dispo_de_mardi']; ?> à <?php echo $donnees['dispo_a_mardi']; ?></td>
<td><?php echo $donnees['dispo_de_mercredi']; ?> à <?php echo $donnees['dispo_a_mercredi']; ?></td>
<td><?php echo $donnees['dispo_de_jeudi']; ?> à <?php echo $donnees['dispo_a_jeudi']; ?></td>
<td><?php echo $donnees['dispo_de_vendredi']; ?> à <?php echo $donnees['dispo_a_vendredi']; ?></td>
<td><?php echo $donnees['n_exteam_fun']; ?> fun <br /><?php echo $donnees['n_exteam_serieuse_a']; ?> sérieuse(s)</td>
<td>pistol:<br /> <?php echo $donnees['arme_terro_pistol']; ?><br /><br /> auto:<br /> <?php echo $donnees['arme_terro_auto']; ?></td>
<td>pistol:<br /> <?php echo $donnees['arme_ct_pistol']; ?><br /><br /> auto:<br /> <?php echo $donnees['arme_ct_auto']; ?></td>
<td>dans le <?php echo $donnees['departement']; ?> à <?php echo $donnees['ville']; ?></td>
<td><?php echo $donnees['motivation_jeu']; ?></td>
<td><?php echo $donnees['pourquoi_nous']; ?></td>
<td><?php echo $donnees['ou_parler_nous']; ?></td>
<td><?php echo $donnees['autre']; ?></td>
<td><?php echo $donnees['steam_id']; ?></td>
<td><?php echo $donnees['msn']; ?></td>
<td><?php echo $donnees['steam_amis']; ?></td>
<td><?php echo $donnees['lan_final_1']; ?></td>
<td><?php echo $donnees['lan_final_2']; ?></td>
<td><?php echo $donnees['lan_final_3']; ?></td>
<td><?php echo $donnees['lan_final_4']; ?></td>
<td><?php echo $donnees['lan_final_5']; ?></td>
<td><?php echo $donnees['lan_final_6']; ?></td>
<td><?php echo $donnees['lan_final_7']; ?></td>
<td><?php echo $donnees['lan_final_8']; ?></td>
<td><?php echo $donnees['lan_final_9']; ?></td>
<td><?php echo $donnees['lan_final_10']; ?></td>
<td><?php echo $donnees['team_final_1']; ?></td>
<td><?php echo $donnees['team_final_2']; ?></td>
<td><?php echo $donnees['team_final_3']; ?></td>
<td><?php echo $donnees['team_final_4']; ?></td>
<td><?php echo $donnees['team_final_5']; ?></td>
<td><?php echo $donnees['team_final_6']; ?></td>
<td><?php echo $donnees['team_final_7']; ?></td>
<td><?php echo $donnees['team_final_8']; ?></td>
<td><?php echo $donnees['team_final_9']; ?></td>
<td><?php echo $donnees['team_final_10']; ?></td>
<td><?php echo $donnees['team_site_final_1']; ?></td>
<td><?php echo $donnees['team_site_final_2']; ?></td>
<td><?php echo $donnees['team_site_final_3']; ?></td>
<td><?php echo $donnees['team_site_final_4']; ?></td>
<td><?php echo $donnees['team_site_final_5']; ?></td>
<td><?php echo $donnees['team_site_final_6']; ?></td>
<td><?php echo $donnees['team_site_final_7']; ?></td>
<td><?php echo $donnees['team_site_final_8']; ?></td>
<td><?php echo $donnees['team_site_final_9']; ?></td>
<td><?php echo $donnees['team_site_final_10']; ?></td>
</tr>

<?php
} // Fin de la boucle qui liste les news
?>

</table>

</body>
</html>