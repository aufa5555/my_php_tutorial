<?php

// indexed arrays

$peopleOne = ['shaun','crystal','ryu'];//start dari shaun dikira 0
//echo $peopleOne[1];

$peopleTwo = array('ken','chun');
//echo $peopleTwo[1];

$ages = [20,30,40,50];
//print_r($ages);

$ages[1] = 25;
//print_r($ages);

$ages[] = 60;
//print_r($ages);

array_push($ages, 70);
//print_r($ages); //kena tulis print_r kalau dak tak keluaq apa apaa

//echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree);

// associate arrays( key & value pairs)

$ninjasOne = ['shaun'=>'black','mario'=>'orange', 'luigi'=>'brown'];
//echo $ninjasOne['mario'];
//print_r($ninjasOne);

$ninjasTwo = array('bowser'=>'green','peach'=>'yellow','toad'=>'pink');
//print_r($ninjasTwo);

$ninjasTwo['toad']= 'pink';
//print_r($ninjasTwo);

//echo count($ninjasOne);// jadi 3 sbb ada 3 element
$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);



?>
<!DOCTYPE html>
<html>
<head>
    <title> PHP Tutorials</title>
</head>
<body>

</body>
</html>