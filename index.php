<?php

require "functions.php";
// require "router.php";

//connect to the database and execute a query.

class Database{

    public function query(){
        // connect to mysql database
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
        $pdo = new PDO($dsn);

        //query to send to mysql and execution
        $statement = $pdo->prepare("SELECT * FROM `posts`");
        $statement->execute();

        //fetched all results
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
//object
$db = new Database();

$posts = $db->query();

//displayed the data in the database as an unordered list
foreach($posts as $post){
    echo "<li>".$post['title']."</li>";
}
?>
