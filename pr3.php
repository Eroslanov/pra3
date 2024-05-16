<?php
echo "введите значение a1: \n";
$a1 = readline();
echo "введите значение b1: \n";
$b1 = readline();
echo "введите значение a2: \n";
$a2 = readline();
echo "введите значение b2: \n";
$b2 = readline();
if ($a1 > $b1) {
$a3 = $a1;
$a1 = $b1;
$b1 = $a3;
}if ($a2 > $b2) {
$a3 = $a2;
$a2 = $b2;
$b2 = $a3;
}if ($b1 < $a2 || $b2 < $a1) {
    echo "пусто даже не ищи";
} else {
if ($a1 > $a2) {
    $a2 = $a1;
}if ($b1 > $b2) {
    $b1 = $b2;
}if ($a2 == $b1) {
    echo "точка 1 пересечения: $a2";
}else{
    echo "прямяя пересечения: $a2 $b1";
}}
