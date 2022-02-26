<?php

$XxX = "";
$arrXxX = array();
for($i=1;$i<5;$i++)
{
    $XxX = $XxX . "x";
    array_push($arrXxX,$XxX);
    echo $arr[$i] . "<br>";
}
function arrayFill($Symbol,$var)
{
    $temp = array();
    for ($i = 0;$i < $var; $i++)
    {
        array_push($retArr,$Symbol);
    }
    return $temp;
}

$hardArray = array(
    array(1,2,3),
    array(4,5),
    array(6)
);
function SumCounter(array $array){
    $Sum = array_sum($array);
    foreach($array as $child) {
        if (is_array($child))
            $Sum += SumCounter($child);
    }
    return $Sum;
}
$Array3X3 = array();
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        $Array3X3[$i][$j] = $i +3*$j +1;
    }
}
$array2539 = array (2, 5, 3, 9);
$result = $array2539[0]*$array2539[1]+$array2539[2]*$array2539[3];
echo "<br>" . $result . "<br>";
$user = array(
    "surname" => "Alekseev",
    "name" => "Artem",
    "patronymic" => "Maksimovich"
);
foreach ($user as $str)
    echo $str . " ";
$date = array(
    "day" => 11,
    "month" => 2,
    "year" => 2022
);
echo $date["'year'"] . "-";
echo $date["'month'"] . "-";
echo $date["'day'"];
$TaskArray = array('a','b','c','d','e');
echo"<br>" . count($TaskArray);
echo"<br>" . $TaskArray[count($TaskArray)-1] . " " . $TaskArray[count($TaskArray)-2];
