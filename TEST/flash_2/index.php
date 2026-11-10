<?php
if ( array_key_exists('HTTPS', $_SERVER) && (strtolower($_SERVER['HTTPS']) == 'on' || strtolower($_SERVER['HTTPS']) == 'yes' || $_SERVER['HTTPS'] == 1) ) $http = 'https://'; else $http = 'http://';
if ($_SERVER['SERVER_PORT'] <> 80) $port = ":" . $_SERVER['SERVER_PORT']; else $port = '';
$BASE_URL = $http . $_SERVER['HTTP_HOST'] . $port;
?>
<div align="center">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="<?php echo $http; ?>download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="468" height="60">
<param name="movie" value="<?php echo $BASE_URL; ?>/3rdparty/rvsitebuilder/project/a331fb4b887f127e204f08ab188a7b4f/_temp/fb02blue.swf?pid=c88b69d94558b3c0a918b7e8096b5b23">
<param name="quality" value="high">
<embed src="<?php echo $BASE_URL; ?>/3rdparty/rvsitebuilder/project/a331fb4b887f127e204f08ab188a7b4f/_temp/fb02blue.swf?pid=c88b69d94558b3c0a918b7e8096b5b23" quality="high" pluginspage="<?php echo $http; ?>www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="468" height="60">
</embed>
</object>
</div>
