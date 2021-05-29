<html>
    <head>
    	<title>amulectl</title>
    </head>
    <body>
    <!-- ---------------------------------------------------------------------- -->
<?php 
/* Add redirection so we can get stderr. */
$handle = popen('/bin/ps --no-headers -f -C amuled 2>&1', 'r');
#echo "'$handle'; " . gettype($handle) . "\n";
$read = fread($handle, 2096);
# echo $read;
pclose($handle);
?>
	<textarea rows="10" cols="120"><?=$read?></textarea>
    <!-- ---------------------------------------------------------------------- -->
    </body>
</html>
