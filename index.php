<?php

require "functions.php";
// require "router.php";
require "Database.php";


//object
$db = new Database();

$posts = $db->query("SELECT * FROM `posts`")->fetchAll(PDO::FETCH_ASSOC);;

dd($posts);

//displayed the data in the database as an unordered list
// foreach($posts as $post){
//     echo "<li>".$post['title']."</li>";
// }
?>
