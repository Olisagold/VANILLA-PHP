<?php

require "functions.php";
// require "router.php";


// connect to mysql database
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

//query to send to mysql and execution
$statement = $pdo->prepare("SELECT * FROM `posts`");
$statement->execute();

//fetched all results
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// dd($posts);

//displayed the data in the database as an unordered list
foreach($posts as $post){
    echo "<li>".$post['title']."</li>";
}
?>
