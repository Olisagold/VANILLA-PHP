<?php

require "functions.php";
// require "router.php";

//connect to the database and execute a query.

class Database{
    public $connection;

    public function __construct(){
         // connect to mysql database
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

        $this->connection = new PDO($dsn);
    }

    public function query($query){
        //query to send to mysql and execution
        $statement = $this->connection->prepare($query);
        $statement->execute();

        //fetched all results
        return $statement;
    }
}
//object
$db = new Database();

$posts = $db->query("SELECT * FROM `posts`")->fetchAll(PDO::FETCH_ASSOC);;

dd($posts);

//displayed the data in the database as an unordered list
// foreach($posts as $post){
//     echo "<li>".$post['title']."</li>";
// }
?>
