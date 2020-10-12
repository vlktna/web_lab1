function targetDot() {
    let Y = Number(document.getElementById("valueY").value)
    let X = Number(document.getElementById("valueX").value)
    let R = document.querySelector('input[name="R"]:checked').value
    let target = document.getElementById("target-dot")
    let calcX = 300 + X * 200 / R
    let calcY = 300 - Y * 200 / R
    target.setAttribute("r", "8")
    target.setAttribute("cx", String(calcX))
    target.setAttribute("cy", String(calcY))
}

function notNumber(input) {
    return isNaN(Number(input.value))
}

function inputValidation(input, minValue, maxValue) {
    if (notNumber(input)) {
        alert("Поле " + input.name + " должно быть числом")
        return false
    }
    if (input.value.length >= 17) {
        alert("Превышено количество символов")
        return false
    }

    if (input.value >= maxValue) {
        alert("Число " + input.name + " должно быть меньше " + maxValue)
        return false
    } else if (input.value <= minValue) {
        alert("Число " + input.name + " должно быть больше " + minValue)
        return false
    } else {
        targetDot()
        return true
    }
}

function clearForm(){
    document.getElementById("valueY").value = ""
}

function tableSize(obj){
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + "px"
}
