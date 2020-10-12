<!DOCTYPE html>
<?php
$_SESSION["result"] = array();
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>lab1</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="../js/clearTable.js"></script>

</head>

<body>
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

        <path class="circle-graph" d="M 400,300 A 100,100 0 0, 1 300,400" fill=#95a3b3></path>

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

        <text class="point-text" x="550" y="290" font-size="20px">X</text>
        <text class="point-text" x="310" y="60" font-size="20px">Y</text>

        <circle cx="150" cy="150" fill=#84dcc6 id="target-dot" r="0"></circle>
    </svg>


    <form class="getValue" name="form" action="createTable.php"
          onsubmit="return inputValidation(document.getElementById('valueY'), -5, 5)"
          target="result_table" method="post">

        <div class="form__element">
            <label for="valueX">X = </label>
            <select id="valueX" name="X">
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

        <div class="form__element">
            <label for="valueY">Y = </label>
            <input id="valueY" name="Y" required/>
        </div>

        <div class="form__element">
            <label for="form_radio_group">R = </label>
            <div id="valueR">

                <div class="form_radio_btn">
                    <input id="radio-1" type="radio" name="R" value="1" checked>
                    <label for="radio-1">1</label>
                </div>

                <div class="form_radio_btn">
                    <input id="radio-2" type="radio" name="R" value="2" checked>
                    <label for="radio-2">2</label>
                </div>

                <div class="form_radio_btn">
                    <input id="radio-3" type="radio" name="R" value="3" checked>
                    <label for="radio-3">3</label>
                </div>

                <div class="form_radio_btn">
                    <input id="radio-4" type="radio" name="R" value="4" checked>
                    <label for="radio-4">4</label>
                </div>

                <div class="form_radio_btn">
                    <input id="radio-5" type="radio" name="R" value="5" checked>
                    <label for="radio-5">5</label>
                </div>

            </div>
        </div>


        <div class="form__element">
            <button name="clear" id="clear-table" type="button" onclick="clearTable()">
            <label for="clear-table">CLEAR TABLE</label>

            <button name="clear" id="clear-form" type="button" onclick="clearForm()">
            <label for="clear-form">CLEAR FORM</label>

        </div>

        <div class="form__element">
            <button name="check" type="submit">CHECK</button>
        </div>

    </form>

</div>
<div class="container-table">
    <iframe name="result_table" id="result_table" scrolling="no" onload="tableSize(this)" src = createTable.php>
    </iframe>
</div>

<footer>
    <a href="https://github.com/vlktna/web_lab1">
        <svg aria-hidden="true" class="github-icon" height="32" viewBox="0 0 16 16" width="32">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"
                  fill-rule="evenodd" fill=#84dcc6>
            </path>
        </svg>
    </a>
</footer>

</body>

</html>