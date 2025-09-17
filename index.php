<?php

require "functions.php";
// require "router.php";
require "Database.php";

// connect to mysql database from the config file
$config = require('config.php');      

//object
$db = new Database($config['database']);

$id = $_GET['id'];

$query = "SELECT * FROM `posts` where id = ?";

// dd($query);

$posts = $db->query($query, [$id])->fetch(PDO::FETCH_ASSOC);;

dd($posts);

//displayed the data in the database as an unordered list
// foreach($posts as $post){
//     echo "<li>".$post['title']."</li>";
// }
?>
