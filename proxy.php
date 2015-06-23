<?php

if(isset($_GET['url'])){
    $url = urldecode($_GET['url']);
    echo file_get_contents($url);
}
else {
    echo "<h2>Error:</h2>Add an GET parameter named 'url' with the encoded url as value";
}

?>