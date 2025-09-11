<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user view</title>
</head>
<body>
    <ul>
      <?php
         foreach($filteredBooks as $book);
      ?> 
      <li>
      <!-- <?php
        echo $book['purchaseUrl'];
      ?> -->
      <?php
        echo $book['name'] ."(".$book['releaseYear'].")"." - By ". $book['author'];
      ?>
      </li>
          
    </ul>
</body>
</html>