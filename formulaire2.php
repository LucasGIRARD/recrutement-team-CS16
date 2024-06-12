<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Recrutement - Présentation</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <link rel="stylesheet" media="screen" type="text/css" title="Essai" href="recrutement.css" />
   </head>
   <body onLoad="window.defaultStatus='realize by luK'" onMouseOver="window.status='realize by luK';return true">

<?php
mysql_connect("127.0.0.1", "root", "");
mysql_select_db("recrutement");

$res=mysql_query("SELECT pseudo FROM recrue");
$existe_deja = NULL;
if (isset($_POST['pseudo']) AND isset($_POST['age']) AND isset($_POST['xp_m']) AND isset($_POST['xp_a']) AND isset($_POST['n_lan']) AND isset($_POST['n_exteam_fun']) AND isset($_POST['n_exteam_serieuse']) AND isset($_POST['departement']) AND isset($_POST['ville']) AND isset($_POST['motivation_jeu']) AND isset($_POST['pourquoi_nous']) AND isset($_POST['steam_id']) AND isset($_POST['msn']) AND isset($_POST['steam_amis'])) // Si les variables existent
{

        $pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
		$age = mysql_real_escape_string(htmlspecialchars($_POST['age']));
		$xp_m = mysql_real_escape_string(htmlspecialchars($_POST['xp_m']));
		$xp_a = mysql_real_escape_string(htmlspecialchars($_POST['xp_a']));
		$niveau = ($_POST['niveau']);
		$n_lan_a = mysql_real_escape_string(htmlspecialchars($_POST['n_lan']));
		$dispo_de_lundi = ($_POST['dispo_de_lundi']);
		$dispo_a_lundi = ($_POST['dispo_a_lundi']);
		$dispo_de_mardi = ($_POST['dispo_de_mardi']);
		$dispo_a_mardi = ($_POST['dispo_a_mardi']);
		$dispo_de_mercredi = ($_POST['dispo_de_mercredi']);
		$dispo_a_mercredi = ($_POST['dispo_a_mercredi']);
		$dispo_de_jeudi = ($_POST['dispo_de_jeudi']);
		$dispo_a_jeudi = ($_POST['dispo_a_jeudi']);
		$dispo_de_vendredi = ($_POST['dispo_de_vendredi']);
		$dispo_a_vendredi = ($_POST['dispo_a_vendredi']);
		$n_exteam_fun = mysql_real_escape_string(htmlspecialchars($_POST['n_exteam_fun']));
		$n_exteam_serieuse_a = mysql_real_escape_string(htmlspecialchars($_POST['n_exteam_serieuse']));
		$arme_terro_pistol = ($_POST['arme_terro_pistol']);
		$arme_terro_auto = ($_POST['arme_terro_auto']);
		$arme_ct_pistol = ($_POST['arme_ct_pistol']);
		$arme_ct_auto = ($_POST['arme_ct_auto']);
		$departement = ($_POST['departement']);
		$ville = mysql_real_escape_string(htmlspecialchars($_POST['ville']));
		$motivation_jeu = mysql_real_escape_string(htmlspecialchars($_POST['motivation_jeu']));
		$pourquoi_nous = mysql_real_escape_string(htmlspecialchars($_POST['pourquoi_nous']));
		$ou_parler_nous = ($_POST['ou_parler_nous']);
		$autre = mysql_real_escape_string(htmlspecialchars($_POST['autre']));
		$steam_id = mysql_real_escape_string(htmlspecialchars($_POST['steam_id']));
		$msn = mysql_real_escape_string(htmlspecialchars($_POST['msn']));
		$steam_amis = mysql_real_escape_string(htmlspecialchars($_POST['steam_amis']));


if($n_lan_a >= 10)
{
$n_lan_a="10";
}

if($n_exteam_serieuse_a >= 10)		
{
$n_exteam_serieuse_a="10";
}		


while($data=mysql_fetch_array($res))
{
if($data[0] == $pseudo) //data[0] parce tu n'as qu'un champ dans le select
{
$existe_deja=1;
}

}

		
if($existe_deja != 1)
{		
mysql_query("INSERT INTO recrue VALUES('', '" . $pseudo . "', '" . $age . "', '" . $xp_m . "', '" . $xp_a . "', '" . $niveau . "', '" . $n_lan_a . "', '" . $dispo_de_lundi . "', '" . $dispo_a_lundi . "', '" . $dispo_de_mardi . "', '" . $dispo_a_mardi . "', '" . $dispo_de_mercredi . "', '" . $dispo_a_mercredi . "', '" . $dispo_de_jeudi . "', '" . $dispo_a_jeudi . "', '" . $dispo_de_vendredi . "', '" . $dispo_a_vendredi . "', '" . $n_exteam_fun . "', '" . $n_exteam_serieuse_a . "', '" . $arme_terro_pistol . "', '" . $arme_terro_auto . "', '" . $arme_ct_pistol . "', '" . $arme_ct_auto . "', '" . $departement . "', '" . $ville . "', '" . $motivation_jeu . "', '" . $pourquoi_nous . "', '" . $ou_parler_nous . "', '" . $autre . "', '" . $steam_id . "', '" . $msn . "', '" . $steam_amis . "', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')") or die(mysql_error());

$id_recrue = mysql_query('SELECT id FROM recrue WHERE pseudo=\'' . $pseudo . '\'') or die(mysql_error());
$id_recrue_tab = mysql_fetch_array($id_recrue) or die(mysql_error());
	
}
else
{
echo "le est pseudo déjà pris ou tout les champs n'ont pas était rempli correctement!";
}

}
else
{
echo "probleme, info non rentrer!";
}

 // On se déconnecte de MySQL
        mysql_close();
		
if($existe_deja != 1)
{
?>

veuillez compléter tout les champs ou les informations ne seront pas sauvegarder!<br />
si vous avez un oublié; mettre:"O" dans le champ concerné!<br />
pour les sites web, si le site est mort;mettre:"site mort" dans le champ concerné!

<form method="post" action="confirmation.php">

nom des lans :
<br />
<?php
for ($a = 1 ; $a <= $n_lan_a ; $a++)
{
?>
    <?php echo $a; ?> &nbsp;&nbsp;&nbsp; <input name="lan_<?php echo $a; ?>" type="text" /><br />
<?php
}
?>
<br />
<br />
exteam sérieuse:
<br />
<?php
for ($b = 1 ; $b <= $n_exteam_serieuse_a ; $b++)
{
?>

<?php echo $b; ?> &nbsp;&nbsp;&nbsp;&nbsp; nom : <input name="team_<?php echo $b; ?>" type="text" /> &nbsp; siteweb: <input name="team_site_<?php echo $b; ?>" type="text" /> <br />
<?php
}
?>
<br />
<br />
<input type="hidden" name="id_recrue" value='<?php echo $id_recrue_tab[0]; ?>' />
<input type="hidden" name="nombre_champ_lan" value='<?php echo $n_lan_a; ?>' />
<input type="hidden" name="nombre_champ_team_serieuse" value='<?php echo $n_exteam_serieuse_a; ?>' />
<input type="submit" value="Envoyer" />

</form>

<?php
}
?>
   <script language="JavaScript1.2">
function ejs_nodroit()
	{
	alert('Clic droit interdit');
	return(false);
	}

document.oncontextmenu = ejs_nodroit;
</script>

<!-- phpmyvisites -->
<a href="http://st.free.fr/" title="phpMyVisites | Open source web analytics"
onclick="window.open(this.href);return(false);"><script type="text/javascript">
<!--
var a_vars = Array();
var pagename='';

var phpmyvisitesSite = 100559;
var phpmyvisitesURL = "http://st.free.fr/phpmyvisites.php";
//-->
</script>
<script language="javascript" src="http://st.free.fr/phpmyvisites.js" type="text/javascript"></script>
<object><noscript><p>phpMyVisites | Open source web analytics
<img src="http://st.free.fr/phpmyvisites.php" alt="Statistics" style="border:0" />
</p></noscript></object></a>
<!-- /phpmyvisites --> 
   
   </body>
</html>