<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
      </script>
  </head>
  <title>PHP Author Associative Array Test</title>

 <body>
     <div class="container">
         <h1>PHP Author Associative Array Test</h1>

<?php
         
         
function groupByOwners($input) {
    
    $authors = array();
    $files = array();
    
    foreach ($input as $file => $author) {
        
        echo "(Testing) $author made $file <br>";
        if(array_key_exists ($author , $authors))
        {
            array_push ($authors[$author],$file);            
        }
        else
        {
            $authors[$author] = array($file);
        }
                
    }
    foreach($authors as $key => $value) {
        echo ("<h4>$key is the author of ".implode(", ",$value)."</h4>");
    }
}

$input = array("Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt"=> "Randy"); 

groupByOwners($input);
 ?>

     </div>

 </body>
</html>