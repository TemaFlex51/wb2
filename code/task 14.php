<?php

$a = 10;
$b = 3;
echo "<br>" . ($a%$b);
//////////////////////////////////////////////
if ($a%$b==0)
    echo "<br>Делится<br>";
else echo "<br>Делится с остатком<br>" . ($a%$b);
////////////////////////////////////////////
echo $st = pow(2,10) . "<br>";
////////////////////////////////////////
echo sqrt(245) . "<br>";
/////////////////////////////////////////////
$arr = array(4,2,5,19,13,0,10);
$SUM = 0;
foreach($arr as $item)
    $SUM += $item**2;
echo sqrt($SUM) . "<br>";
/////////////////////////////////////////
echo round(sqrt(379),0) . " ";
echo round(sqrt(379),1) . " ";
echo round(sqrt(379),2) . "<br>";
////////////////////////////////////////////
$arr2 = array(
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587)));
///////////////////////////////////////////
$arr3=array(4,-2,5,10,-130,0,10);
$minN=$arr3[0];$maxN=$arr3[0];
if ($minN > $num)
    $minN = $num;
if ($maxN < $num)
    $maxN = $num;
echo"<br>maximum - $maxN , minimum - $minN";
////////////////////////////////////////////////////
echo "<br>" . rand(1,100) . "<br>";
$arr4 = array();
for($i = 0;$i<10;$i++) {
    array_push($arr4, rand(1, 100));
}
//////////////////////////////////////////////////
for($i = 0; $i < 7;$i++)
{
    $a1=rand(-100,100);
    $b1=rand(-100,100);
    $a2=rand(-100,100);
    $b2=rand(-100,100);
    $a3=rand(-100,100);
    $b3=rand(-100,100);
    echo "<br>a1-b1=$a1-$b1=|" . ($a1-$b1) . "|=" . abs($a1-$b1). "<br>";
    echo "<br>a2-b2=$a2-$b2=|" . ($a2-$b2) . "|=" . abs($a2-$b2). "<br>";
    echo "<br>a3-b3=$a3-$b3=|" . ($a3-$b3) . "|=" . abs($a3-$b3). "<br>";
}
//////////////////////////////////////////////////
$choose = 135;
echo "<br>Number is  - $choose<br>";
$Divisors = array();
for($i = 1;$i <= $choose;$i++)
{
    if($choose % $i == 0){
        array_push($Divisors, $i);
        echo $i . " ";
    }
}
/////////////////////////////////////////////////
$arrayTen = array( 1,2,3,4,5,6,7,8,9,10 );
$counter = 0;
$SuM = 0;
while ($SuM < 10){
    $SuM += $arrayTen[$cntr];
    $counter ++;
}
///////////////////////////////////////////////////