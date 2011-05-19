<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KoC Scripts - Auto Updater - Stats</title>
<style>
	body {
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	background-color: #141516;
	}
body,td,th {
	color: #fff;
}
a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	color: #FFF;
	text-decoration: none;
}
a:hover {
	color: #F00;
	text-decoration: none;
}
a:active {
	color: #FFF;
	text-decoration: none;
}
.headupdater {
	font-size: 24px;
}
</style>
</head>
<body>
<p class="headupdater"><a href="http://koc.god-like.org">KoC Scripts</a> - Auto-Updater<br />
  <br />
  Statistiken</p>
<table cellpadding="5" cellspacing="0" border="0">
<thead>
        <tr>
            <th align="left" bgcolor="#141516" style="color:#FFF; padding-right:5px;">Script ID</th>
   	    <th align="left" bgcolor="#141516" style="border-left:solid 1px #FFF; color:#FFF;">Script Name</th>
        	<th align="left" bgcolor="#141516" style="border-left:solid 1px #FFF; color:#FFF;">Auto-Updates<br />
        	  (seid 05/10/2011)</th>
            <th align="left" bgcolor="#141516" style="border-left:solid 1px #FFF; color:#FFF;">Links</th>
        </tr>
    </thead>
    <tbody>
		<?php
        
            // Include database connection
            include_once("database_connection.php");
            
            // Include Tom's utils
            include_once("toms_utils_latest.php");
			
			$row_color_odd = "#141516";
			$row_color_even = "#141516";
            
            // Sanitize values
            $id = intval(mysql_real_escape_string(trim($id)));
            $name = mysql_real_escape_string(trim($name));
            
            // Get records from DB
            $results = $db->q("SELECT * from `autoupdater_stats` ORDER BY `downloads` DESC");
			
			$row_num = 1;
			$downloads_num = 0;
			foreach($results as $result){
				if($row_num%2==1){
					$row_color = $row_color_odd;
				}else{
					$row_color = $row_color_even;
				}
				echo '<tr><td align="left" bgcolor="'.$row_color.'" style="border-bottom:solid 1px #CCC;">'.$result['userscripts_id'].'</td><td align="left" bgcolor="'.$row_color.'" style="border-bottom:solid 1px #CCC;"><a href="http://userscripts.org/scripts/show/'.$result['userscripts_id'].'">'.$result['script_name'].'</a></td><td align="left" bgcolor="'.$row_color.'" style="border-bottom:solid 1px #CCC;">'.$result['downloads'].'</td><td align="left" bgcolor="'.$row_color.'" style="border-bottom:solid 1px #CCC;"><a href="http://userscripts.org/scripts/show/'.$result['userscripts_id'].'">Userscript Seite</a> | <a href="http://koc.god-like.info/update/auto-updater.php?id='.$result['userscripts_id'].'">Auto-Updater Link</a> | <a href="http://userscripts.org/scripts/source/'.$result['userscripts_id'].'.user.js">Remote File</a> | <a href="http://koc.god-like.info/update/script_cache/'.$result['userscripts_id'].'.meta.js">Local Meta Cache</a>  | <a href="http://koc.god-like.info/update/'.$result['userscripts_id'].'.user.js">KoC Scripts Download</a></td></tr>';
				$downloads_num += $result['downloads'];
				$row_num++;
			}
        
        
        ?>
        <tr>
          <td align="left" bgcolor="#141516">&nbsp;</td>
        <td align="left" bgcolor="#141516">&nbsp;</td>
        <td align="left" bgcolor="#141516" style="border-left:solid 1px #FFF; color:#FFF;"><?php echo $downloads_num; ?></td>
            <td align="left" bgcolor="#141516">&nbsp;</td>
        </tr>
    </tbody>
</table>
<p><br />
</p>
<p><span class="headupdater">Download via KoC Scripts Server</span><a href="http://koc.god-like.info/update/koc_power_bot_-_deutsch.user.js"><br />
  <br />
  </a>KoC Power Bot - Deutsch   (in der tabelle Runterladen)<br />
KoC Attack - Deutsch (in der tabelle Runterladen)<a href="http://koc.god-like.info/update/koc_attack_-_deutsch.user.js"><br />
</a><a href="http://koc.god-like.info/update/koc_toolkit_-_deutsch.user.js">KoC Toolkit - Deutsch</a><br />
 Power Tools - Deutsch  (in der tabelle Runterladen)<br />
   <br />
   <u><strong>Allianz Exrta - Tools</strong></u><a href="http://koc.god-like.info/update/koc_allianz_-_extras.user.js"> <br />
   KoC Allianz - Extras</a><br />
<a href="http://koc.god-like.info/update/koc_alliance_-_extra.user.js">KoC Alliance - Extra</a><br />
<br />
<a href="http://koc.god-like.info/update/coh_allianz_-_extras.user.js">CoH Allianz - Extras</a><br />
<a href="http://koc.god-like.info/update/do_allianz_-_extras.user.js">DO Allianz - Extras</a><br />
<a href="http://koc.god-like.info/update/dsr_allianz_-_extras.user.js">DsR Allianz - Extras</a><br />
<a href="http://koc.god-like.info/update/bd_allianz_-_extras.user.js">BD Allianz - Extras</a><br />
<a href="http://koc.god-like.info/update/haf_allianz_-_extras.user.js">HaF Allianz - Extras</a><br />
<a href="http://koc.god-like.info/update/isg_allianz_extras.user.js">ISG Allianz - Extras </a><br />
<a href="http://koc.god-like.info/update/kof_allianz_-_extras.user.js">KoF Allianz - Extras</a><br />
<a href="http://koc.god-like.info/update/sf_allianz_-_extras.user.js">SF Allianz - Extras</a><br />
<a href="http://koc.god-like.info/update/ske_allianz_-_extras.user.js">SKE Allianz - Extras</a><br />
<a href="http://koc.god-like.info/update/wdb_allianz_-_extras.user.js">WDB  Allianz - Extras</a><br />
<a href="http://koc.god-like.info/update/wg_allianz_-_extras.user.js">WG Allianz - Extras</a><br />
<a href="http://koc.god-like.info/update/wr_allianz_-_extras.user.js">WR Allianz - Extras</a></p>
<h2><em>KoC Scripters und Code Entwickler</em></h2>
<p><a href="http://userscripts.org/users/niknah">niknah</a> (Erste Attack Version (Owner))<br />
  <a href="http://userscripts.org/users/57448">Thomas Chapin</a> (Owner)<br />
  <a href="http://userscripts.org/users/243203">George Jetson</a> (a.k.a. &quot;<a href="http://userscripts.org/users/285991">Fred Flintstone</a>&quot;) (Owner)<br />
  <a href="http://userscripts.org/users/245617">DonDavici</a> (Owner)<br />
  <a href="http://userscripts.org/users/253500">jontey</a> <a title="E-Mail jontey" href="mailto:jontey88@gmail.com" target="_blank">mail </a>(Owner)<br />
  <a href="http://userscripts.org/users/262464">Joe Ruddy</a> (Owner)<br />
  Nico De Belder (Owner/Committer)<br />
  <a title="PDX on Userscripts" href="http://userscripts.org/users/pdx" target="_blank">PDX</a> <a href="mailto:pdx@god-like.org">mail</a> (Owner/Committer)<br />
<strong>unbekannte entwickler</strong> - (<em>sende mir eine Nachricht wenn du hier aufgelistet werden möchtest!</em>)</p>
<p>  Userscripts Auto Updater - Copyright (c) 2011 <a href="http://www.tomchapin.me" target="_blank">TomChapin.Me</a> - <a href="http://userscripts.org/users/57448" target="_blank">Tom on Userscripts</a><br />
</p>
<a href="http://www.tomchapin.me"></a>
</body>
</html>
