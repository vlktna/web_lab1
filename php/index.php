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

<body>
<div class="header">
    <span>Вариант 2607</span>
    <span class="stud_name">Волокитина Вероника, P3230</span>
</div>

<div class="container">

    <div class="image">
        <object type="image/svg+xml" data="../img/plot.svg">
            <img src="../img/plot.svg" alt="plot">
        </object>
    </div>


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
            <button name="clear" type="submit" onclick="clear.php">CLEAR</button>

        </div>

    </form>

</div>


<center>
    <div>
        <iframe name="result_table" id="result_table">
        </iframe>
    </div>
</center>



</body>

</html>