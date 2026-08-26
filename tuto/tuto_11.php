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

   // if($product['price'] < 15 && $product['price'] > 2){ //just akan amik product harga kurang 15 and lebih 2
  //  echo $product['name']  . '<br />';
  //}

 // if($product['price'] > 20 ||  $product['price'] <10 ){ // || ni maksud dia or,prod lebih 20 or kurang 10
 //  echo $product['name']  . '<br />';
 //  }
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
        <?php foreach($products as $product) { ?>
            <?php if($product['price'] > 15) { ?>
                <li><?php echo $product['name']; ?></li> //akan jadi point product harga lebih 15
            <?php } ?>
        <?php } ?>
    </ul>
</div>
</body>
</html>