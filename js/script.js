function targetDot(){
    let target = document.getElementById("target-dot");
    let Y = Number(document.getElementById("valY").value);
    let X = Number(document.getElementById("valX").value);
    let R = document.querySelector('input[name="valueR"]:checked').value;
    let calcX = 300 + X * 200 / R;
    let calcY = 300 - Y * 200 / R;
    target.setAttribute("r", "8");
    target.setAttribute("cx", String(calcX));
    target.setAttribute("cy", String(calcY));

}