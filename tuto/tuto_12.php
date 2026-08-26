<?php
//conditional statements
$price = 20;

//if ($price < 10){
 //   echo 'the condition is met';  //ni akan muncui kalau 21 dan lebih
//}elseif($price < 30){
 //   echo 'elseif condition met';
//}else{
 //   echo 'the condition is not met';  //ni akan muncui kalau <20 sbb prce dia 20
//}

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green sheel', 'price' => 10],
    ['name' => 'red sheel', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

foreach($products as $product){

if($product['name'] == 'lightning bolt'){ //kalau product name sama ngan lightning bolt dia akan print out price dia
break; //break ni maksud dia stop,kalau break ni dia akan stop print out product name lepas tu 
}

if($product['price'] > 15){
    continue;
}
    echo $product['name']  . '<br />';
}



?>
<!DOCTYPE html>
<html>
<head>
    <title> PHP Tutorials</title>
</head>
<body>

<div>
    <ul>
        
    </ul>
</div>
</body>
</html>