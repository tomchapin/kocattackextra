<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Auto-Updater Usage</title>
<style>
	body {
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px;
	}
</style>
</head>
<body>

<h1><a href="http://www.tomchapin.me">TomChapin.Me</a> &gt; Auto-Updater Usage</h1>

<table cellpadding="5" cellspacing="0" border="0">
    <thead>
        <tr>
            <th align="left" bgcolor="#333333" style="color:#FFF; padding-right:5px;">Script ID</th>
        	<th align="left" bgcolor="#333333" style="border-left:solid 1px #FFF; color:#FFF;">Script Name</th>
        	<th align="left" bgcolor="#333333" style="border-left:solid 1px #FFF; color:#FFF;">Auto-Update Requests<br />(since 05/10/2011)</th>
            <th align="left" bgcolor="#333333" style="border-left:solid 1px #FFF; color:#FFF;">Links</th>
        </tr>
    </thead>
    <tbody>
		<?php
        
            // Include database connection
            include_once("database_connection.php");
            
            // Include Tom's utils
            include_once("toms_utils_latest.php");
			
			$row_color_odd = "#FFFFFF";
			$row_color_even = "#FFFFFF";
            
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
				echo '<tr><td align="left" bgcolor="'.$row_color.'" style="border-bottom:solid 1px #CCC;">'.$result['userscripts_id'].'</td><td align="left" bgcolor="'.$row_color.'" style="border-bottom:solid 1px #CCC;"><a href="http://userscripts.org/scripts/show/'.$result['userscripts_id'].'">'.$result['script_name'].'</a></td><td align="left" bgcolor="'.$row_color.'" style="border-bottom:solid 1px #CCC;">'.$result['downloads'].'</td><td align="left" bgcolor="'.$row_color.'" style="border-bottom:solid 1px #CCC;"><a href="http://userscripts.org/scripts/show/'.$result['userscripts_id'].'">Userscript Page</a> | <a href="http://www.tomchapin.me/auto-updater.php?id='.$result['userscripts_id'].'">Auto-Updater Link</a> | <a href="http://userscripts.org/scripts/source/'.$result['userscripts_id'].'.user.js">Remote File</a> | <a href="http://www.tomchapin.me/script_cache/'.$result['userscripts_id'].'.meta.js">Local Meta Cache</a></td></tr>';
				$downloads_num += $result['downloads'];
				$row_num++;
			}
        
        
        ?>
        <tr>
            <td align="left" bgcolor="#333333">&nbsp;</td>
            <td align="left" bgcolor="#333333">&nbsp;</td>
            <td align="left" bgcolor="#333333" style="border-left:solid 1px #FFF; color:#FFF;"><?php echo $downloads_num; ?></td>
            <td align="left" bgcolor="#333333">&nbsp;</td>
        </tr>
    </tbody>
</table>

</body>
</html>
