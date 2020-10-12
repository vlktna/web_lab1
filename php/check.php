<?php
@session_start();

function check($startTime, $currentTime)
{
    $X = $_POST["X"];
    $Y = $_POST["Y"];
    $R = $_POST["R"];

    if (is_numeric($X) && is_numeric($Y) && is_numeric($R)) {

        if (($Y < 5) && ($Y > -5) && ($X <= 4) && ($X >= -4) && ($R >= 1) && ($R <= 5)) {
            if ($X >= 0 && $Y >= 0 && $Y <= $R / 2 - $X) {
                $scriptTime = microtime(true) - $startTime;
                $result = "TRUE";
            } elseif ($X <= 0 && $Y >= 0 && ($R / 2 >= $Y) && (-$R <= $X)) {
                $scriptTime = microtime(true) - $startTime;
                $result = "TRUE";
            } elseif ($X >= 0 && $Y <= 0 && ($X * $X + $Y * $Y <= ($R / 2) * ($R / 2))) {
                $scriptTime = microtime(true) - $startTime;
                $result = "TRUE";
            } else {
                $scriptTime = microtime(true) - $startTime;
                $result = "FALSE";
            }

        } else {
            $result = "Полученные значения не входят в ОДЗ";
            $scriptTime = microtime(true) - $startTime;
        }
        array_push($_SESSION['result'], "<tr> <td>$X</td> <td>$Y</td> <td>$R</td> <td>$result</td> 
<td>$currentTime</td> <td>$scriptTime</td>");

    }
}

