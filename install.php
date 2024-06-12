<?php
mysql_connect("127.0.0.1", "root", "") or die(mysql_error()); 
mysql_select_db("recrutement") or die(mysql_error());

mysql_query("DROP TABLE IF EXISTS recrue") or die(mysql_error()); 

mysql_query("CREATE TABLE recrue (
  id int NOT NULL auto_increment,
  pseudo text NOT NULL,
  age int NOT NULL,
  xp_m int NOT NULL,
  xp_a int NOT NULL,
  niveau text NOT NULL,
  n_lan_a int NOT NULL,
  dispo_de_lundi text NOT NULL,
  dispo_a_lundi text NOT NULL,
  dispo_de_mardi text NOT NULL,
  dispo_a_mardi text NOT NULL,
  dispo_de_mercredi text NOT NULL,
  dispo_a_mercredi text NOT NULL,
  dispo_de_jeudi text NOT NULL,
  dispo_a_jeudi text NOT NULL,
  dispo_de_vendredi text NOT NULL,
  dispo_a_vendredi text NOT NULL,
  n_exteam_fun int NOT NULL,
  n_exteam_serieuse_a int NOT NULL,
  arme_terro_pistol text NOT NULL,
  arme_terro_auto text NOT NULL,
  arme_ct_pistol text NOT NULL,
  arme_ct_auto text NOT NULL,
  departement text NOT NULL,
  ville text NOT NULL,
  motivation_jeu text NOT NULL,
  pourquoi_nous text NOT NULL,
  ou_parler_nous text NOT NULL,
  autre text NOT NULL,
  steam_id text NOT NULL,
  msn text NOT NULL,
  steam_amis text NOT NULL,
  team_final_1 text NOT NULL,
  team_final_2 text NOT NULL,
  team_final_3 text NOT NULL,
  team_final_4 text NOT NULL,
  team_final_5 text NOT NULL,
  team_final_6 text NOT NULL,
  team_final_7 text NOT NULL,
  team_final_8 text NOT NULL,
  team_final_9 text NOT NULL,
  team_final_10 text NOT NULL,
  lan_final_1 text NOT NULL,
  lan_final_2 text NOT NULL,
  lan_final_3 text NOT NULL,
  lan_final_4 text NOT NULL,
  lan_final_5 text NOT NULL,
  lan_final_6 text NOT NULL,
  lan_final_7 text NOT NULL,
  lan_final_8 text NOT NULL,
  lan_final_9 text NOT NULL,
  lan_final_10 text NOT NULL,
  team_site_final_1 text NOT NULL,
  team_site_final_2 text NOT NULL,
  team_site_final_3 text NOT NULL,
  team_site_final_4 text NOT NULL,
  team_site_final_5 text NOT NULL,
  team_site_final_6 text NOT NULL,
  team_site_final_7 text NOT NULL,
  team_site_final_8 text NOT NULL,
  team_site_final_9 text NOT NULL,
  team_site_final_10 text NOT NULL,
  
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;") or die(mysql_error()); 
$a=mysql_query("SELECT lan_final_10 FROM recrue");



if($a == true)
{
echo "installation réussi";
}
else
{
echo "installation échoué";
}
?>
