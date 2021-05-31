<html>
    <head>
    	<title>amulectl</title>
    </head>
    <body>
    <!-- ---------------------------------------------------------------------- -->

<?php 
$read = "amuled process not found!";
/* Add redirection so we can get stderr. */
$handle = popen('/bin/ps --no-headers -f -C amuled 2>&1', 'r');

#echo "Before: " . $read . "<br/>";
if ( $handle )
   {
   $data = fread($handle, 2096);
   if ( $data ) $read = $data;
   }
#echo "Afer: " . $read;

pclose($handle);
?>
	<textarea rows="10" cols="120"><?=$read?></textarea>
    <!-- ---------------------------------------------------------------------- -->
    </body>
</html>
