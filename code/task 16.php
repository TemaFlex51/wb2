<?php

function increaseEnthusiasm($s = "null")
{
    return $s . "!!!!!!!!!";
}
echo "<br>" . increaseEnthusiasm("??????");
function repeatThreeTimes($s = "null")
{
    return $s . $s . $s;
}
echo "<br>" . repeatThreeTimes("Hi. How Are you?");
echo "<br>" . increaseEnthusiasm(repeatThreeTimes("Hi. I am fine, thnks"));
function cut($s = "null", $charsFromStart = 10)
{
    return substr($s,0,$charsFromStart);
}
echo "<br>" . cut(increaseEnthusiasm(repeatThreeTimes("")), 5);
/////////////////////////////////////////////
function ArrayArray($arr,$end,$now = 0)
{
    echo $arr[$now] . " ";
    if ($now < $end){
        ArrayTask($arr, $end, ++$now);
    }else
        return;
}
function NumbersSumma($num,$sum=0)
{
    while ($num > 0)
    {
        $sum+=$num%10;
        $num/=10;
    }
    echo "$sum ";
    if ($sum>9)
        NumbersSumma($sum);
    echo $sum . "<br>";
    else return;
}
