<?php

require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


// if($uri === '/vanillaphp/index'){
//     require "controllers/index.php";
// } else if($uri === '/vanillaphp/index.php/about') {
//     require "controllers/about.php";
//  } else if($uri === "/vanillaphp/index.php/contact") {
//     require "controllers/contact.php";
//  }

$routes = [
    '/vanillaphp/index' => "controllers/index.php",
    '/vanillaphp/index.php/about'=> "controllers/about.php",
    '/vanillaphp/index.php/contact'=> "controllers/contact.php"
];

if(array_key_exists($uri, $routes)){
    require $routes[$uri];
}
?>
