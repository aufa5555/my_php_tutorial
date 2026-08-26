<?php
  // functions

  function sayHello($name='jackson', $time = 'morning'){
    echo "good $time $name";
 }  

  // sayHello('mingi');
  sayHello('mingi', 'afternoon');

   function formatProducts($product){
   // echo "{$product['name']} costs {$product['price']}to buy <br>";
   return "{$product['name']} costs {$product['price']}to buy <br>";
   }

   //$formatted =formatProducts(['name'=>'gold star','price'=>28]);
   //echo $formatted;

?>
<!DOCTYPE html>
<html>
<head>
    <title> PHP Tutorials</title>
</head>
<body>

</body>
</html>