
<?php 
    //INDEXED ARRAY
    //     $books = [
    //         "Do Androids Dream Of Electric Sheeps",
    //        "The Langoliers",
    //         "Hail Mary"
    //     ];
        
    // foreach ($books as $book){
    //     echo "<li> $book </li>";
    // }

    //ASSOCIATIVE ARRAY
    // $students = [
    //     'name'=>"Olisaemeka",
    //     'level'=>300 . "L",
    //     'course'=>"Computer Science",
    // ];
    
    // foreach($students as $key => $value){
    //     echo "<br>".$key.":".$value."</br>";
    // }

    // //MULTIDIMENSIONAL ARRAY
    // $books = [
    //     'book1' => [
    //        'name' => "Do Andriods Dreams Of Electric Sheeps",
    //        'author' => "Philip k. Dick",
    //        'purchaseUrl' => "http:/philipkd.com",
    //     ],
    //     'book2' => [
    //        'name' => "The Langoliers",
    //        'author' => "Andy Weir",
    //        'purchaseUrl' => "http:/andyweir",
    //     ],
    //     'book3' =>[
    //         'name' => "Hail Mary",
    //         'author' => " Andy Weir",
    //         'purchaseUrl' =>"http:/pdk.com",
    //     ],
    // ];
    
    // foreach($books as $book_key => $book_value){
    //     echo "<b>".$book_key."</b>";
    //     foreach($book_value as $key => $value){
    //         echo "<li>".$key . ":". $value."</li>";
    //     }
    // }

    //ASSIGNMENT 

    $books = [
         [
           'name' => "Do Andriods Dreams Of Electric Sheeps",
           'author' => "Philip k. Dick",
           'releaseYear' => 2021,
           'purchaseUrl' => "http:/philipkd.com",
        ],
         [
           'name' => "The Langoliers",
           'author' => "Andy Weir",
           'releaseYear' => 2023,
           'purchaseUrl' => "http:/andyweir",
        ],
        [
            'name' => "Hail Mary",
            'author' => "Andy Weir",
            'releaseYear' => 2016,
            'purchaseUrl' =>"http:/pdk.com",
        ],
      ];

       $filteredBooks = array_filter($books,  function($book){
          return $book['releaseYear'] >= 2000 && $book['releaseYear'] <=2020;
       });
      // foreach(filterByAuthor($books) as $book){
      //       echo "<li>".$book['name']." : ".$book['author']."</li>";
      //   }
        
    

    // foreach($books as $book){
    //     if($book['author']=="Andy Weir"){
    //         echo "<li>".$book['name']." : ".$book['author']."</li>";
    //     }
        
    // }
    
    require "arrays.view.php";
    ?>
    
   
