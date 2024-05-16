<?php
echo "введите цвета: (без ошибок(желательно)) \n";
echo "красный \n";
echo "синий \n";
echo "желтый \n";
$restart = true;
while ($restart) {
    echo "Введите два цвета \n";
    $col1 = readline();
    $col2 = readline(); 
    $restart = false;
if($col1 == $col2){
    echo 'Будет '. $color1 ;
}elseif($col1 == 'красный' && $col2 == 'синий' || $col1 == 'синий' && $col2 == 'красный'){
    echo 'Будет фиолетовый';
}elseif($col1 == 'красный' && $col2 == 'желтый' || $col1 == 'желтый' && $col2 == 'красный'){
    echo 'Будет оранжевый';
}elseif($col1 == 'синий' && $col2 == 'желтый' || $col1 == 'желтый' && $col2 == 'синий'){
    echo 'Будет зеленый';
}else{
    echo "Введите заного \n";
    $restart = true;
}
}