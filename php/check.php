<?php
@session_start();

$startTime = microtime(true);
$currentTime = date("H:i:s", strtotime('+3 hour'));

$X = $_GET["valueX"];
$Y = $_GET["valueY"];
$R = $_GET["valueR"];

echo "<!DOCTYPE HTML> 
<html> 
<head> 
<meta charset='UTF-8'> 
<title>table</title> 
<link rel='stylesheet' href='../css/style.css'>
</head> 
<body>
<table>
    <tr>
        <th>X</th>
        <th>Y</th>
        <th>R</th>
        <th>RESULT</th>
        <th>TIME</th>
        <th>SCRIPT TIME</th>
    </tr>";


if ($X >= 0 && $Y >= 0 && $Y <= $R / 2 - $X) {
    $scriptTime = microtime(true) - $startTime;
    $result = "TRUE";

} elseif ($X <= 0 && $Y >= 0 && ($R / 2 >= $Y) && (-$R <= $X)) {
    $scriptTime = microtime(true) - $startTime;
    $result = "TRUE";
} elseif ($X >= 0 && $Y <= 0 && $X ^ 2 + $Y < ($R ^ 2) / 4) {
    $scriptTime = microtime(true) - $startTime;
    $result = "TRUE";
} else {
    $scriptTime = microtime(true) - $startTime;
    $result = "FALSE";
}


array_push($_SESSION['result'], "<tr> <td>$X</td> <td>$Y</td> <td>$R</td> <td>$result</td> 
<td>$currentTime</td> <td>$scriptTime</td>");

foreach ($_SESSION['result'] as $line) {
    echo $line;
}
echo "</table> </body> </html>";




