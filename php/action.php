<?php

print_r($_POST);

function check($valueX, $valueY, $valueR){
    $start = microtime(true);
    if($valueX > 0 && $valueY > 0 && $valueY < $valueR/2 - $valueX){
        echo "true";
        $time = microtime(true) - $start;
        echo $time;
    }elseif ($valueX < 0 && $valueY > 0 && $valueR/2 > $valueY && -$valueR < $valueX){
        echo "true";
        $time = microtime(true) - $start;
        echo $time;

    }elseif ($valueX > 0 && $valueY < 0 && $valueX^2 + $valueY < ($valueR^2)/4){
        echo "false";
        $time = microtime(true) - $start;
        echo $time;
    }else{
        echo "false";
        $time = microtime(true) - $start;
        echo $time;
    }
}

$valueX = (int) $_POST['valueX'];
$valueY = (float) $_POST['valueY'];
$valueR = (int) $_POST['valueR'];

check($valueX, $valueY, $valueR);



?>
