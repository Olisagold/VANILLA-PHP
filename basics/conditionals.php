<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif
        }
    </style>
</head>
<body>
    <?php 
        $name = "DARK MATTERS";
        $read = true;

        if($read){

          $message = "<h1> YOU HAVE READ $name.</h1>" ;
        } else{
            $message = "<h1> YOU HAVE NOT READ $name.</h1>" ;
        }

         echo $message;
    ?>
    
    
</body>
</html>