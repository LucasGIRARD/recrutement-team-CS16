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

$team_final_1 = NULL;
$team_final_2 = NULL;
$team_final_3 = NULL;
$team_final_4 = NULL;
$team_final_5 = NULL;
$team_final_6 = NULL;
$team_final_7 = NULL;
$team_final_8 = NULL;
$team_final_9 = NULL;
$team_final_10 = NULL;
$lan_final_1 = NULL;
$lan_final_2 = NULL;
$lan_final_3 = NULL;
$lan_final_4 = NULL;
$lan_final_5 = NULL;
$lan_final_6 = NULL;
$lan_final_7 = NULL;
$lan_final_8 = NULL;
$lan_final_9 = NULL;
$lan_final_10 = NULL;
$team_site_final_1 = NULL;
$team_site_final_2 = NULL;
$team_site_final_3 = NULL;
$team_site_final_4 = NULL;
$team_site_final_5 = NULL;
$team_site_final_6 = NULL;
$team_site_final_7 = NULL;
$team_site_final_8 = NULL;
$team_site_final_9 = NULL;
$team_site_final_10 = NULL;
$id_recrue = mysql_real_escape_string(htmlspecialchars($_POST['id_recrue']));

if (isset($_POST['lan_1']) AND isset($_POST['team_1']) AND isset($_POST['team_site_1']) ) // Si les variables existent
{
if ($_POST['nombre_champ_lan'] == 1)
{
    $lan_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['lan_1'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_lan'] == 2)
{
    $lan_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['lan_1'])) or die(mysql_error());
    $lan_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['lan_2'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_lan'] == 3)
{
    $lan_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['lan_1'])) or die(mysql_error());
	$lan_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['lan_2'])) or die(mysql_error());
	$lan_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['lan_3'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_lan'] == 4)
{
    $lan_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['lan_1'])) or die(mysql_error());
	$lan_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['lan_2'])) or die(mysql_error());
	$lan_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['lan_3'])) or die(mysql_error());
	$lan_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['lan_4'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_lan'] == 5)
{
    $lan_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['lan_1'])) or die(mysql_error());
	$lan_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['lan_2'])) or die(mysql_error());
	$lan_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['lan_3'])) or die(mysql_error());
	$lan_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['lan_4'])) or die(mysql_error());
	$lan_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['lan_5'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_lan'] == 6)
{
    $lan_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['lan_1'])) or die(mysql_error());
	$lan_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['lan_2'])) or die(mysql_error());
	$lan_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['lan_3'])) or die(mysql_error());
	$lan_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['lan_4'])) or die(mysql_error());
	$lan_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['lan_5'])) or die(mysql_error());
	$lan_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['lan_6'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_lan'] == 7)
{
    $lan_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['lan_1'])) or die(mysql_error());
	$lan_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['lan_2'])) or die(mysql_error());
	$lan_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['lan_3'])) or die(mysql_error());
	$lan_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['lan_4'])) or die(mysql_error());
	$lan_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['lan_5'])) or die(mysql_error());
	$lan_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['lan_6'])) or die(mysql_error());
	$lan_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['lan_7'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_lan'] == 8)
{
    $lan_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['lan_1'])) or die(mysql_error());
	$lan_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['lan_2'])) or die(mysql_error());
	$lan_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['lan_3'])) or die(mysql_error());
	$lan_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['lan_4'])) or die(mysql_error());
	$lan_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['lan_5'])) or die(mysql_error());
	$lan_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['lan_6'])) or die(mysql_error());
	$lan_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['lan_7'])) or die(mysql_error());
	$lan_final_8 = mysql_real_escape_string(htmlspecialchars($_POST['lan_8'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_lan'] == 9)
{
    $lan_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['lan_1'])) or die(mysql_error());
	$lan_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['lan_2'])) or die(mysql_error());
	$lan_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['lan_3'])) or die(mysql_error());
	$lan_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['lan_4'])) or die(mysql_error());
	$lan_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['lan_5'])) or die(mysql_error());
	$lan_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['lan_6'])) or die(mysql_error());
	$lan_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['lan_7'])) or die(mysql_error());
	$lan_final_8 = mysql_real_escape_string(htmlspecialchars($_POST['lan_8'])) or die(mysql_error());
	$lan_final_9 = mysql_real_escape_string(htmlspecialchars($_POST['lan_9'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_lan'] == 10)
{
    $lan_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['lan_1'])) or die(mysql_error());
	$lan_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['lan_2'])) or die(mysql_error());
	$lan_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['lan_3'])) or die(mysql_error());
	$lan_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['lan_4'])) or die(mysql_error());
	$lan_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['lan_5'])) or die(mysql_error());
	$lan_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['lan_6'])) or die(mysql_error());
	$lan_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['lan_7'])) or die(mysql_error());
	$lan_final_8 = mysql_real_escape_string(htmlspecialchars($_POST['lan_8'])) or die(mysql_error());
	$lan_final_9 = mysql_real_escape_string(htmlspecialchars($_POST['lan_9'])) or die(mysql_error());
	$lan_final_10 = mysql_real_escape_string(htmlspecialchars($_POST['lan_10'])) or die(mysql_error());
}



if ($_POST['nombre_champ_team_serieuse'] == 1)
{
	$team_site_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_1'])) or die(mysql_error());
	
	$team_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_1'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_team_serieuse'] == 2)
{
	$team_site_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_1'])) or die(mysql_error());
    $team_site_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_2'])) or die(mysql_error());
	
	$team_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_1'])) or die(mysql_error());
	$team_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_2'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_team_serieuse'] == 3)
{
	$team_site_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_1'])) or die(mysql_error());
    $team_site_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_2'])) or die(mysql_error());
    $team_site_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_3'])) or die(mysql_error());
	
    $team_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_1'])) or die(mysql_error());
	$team_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_2'])) or die(mysql_error());
	$team_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_3'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_team_serieuse'] == 4)
{
	$team_site_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_1'])) or die(mysql_error());
    $team_site_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_2'])) or die(mysql_error());
    $team_site_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_3'])) or die(mysql_error());
    $team_site_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_4'])) or die(mysql_error());
	
    $team_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_1'])) or die(mysql_error());
	$team_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_2'])) or die(mysql_error());
	$team_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_3'])) or die(mysql_error());
	$team_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_4'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_team_serieuse'] == 5)
{
	$team_site_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_1'])) or die(mysql_error());
    $team_site_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_2'])) or die(mysql_error());
    $team_site_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_3'])) or die(mysql_error());
    $team_site_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_4'])) or die(mysql_error());
    $team_site_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_5'])) or die(mysql_error());
	
    $team_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_1'])) or die(mysql_error());
	$team_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_2'])) or die(mysql_error());
	$team_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_3'])) or die(mysql_error());
	$team_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_4'])) or die(mysql_error());
	$team_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_5'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_team_serieuse'] == 6)
{
	$team_site_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_1'])) or die(mysql_error());
    $team_site_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_2'])) or die(mysql_error());
    $team_site_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_3'])) or die(mysql_error());
    $team_site_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_4'])) or die(mysql_error());
    $team_site_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_5'])) or die(mysql_error());
    $team_site_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_6'])) or die(mysql_error());
	
    $team_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_1'])) or die(mysql_error());
	$team_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_2'])) or die(mysql_error());
	$team_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_3'])) or die(mysql_error());
	$team_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_4'])) or die(mysql_error());
	$team_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_5'])) or die(mysql_error());
	$team_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['team_6'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_team_serieuse'] == 7)
{
	$team_site_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_1'])) or die(mysql_error());
    $team_site_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_2'])) or die(mysql_error());
    $team_site_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_3'])) or die(mysql_error());
    $team_site_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_4'])) or die(mysql_error());
    $team_site_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_5'])) or die(mysql_error());
    $team_site_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_6'])) or die(mysql_error());
    $team_site_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_7'])) or die(mysql_error());
	
    $team_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_1'])) or die(mysql_error());
	$team_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_2'])) or die(mysql_error());
	$team_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_3'])) or die(mysql_error());
	$team_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_4'])) or die(mysql_error());
	$team_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_5'])) or die(mysql_error());
	$team_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['team_6'])) or die(mysql_error());
	$team_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['team_7'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_team_serieuse'] == 8)
{
	$team_site_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_1'])) or die(mysql_error());
    $team_site_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_2'])) or die(mysql_error());
    $team_site_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_3'])) or die(mysql_error());
    $team_site_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_4'])) or die(mysql_error());
    $team_site_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_5'])) or die(mysql_error());
    $team_site_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_6'])) or die(mysql_error());
    $team_site_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_7'])) or die(mysql_error());
    $team_site_final_8 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_8'])) or die(mysql_error());
	
    $team_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_1'])) or die(mysql_error());
	$team_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_2'])) or die(mysql_error());
	$team_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_3'])) or die(mysql_error());
	$team_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_4'])) or die(mysql_error());
	$team_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_5'])) or die(mysql_error());
	$team_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['team_6'])) or die(mysql_error());
	$team_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['team_7'])) or die(mysql_error());
	$team_final_8 = mysql_real_escape_string(htmlspecialchars($_POST['team_8'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_team_serieuse'] == 9)
{
	$team_site_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_1'])) or die(mysql_error());
    $team_site_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_2'])) or die(mysql_error());
    $team_site_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_3'])) or die(mysql_error());
    $team_site_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_4'])) or die(mysql_error());
    $team_site_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_5'])) or die(mysql_error());
    $team_site_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_6'])) or die(mysql_error());
    $team_site_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_7'])) or die(mysql_error());
    $team_site_final_8 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_8'])) or die(mysql_error());
    $team_site_final_9 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_9'])) or die(mysql_error());
	
	$team_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_1'])) or die(mysql_error());
	$team_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_2'])) or die(mysql_error());
	$team_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_3'])) or die(mysql_error());
	$team_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_4'])) or die(mysql_error());
	$team_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_5'])) or die(mysql_error());
	$team_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['team_6'])) or die(mysql_error());
	$team_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['team_7'])) or die(mysql_error());
	$team_final_8 = mysql_real_escape_string(htmlspecialchars($_POST['team_8'])) or die(mysql_error());
	$team_final_9 = mysql_real_escape_string(htmlspecialchars($_POST['team_9'])) or die(mysql_error());
}
elseif ($_POST['nombre_champ_team_serieuse'] == 10)
{
	$team_site_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_1'])) or die(mysql_error());
    $team_site_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_2'])) or die(mysql_error());
    $team_site_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_3'])) or die(mysql_error());
    $team_site_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_4'])) or die(mysql_error());
    $team_site_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_5'])) or die(mysql_error());
    $team_site_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_6'])) or die(mysql_error());
    $team_site_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_7'])) or die(mysql_error());
    $team_site_final_8 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_8'])) or die(mysql_error());
    $team_site_final_9 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_9'])) or die(mysql_error());
    $team_site_final_10 = mysql_real_escape_string(htmlspecialchars($_POST['team_site_10'])) or die(mysql_error());
	
    $team_final_1 = mysql_real_escape_string(htmlspecialchars($_POST['team_1'])) or die(mysql_error());
	$team_final_2 = mysql_real_escape_string(htmlspecialchars($_POST['team_2'])) or die(mysql_error());
	$team_final_3 = mysql_real_escape_string(htmlspecialchars($_POST['team_3'])) or die(mysql_error());
	$team_final_4 = mysql_real_escape_string(htmlspecialchars($_POST['team_4'])) or die(mysql_error());
	$team_final_5 = mysql_real_escape_string(htmlspecialchars($_POST['team_5'])) or die(mysql_error());
	$team_final_6 = mysql_real_escape_string(htmlspecialchars($_POST['team_6'])) or die(mysql_error());
	$team_final_7 = mysql_real_escape_string(htmlspecialchars($_POST['team_7'])) or die(mysql_error());
	$team_final_8 = mysql_real_escape_string(htmlspecialchars($_POST['team_8'])) or die(mysql_error());
	$team_final_9 = mysql_real_escape_string(htmlspecialchars($_POST['team_9'])) or die(mysql_error());
	$team_final_10 = mysql_real_escape_string(htmlspecialchars($_POST['team_10'])) or die(mysql_error());
}

mysql_query("UPDATE recrue SET team_final_1='" . $team_final_1 . "', team_final_2='" . $team_final_2 . "', team_final_3='" . $team_final_3 . "', team_final_4='" . $team_final_4 . "', team_final_5='" . $team_final_5 . "', team_final_6='" . $team_final_6 . "', team_final_7='" . $team_final_7 . "', team_final_8='" . $team_final_8 . "', team_final_9='" . $team_final_9 . "', team_final_10='" . $team_final_10 . "', lan_final_1='" . $lan_final_1 . "', lan_final_2='" . $lan_final_2 . "', lan_final_3='" . $lan_final_3 . "', lan_final_4='" . $lan_final_4 . "', lan_final_5='" . $lan_final_5 . "', lan_final_6='" . $lan_final_6 . "', lan_final_7='" . $lan_final_7 . "', lan_final_8='" . $lan_final_8 . "', lan_final_9='" . $lan_final_9 . "', lan_final_10='" . $lan_final_10 . "', team_site_final_1='" . $team_site_final_1 . "', team_site_final_2='" . $team_site_final_2 . "', team_site_final_3='" . $team_site_final_3 . "', team_site_final_4='" . $team_site_final_4 . "', team_site_final_5='" . $team_site_final_5 . "', team_site_final_6='" . $team_site_final_6 . "', team_site_final_7='" . $team_site_final_7 . "', team_site_final_8='" . $team_site_final_8 . "', team_site_final_9='" . $team_site_final_9 . "', team_site_final_10='" . $team_site_final_10 . "' WHERE id='" . $id_recrue . "'") or die(mysql_error()); 

}
else
{
echo "un ou plusieurs champ n'a pas été completé, veuillez retourner en arrière pour reremplir les champs";
}

// On se déconnecte de MySQL
mysql_close();
?>   
<p>
votre demande à bien été enregistré!
</p>
   
   

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