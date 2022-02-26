<?php

function Function1($var1, $var2){
    $sum = $var1 + $var2;
    if ($sum>10)
        return true;
    else return false;
}
function Funktion2($var1, $var2){
    if ($var1 == $var2)
        return true;
    else return false;
}
function Funktion3 ($var){
    if($var < 10 || $var > 99)
        echo "Out of range";
    else{
        $Sum = $var %10 + (($var - $var %10)/10);
        if($Sum<10)
            echo "Sum less than 10";
        else
            echo "Sum more than 10";
    }
}

$arrayTask18 = array(1, 2, 3, 5);
if(count($arrayTask18)==3)
    echo array_sum($arrayTask18) ."<br>";
else
    echo "<br>";
