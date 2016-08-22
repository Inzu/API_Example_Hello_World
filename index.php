<?php

include("lib/config.php"); 

$page_title = "Home";

///Call to INZU for 'Home Page' entry
$json = file_get_contents("{$api_base}/cms/home?api_key={$api_key}&tag=hello");
$inzu = json_decode($json); 

$content = $inzu->data[0]->entry;

include("lib/template.php"); 

?>
