<?php

$Mas = array(1, 50, 67, 9, 45);
function ArMean (array $arr , $num = 0, $Sum = 0){
    if($num < count($arr) - 1)
        ArMean($arr, $num+1, $Sum+$arr[$num]);
    if($num == count($arr) - 1)
        echo ($Sum+$arr[$num])/$num;
}
//ArMean (Mas);

function fromONEtoHUNDRED($num = 1, $sum = 1){
    if($num < 100)
        fromONEtoHUNDRED(num+1, $sum+$num);
    if($num == 100)
        echo $sum + $num;
}
fromONEtoHUNDRED();

function MASsqrt (array &$mass, $num = 0){
    if($num < count($mass)){
        $mass[$num] = sqrt($mass[$num]);
        echo $mass[num] ." ";
        MASsqrt($mass, num+1);
    }
}
$alphabet = array ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$Newalpabet = array();
function NewAlphabetCreate(array &$Newalp, array $alp, $num){
    if($num<26){
        $Newalp["'alp[$num]'"] = $num + 1;
        NewAlphabetCreate($Newalp, $alp, num+1);
    }
}

$strOnetoNine = '1234567890';
$resultOnetoNine = array_sum(str_split($strOnetoNine, 2));
//echo $resultOnetoNine;