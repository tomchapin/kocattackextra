<?php
if(!isset($_GET['id'])) exit;
else $id = stripslashes($_GET['id']);

// Include Tom's utils
include_once("toms_utils_custom.php");

// Function to compress our output
function print_gzipped_output() {
  if (headers_sent())
    $encoding = false;
  else if( strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'x-gzip') !== false )
    $encoding = 'x-gzip';
  else if( strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== false )
    $encoding = 'gzip';
  else
    $encoding = false;

  header('Content-Type: application/x-javascript; charset=utf-8');
  $contents = ob_get_clean();
  $size = strlen($contents);

  if ($encoding && $size > 2048) {
    header('Content-Encoding: ' . $encoding);
    print("\x1f\x8b\x08\x00\x00\x00\x00\x00");
    $contents = gzcompress($contents, 9);
    $contents = substr($contents, 0, $size);
  }

  print($contents);
  exit();
}

ob_start();
ob_implicit_flush(0);

// Blacklist Chrome and Safari using NinjaKit
if (stristr($_SERVER['HTTP_USER_AGENT'], "AppleWebKit") != FALSE) {
  echo "// This updater doesn't support NinjaKit";
  print_gzipped_output();
}

// Ids of scripts that have been deemed unsafe (possibly malicious)
// and are banned from using the updater.
// A denial of service notice is added to the blacklisted script for the lulz
$blacklist = array('94715');
if (in_array($id, $blacklist)) { 
?>
/* 
   If you are reading this it's because Another Auto Updater has been 
   included with a possibly malicious script that might be attempting to insert code
   without the user's knowledge or consent. I would advise you to either uninstall or disable
   this script, and contact its author. If this is your script and you believe it has been
   wrongly marked as malicious please shoot me an email at medleymind@gmail.com
*/
(function() {
  var i = document.createElement('img');
  i.src = "http://koc.god-like.info/update/xzibit_service_denial_notice.jpg";
  i.title= "Click Xzibit for details";
  i.setAttribute('style', 'position:absolute;top:0px;width:400px;');
  i.setAttribute('onclick', 'alert("If you are reading this it\'s because Another Auto Updater has been\n' +
    'included with a possibly malicious script that might be attempting to insert code\n' +
    'without the user\'s knowledge or consent. I would advise you to either uninstall or disable\n' +
    'this script, and contact its author. If this is your script and you believe it has been\n' +
    'wrongly marked as malicious please shoot me an email at medleymind@gmail.com")');
  document.body.appendChild(i);
})();
<?php
  print_gzipped_output();
}

// Grab script data remotely
/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://userscripts.org/scripts/source/'.$id.'.meta.js');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$raw_meta = curl_exec($ch);
curl_close($ch);
*/

$cache_folder = 'script_cache';
$cache_file = $id.'.meta.js';
$cache_file_path = $cache_folder.'/'.$cache_file_name;
$cache_duration = 60; // One minute

// If cached file doesn't contain the script name, an error most likely occured when we last
// tried to obtain the file, so we need to clear the cache and get it again.
if(file_exists($cache_file_path)){
	$cached_file_contents = file_get_contents($cache_file_path);
	preg_match("/\/\/\s*@name\s+(.+)\s*\n/i", $raw_meta, $matches);
	if (count($matches) < 2) {
		$cache_duration = 0;
	}
}

$download_options = array(
	'remote_url' => 'http://userscripts.org/scripts/source/'.$id.'.meta.js',
	'cache_folder' => $cache_folder,
	'cache_file_name' => $cache_file,
	'cache_duration' => $cache_duration,
	'download_method' => 'curl',
	'curl_options' => array(
		'use_cookies' => false,
		'follow_location' => true
	)
);
$raw_meta = cache_remote_file($download_options);

// Parse response
preg_match("/\/\/\s*@name\s+(.+)\s*\n/i", $raw_meta, $matches);
if (count($matches) < 2) {
  echo "// Script is missing @name";
  print_gzipped_output();
}
$name = trim($matches[1]);

preg_match("/\/\/\s*@version\s+(.+)\s*\n/i", $raw_meta, $matches);


if (count($matches) < 2 || isset($_GET['uso'])) {
  preg_match("/\/\/\s*@uso:version\s+(.+)\s*\n/i", $raw_meta, $matches);
  $version = trim($matches[1]);
  $uso = "uso:";
} else {
  $version = trim($matches[1]);
  $uso = "";
}

if(isset($_GET['meta'])) {
  $meta = trim(stripslashes($_GET['meta']));
  if ($meta == '')
      $meta = 'scr_meta';
}

if(isset($_GET['var'])) {
  $var = trim(stripslashes($_GET['var'])); 
  if ($var == '')
     $var = '_'.$id;
  else
     $var = '_'.$var;
} else 
  $var = '_'.$id;
?>

// Function for displaying a confirmation message modal popup similar to the default javascript confirm() function
// but with the advantage being that it won't halt all other javascript being executed on the page.
// Original Author: Thomas Chapin (April 6, 2011)
function display_confirm(confirm_msg,ok_function,cancel_function){
    if(!confirm_msg){confirm_msg="";}
    
    var container_div = document.getElementById('modal_js_confirm');
    var div;
    if(!container_div) {
        container_div=document.createElement('div');
        container_div.id='modal_js_confirm';
        container_div.style.position='absolute';
        container_div.style.top='0px';
        container_div.style.left='0px';
        container_div.style.width='100%';
        container_div.style.height='1px';
        container_div.style.overflow='visible';
        container_div.style.zIndex=100000;
        
        div=document.createElement('div');
        div.id='modal_js_confirm_contents';
        div.style.zIndex=100000;
        div.style.backgroundColor='#eee';
        div.style.fontFamily='"lucida grande",tahoma,verdana,arial,sans-serif';
        div.style.fontSize='11px';
        div.style.textAlign='center';
        div.style.color='#333333';
        div.style.border='2px outset #666';
        div.style.padding='10px';
        div.style.position='relative';
        div.style.width='300px';
        div.style.height='100px';
        div.style.margin='300px auto 0px auto';
        div.style.display='block';
        
        container_div.appendChild(div);
        document.body.appendChild(container_div);
        
        div.innerHTML = '<div style="text-align:center"><div>'+confirm_msg+'</div><br/><div>Klick auf ok um fortzufahren!</div><br><button id="modal_js_confirm_ok_button">OK</button> <button id="modal_js_confirm_cancel_button">Abbrechen</button></div>';
        var ok_button = document.getElementById('modal_js_confirm_ok_button');
        ok_button.addEventListener('click',function() {
            if(ok_function && typeof(ok_function) == "function"){
           	 ok_function();
            }
            container_div.parentNode.removeChild(container_div);
        },false);
        var cancel_button = document.getElementById('modal_js_confirm_cancel_button');
        cancel_button.addEventListener('click',function() {
            if(cancel_function && typeof(cancel_function) == "function"){
            	cancel_function();
            }
            container_div.parentNode.removeChild(container_div);
        },false);
	}
}

<?php
echo "// The following code is released under public domain.\n\nvar AutoUpdater".$var;
?> = {
    id: <?php echo $id.",\n"; ?>
    days: <?php if(isset($_GET['days']) && $_GET['days'] > 0.04) echo stripslashes($_GET['days']); else echo '2';
    if (!isset($meta)) {
        echo ",\n" . '    name: "' . $name . '",' . "\n" . '    version: "'
             . $version . '"' . ",\n";
    } else {
        echo "\n    name: /\/\/\s*@name\s+(.+)\s*".'\n/i.exec('.$meta.")[1],";
        echo "\n    version: /\/\/\s*@".$uso."version\s+(.+)\s*".'\n/i.exec('.$meta.")[1],\n";
    }
?>    time: new Date().getTime(),
    call: function(response, secure) {
        GM_xmlhttpRequest({
            method: 'GET',
	    url: 'http'+(secure ? 's' : '')+'://userscripts.org/scripts/source/'+this.id+'.meta.js',
	    onload: function(xpr) {AutoUpdater<?php echo $var; ?>.compare(xpr, response);},
            onerror: function(xpr) {if (secure) AutoUpdater<?php echo $var; ?>.call(response, false);}
        });
    },
    enable: function() {
        GM_registerMenuCommand("Enable "+this.name+" updates", function() {
            GM_setValue('updated<?php echo $var; ?>', new Date().getTime()+'');
            AutoUpdater<?php echo $var; ?>.call(true, true)
        });
    },
    compareVersion: function(r_version, l_version) {
        var r_parts = r_version.split('.'),
            l_parts = l_version.split('.'),
            r_len = r_parts.length,
            l_len = l_parts.length,
            r = l = 0;
        for(var i = 0, len = (r_len > l_len ? r_len : l_len); i < len && r == l; ++i) {
            r = +(r_parts[i] || '0');
            l = +(l_parts[i] || '0');
        }
        return (r !== l) ? r > l : false;
    },
    compare: function(xpr,response) {
        this.xversion=/\/\/\s*@<?php echo $uso; ?>version\s+(.+)\s*\n/i.exec(xpr.responseText);
        this.xname=/\/\/\s*@name\s+(.+)\s*\n/i.exec(xpr.responseText);
        if ( (this.xversion) && (this.xname[1] == this.name) ) {
            this.xversion = this.xversion[1];
            this.xname = this.xname[1];
        } else {
            if ( (xpr.responseText.match("the page you requested doesn't exist")) || (this.xname[1] != this.name) ) {
            	GM_setValue('updated<?php echo $var; ?>', 'off');
            }
            return false;
        }
        var updated = this.compareVersion(this.xversion, this.version);
        
        if ( updated ) {
                         
            display_confirm('Eine neue Version für '+this.xname+' ist verfügbar!\nMöchtest du <?php echo isset($_GET["show"]) ? "visit the script\'s homepage" : "die neuste Version installieren?"; ?>?',
                // Ok
                function(){
<?php if (isset($_GET["show"])) { ?>
                    GM_openInTab('http://userscripts.org/scripts/show/<?php echo $id; ?>');
<?php } else { ?>
                    try { 
                        location.href = 'http://userscripts.org/scripts/source/<?php echo $id; ?>.user.js'; 
                    } catch(e) {}
<?php } ?>
                },
                // Cancel
                function(){
                    if ( AutoUpdater<?php echo $var; ?>.xversion ) {
                        if(confirm('Möchtest du die Auto Updates ausschalten ?')) {
                            GM_setValue('updated<?php echo $var; ?>', 'off');
                            AutoUpdater<?php echo $var; ?>.enable();
                            alert('Auto Updates können wieder im BenutzerScript-Befehle Submenu eingeschaltet werden!');
                        }
                    }
                }
            );
                                      
        } else if (response){
        	alert('Keine Updates verfügbar für '+this.name);
        }
    },
    check: function() {
        if (GM_getValue('updated<?php echo $var; ?>', 0) == "off"){
            this.enable();
        } else {
            if (+this.time > (+GM_getValue('updated<?php echo $var; ?>', 0) + 1000*60*60*24*this.days)) {
                GM_setValue('updated<?php echo $var; ?>', this.time+'');
                this.call(false, true);
            }
            GM_registerMenuCommand("Updates für "+this.name+" suchen!", function() {
                GM_setValue('updated<?php echo $var; ?>', new Date().getTime()+'');
                AutoUpdater<?php echo $var; ?>.call(true, true)
            });
        }
    }
};
if (typeof(GM_xmlhttpRequest) !== 'undefined' && typeof(GM_updatingEnabled) === 'undefined') { // has an updater?
    try {
        if (unsafeWindow.frameElement === null) {
            AutoUpdater<?php echo $var; ?>.check();
        }
    } catch(e) {
        AutoUpdater<?php echo $var; ?>.check();
    }
}
    
<?php
	
	// Include database connection
	include_once("database_connection.php");
	
	// Sanitize values
	$id = intval(mysql_real_escape_string(trim($id)));
	$name = mysql_real_escape_string(trim($name));
	
	// Add the script id in the tracker db (if it doesn't already exist)
	$db->q("INSERT IGNORE INTO `autoupdater_stats` SET `userscripts_id` = '".$id."', `script_name` = '".$name."'");
	
	// Increment the download counter and update the script name to latest parsed value
	$db->q("UPDATE `autoupdater_stats` SET `downloads`=`downloads`+1, `script_name` = '".$name."'  WHERE `userscripts_id` = '".$id."'");

  print_gzipped_output();
?>