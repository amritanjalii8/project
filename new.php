<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    
</body>
</html>

<?php

$ab = 1;
$abc = "my name is ram";
$flo = 3.333;
$ar = [1,2,3,4,5];
$arr = array(1,2,3,4,5);

$name= "Amritanjali Thapa";
$address= "Budhanilkantha";




echo "the number is $ab <br>";
echo "the array number is".$ar[1]. "<br>";

var_dump($flo);

echo "<br>";

$a=5;
$b=5;
$c=5;
if($a=$b=$c)
{
    echo "all numbers are equal";
}

else if($a>=$b && $a>=$c)
{
    echo "a is greatest among all";
}

else if($b>=$a && $b>=$c)
{
    echo "b is greatest among all";
}

else
{
    echo " c is greatest among all";
}

echo "<br>";

$days="7";

switch($days)
{
    case 1:
        echo "Sunday";
        break;

    case 2:
        echo "Monday";
        break;

    case 3:
        echo "Tuesday";
        break;
    
    case 4:
        echo "Wednesday";
        break;

    case 5:
        echo "Thursday";
        break;

    case 6:
        echo "Friday";
        break;

    case 7:
        echo "Saturday";
        break;

    default:
         echo "Error";
}


echo "<br>";

for ($ab=1;$ab<=10;$ab++)
{
    echo "$ab";
}


echo "<br>";

$bb = 5;
while ($bb <20)
{
    echo "$bb";
    $bb++;
}

echo "<br>";

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

echo "<br>";

$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);


$arr = [["ram",23], ["hari",22],["sita",33]];

foreach($arr as $x){
    echo "name= $x[0] and age=$x[1]<br>";
}

$bc=5;
$cd=6;
$operand= "+";

if ($operand == "+")
{
    $d= $bc+$cd;
    
}

else if ($operand == "-")
{
    $d= $bc-$cd;
   
}

else if ($operand == "*")
{
    $d= $bc*$cd;
    
}

else if ($operand == "/")
{
    $d= $bc/$cd;
   
}

else
{
    echo "error";
}
echo $d;


?>