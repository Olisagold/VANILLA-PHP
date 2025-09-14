<?php
//passing values to uri
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//declaring my routes
$routes = [
    '/vanillaphp/index' => "controllers/index.php",
    '/vanillaphp/index.php/about'=> "controllers/about.php",
    '/vanillaphp/index.php/contact'=> "controllers/contact.php"
];
//a function to handle routing
function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
    require $routes[$uri];
    } else{
    abort();
    }
}
//function to abort with the given status code
function abort($code = 404){
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);
?>