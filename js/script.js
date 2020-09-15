function targetDot() {
    let Y = Number(document.getElementById("valueY").value);
    let X = Number(document.getElementById("valueX").value);
    let R = document.querySelector('input[name="R"]:checked').value;
    let target = document.getElementById("target-dot");
    let calcX = 300 + X * 200 / R;
    let calcY = 300 - Y * 200 / R;
    target.setAttribute("r", "8");
    target.setAttribute("cx", String(calcX));
    target.setAttribute("cy", String(calcY));
}

function inputValidation(input, minValue, maxValue) {
    if (input.value.length >= 17) {
        alert("Превышено количество символов");
        return false;
    } else {
        if (Number(input.value) > maxValue) {
            alert("Число " + input.name + " должно быть меньше или равно 5");
            return false;
        } else if (Number(input.value) < minValue) {
            alert("Число " + input + " должно быть больше или равно -5");
            return false;
        } else {
            targetDot();
            return true;
        }
    }
}