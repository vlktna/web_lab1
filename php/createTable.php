<?php
$startTime = microtime(true);
$currentTime = date("H:i:s", strtotime('+3 hour'));
?>

<!DOCTYPE HTML>
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
    </tr>

    <?php
    include "check.php";
    check($startTime, $currentTime);

    foreach ($_SESSION['result'] as $line) {
        echo $line;
    }
    ?>

</table>
</body>
</html>
