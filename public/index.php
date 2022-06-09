<?php

echo '1<br>'; //вывод на экран

$a = 5; // числовой, integer
$b = "2"; // строковой string
$c = []; // массив array
$d = 2; // числовой, double

//0 - 9, 8 - 1
$array = [9, '8', 7, [99]];

$array2 = [
    'key1' => 'value',
    'number' => 99,
    'name' => 'vlad',
];

echo $array[0].'<br>';
echo $array2['key1'].'<br>';
//==========================щывщаы
$res = $a + $d;
$res1 = $a - $d;
$res2 = $a * $d;
$res3 = $a / $d;
$res4 = $a % $d;


$string1 = 'VLad';
$string2 = 'Verokha';

$string3 = $string1.' '.$string2.' Andrey '.' Osipenko <br>';
echo $string3;
//============

$int = 10;
$string4 = '10';

echo $int.$string4.'<br>';
echo $int + $string4.'<br>';
// =============

$sum = sum(3, 3);
echo $sum.'<br>';

function sum($a, $b)
{
    return $a+$b;
}
// ===============

$age1 = 27;
$age2 = 40;
$age3 = 25;

/*
if ($age1 > 30) {
    echo 'ok';
} elseif ($age2 > 50) {
  echo 'ok 2';
} elseif ($age3 != 26) {
    echo $age3;
} else {
    echo 'no';
}
*/
// && - логическая И
if ($age1 > 27 && $age3 == 25) {

}
// && - логическая ИЛИ
if ($age1 > 26 || $age3 == 25) {

}

$int1 = 10;
$int2 = '10';

if ($int1 == $int2) { //сравнение по значению
    echo 'equal<br>';
}

if ($int1 === $int2) { //сравнение по типу
    echo 'equal';
} else {
    echo 'not equ';
}
echo '<br>'.'<br>';
//==========================задача4

function makesqr($num) {
    echo sqrt($num);
    echo '<br>';
}

echo makesqr(49);
echo makesqr(64);
echo makesqr(81);



echo '<br>'.'<br>';

//==========================задача5
 function proverka($age = " ") {
     if ($age < 18) {
         echo 'Вам не доступен данный контент';
     }else
     {
         echo ' ';
     }
     echo '<br>';
 }
 echo proverka(14);
echo proverka();

echo '<br>'.'<br>';







