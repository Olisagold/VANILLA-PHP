<?php

require "functions.php";

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/vanillaphp/index.php'){
    require "controllers/index.php";
} else if($uri === '/vanillaphp/index.php/about') {
    require "controllers/about.php";
 } else if($uri === "/vanillaphp/index.php/contact") {
    require "controllers/contact.php";
 }

?>
