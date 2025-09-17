<?php

require "functions.php";
// require "router.php";
require "Database.php";

// connect to mysql database from the config file
$config = require('config.php');      

//object
$db = new Database($config['database']);

$posts = $db->query("SELECT * FROM `posts`")->fetchAll(PDO::FETCH_ASSOC);;

dd($posts);

//displayed the data in the database as an unordered list
// foreach($posts as $post){
//     echo "<li>".$post['title']."</li>";
// }
?>
