<?php //Change 'examle' URL mistake to 'example'
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($actual_link, '/examle') !== false) {
	
	$actual_link = str_replace('examle','example', $actual_link);
	
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: $actual_link"); 
	exit();

}
?>
