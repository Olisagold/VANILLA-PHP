<?php
//connect to the database and execute a query.

class Database{
    public $connection;

    public function __construct($config, $username='root', $password=''){
         
        $dsn = "mysql:".http_build_query($config, '', ';');
         //block of code above is the same as the one below
        //  $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        //also the same as the one below
        // $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = []){
        //query to send to mysql and execution
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        //fetched all results
        return $statement;
    }
}
?>


<!-- CREATE TABLE `users`(
	`id` int(6) NOT NULL AUTO_INCREMENT,
    `username` varchar(100) NOT NULL, 
    `admin` tinyint(2) NOT NULL DEFAULT '0',
    PRIMARY KEY(`id`)
) -->