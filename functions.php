<?php

//DUMP AND DIE FUNCTION
function dd($value){
    echo "<pre>";
 var_dump($value);
echo "</pre>";
die();
}
// THIS BLOCK OF CODE
    // if ($_SERVER["REQUEST_URI"]==="/vanillaphp/index.php"){ 
    // echo'bg-gray-900 text-white';
    // } else{
    //     echo 'text-gray-300';
    // }
//AND THIS ARE THE SAME 
    // echo $_SERVER["REQUEST_URI"]==="/vanillaphp/index.php" ? 'bg-gray-900 text-white' : 'text-gray-300';

//FUNCTION FOR DYNAMIC ACTIVE NAVIGATION STYLING
    function isUrl($value){
       return $_SERVER["REQUEST_URI"] === $value;
    }

?>