<?php

   //variable scope

   //local vars

   function myFunc(){
      $price = '25';
      echo $price;
   }

//myFunc();
// echo $price; // this will not work because the variable is local to the function


function myFuncTwo($age){
  echo $age;
}

//myFuncTwo(28);
// echo $age; // this will not work because the variable is local to the function

   //global variables

$name = 'mario';

//function sayHello(){
 //  global  $name;
//   $name='mingi';
 //   echo"hello $name";
//}

// sayHello();
 //echo $name;
 function sayBye(&$name){  //kalau tukaq dalam dia tukaq luaq gak
    $name ='wario';
    echo"bye $name";
 }

sayBye($name);
echo $name;

?>
<!DOCTYPE html>
<html>
<head>
    <title> PHP Tutorials</title>
</head>
<body>

</body>
</html>