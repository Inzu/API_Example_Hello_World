<?php

include("lib/functions.php"); 
include("lib/config.php"); 

$page_title = "Home";

///Call to INZU for 'Home Page' entry
$inzu = INZU_GET("cms/home", array("tag"=>"hello");

$content = $inzu->data[0]->entry;

include("lib/template.php"); 

?>
