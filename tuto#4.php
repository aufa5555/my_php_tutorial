<?php

define('NAME','Yoshi'); //define ni untuk declare constant variable,constant variable ni tak boleh tukar value dia//

//$name = "yoshi";
$age = 30;

//$name = "mario";
//echo $name; /*echo ni untuk print out value dalam variable*/

?>

<!DOCTYPE html>
<html>
<head>
    <title> PHP Tutorials</title>
</head>
<body>
    <h1>User Profile Pages</h1><!-- dia jadi bold ngan besaq sbb h1*--!>

    <div><?php echo NAME; ?></div> <!-- ni untuk print out value dalam variable-->
    <div><?php echo $age; ?></div> <!-- ni untuk print out value dalam variable-->

</body>
</html>