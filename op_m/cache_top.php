<?php

echo "<!-- Cache OBSTART 001 -->\n";
    
$url = "frontpage";
// $url = $_SERVER["SCRIPT_NAME"];
$file = "frontpage";
$cachefile = '/home/laopinion/www.laopinion.com.co/www/tmp/cached001-'.$file.'.html';
$cachetime = 600;

// Serve from the cache if it is younger than $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    echo "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n";
    include($cachefile);
    exit;
}
ob_start(); // Start the output buffer 
?>