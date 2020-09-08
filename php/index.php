<!DOCTYPE html>
<?php
session_start();
$_SESSION['result'] = array();
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>lab1</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body onload="drawPlat()">
<div class="header">
    <span>Вариант 2607</span>
    <span class="stud_name">Волокитина Вероника, P3230</span>
</div>

<div class="container">

    <svg height="600" width="600">

        <polygon class="rectangle-graph" fill=#95a3b3
                 points="300,300 300,200 100,200 100,300"></polygon>

        <polygon class="rectangle-graph" fill=#95a3b3
                 points="300,300 300,200 400,300"></polygon>

        <polygon class="rectangle-graph" fill=#95a3b3
                 points="300,300 401,300 300,401"></polygon>

        <path class="circle-graph" d="M 400,300 A 100,100 0 0, 1 300,400"  fill=#95a3b3></path>

        <line class="axis" stroke="black" x1="50" x2="550" y1="300" y2="300"></line>
        <line class="axis" stroke="black" x1="300" x2="300" y1="50" y2="550"></line>

        <line class="arrow" stroke="black" x1="535" x2="550" y1="295" y2="300"></line>
        <line class="arrow" stroke="black" x1="535" x2="550" y1="305" y2="300"></line>

        <line class="arrow" stroke="black" x1="295" x2="300" y1="65" y2="50"></line>
        <line class="arrow" stroke="black" x1="300" x2="305" y1="50" y2="65"></line>

        <line class="point-line" stroke="black" x1="400" x2="400" y1="295" y2="305"></line>
        <line class="point-line" stroke="black" x1="500" x2="500" y1="295" y2="305"></line>
        <line class="point-line" stroke="black" x1="200" x2="200" y1="295" y2="305"></line>
        <line class="point-line" stroke="black" x1="100" x2="100" y1="295" y2="305"></line>

        <line class="point-line" stroke="black" x1="295" x2="305" y1="400" y2="400"></line>
        <line class="point-line" stroke="black" x1="295" x2="305" y1="500" y2="500"></line>
        <line class="point-line" stroke="black" x1="295" x2="305" y1="200" y2="200"></line>
        <line class="point-line" stroke="black" x1="295" x2="305" y1="100" y2="100"></line>

        <text class="point-text" x="310" y="205" font-size="20px">R/2</text>
        <text class="point-text" x="310" y="105" font-size="20px">R</text>
        <text class="point-text" x="310" y="405" font-size="20px">-R/2</text>
        <text class="point-text" x="310" y="505" font-size="20px">-R</text>

        <text class="point-text" x="95" y="290" font-size="20px">-R</text>
        <text class="point-text" x="195" y="290" font-size="20px">-R/2</text>
        <text class="point-text" x="395" y="290" font-size="20px">R/2</text>
        <text class="point-text" x="495" y="290" font-size="20px">R</text>

        <text class="point-text" x="550" y="290" font-size="20px">Y</text>
        <text class="point-text" x="310" y="60" font-size="20px">X</text>

        <circle cx="150" cy="150" fill="red" id="target-dot" r="0"></circle>
    </svg>

    <form class="getValue" id="form" action="check.php" target="result_table">

        <div class="form_block">
            <label for="valX">X = </label>
            <select id="valX" name="valueX">
                <option value="-4">-4</option>
                <option value="-3">-3</option>
                <option value="-2">-2</option>
                <option value="-1">-1</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>

        <div class="form_block">
            <label for="valY">Y = </label>
            <input type="number" id="valY" name="valueY" min="-5" max="5" required/>
        </div>

        <div class="form_block">
            <label for="form_radio_group">R = </label>
            <div id="form_radio_group">

                <div class="form_radio_btn">
                    <input id="radio-1" type="radio" name="valueR" value="1" checked>
                    <label for="radio-1">1</label>
                </div>

                <div class="form_radio_btn">
                    <input id="radio-2" type="radio" name="valueR" value="2" checked>
                    <label for="radio-2">2</label>
                </div>

                <div class="form_radio_btn">
                    <input id="radio-3" type="radio" name="valueR" value="3" checked>
                    <label for="radio-3">3</label>
                </div>

                <div class="form_radio_btn">
                    <input id="radio-4" type="radio" name="valueR" value="4" checked>
                    <label for="radio-4">4</label>
                </div>

                <div class="form_radio_btn">
                    <input id="radio-5" type="radio" name="valueR" value="5" checked>
                    <label for="radio-5">5</label>
                </div>

            </div>
        </div>

        <div class="form_block">
            <button name="check" type="submit">CHECK</button>
        </div>

    </form>

</div>

<div class="container-table">
    <iframe name="result_table" id="result_table">
    </iframe>
</div>


</body>

</html>