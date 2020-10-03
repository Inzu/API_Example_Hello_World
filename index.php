<?php

$page_title = "Home";

// Load Includes

include("lib/functions.php"); 
include("lib/config.php"); 

// Get API Data

$inzu = INZU_GET("cms/home", array("tag"=>"hello"));

// HTML

$content = $inzu->data[0]->entry;

include("lib/template.php"); 

?>