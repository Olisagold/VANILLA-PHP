<?php

require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/vanillaphp/index' => "controllers/index.php",
    '/vanillaphp/index.php/about'=> "controllers/about.php",
    '/vanillaphp/index.php/contact'=> "controllers/contact.php"
];

if(array_key_exists($uri, $routes)){
    require $routes[$uri];
} else{
    http_response_code(404);

    require "views/404.php";

    die();
}

?>
