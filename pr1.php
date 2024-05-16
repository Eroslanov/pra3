<?php
echo "Ведите число стоящее перед знаком ";
$s1 = readline();
echo "Ведите число стоящее после знаком ";
$s2 = readline();

$check = true;
while ($check) {
    echo "Введите (+, -, *, /)";
    $deystv = readline();
    $check = false;
    switch ($deystv) {
        case '+':
            echo $s1 + $s2;
            break;
        case '-':
            echo $s1 - $s2;
            break;
        case '*':
            echo $s1 * $s2;
            break;
        case '/':
            if ($s2 === 0) {
                echo "На ноль никто не делит \n";
                $check = true;
            } else {
                echo $s1 / $s2;
                break;
            }

        default:
            echo "Неверная операция \n";
            $check = true;
            break;
    }
}