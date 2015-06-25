<?php

function curl_get_contents ($Url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $Url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}

if(isset($_GET['url'])){
	$url = urldecode($_GET['url']);
		echo file_get_contents($url);
	
	if(ini_get('allow_url_fopen'))
		echo file_get_contents($url);
	elseif(function_exists('curl_init'))
		echo curl_get_contents ($url);
	else
		echo "<h2>Error:</h2>allow_url_fopen and curl are not enabled on the server.<br />Enable at least one of these for the proxy to work.";
}
else {
	echo "<h2>Error:</h2>Add an GET parameter named 'url' with the encoded url as value";
}

?>
