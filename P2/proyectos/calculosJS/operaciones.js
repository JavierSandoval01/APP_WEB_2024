function operacion() {
    let n1 = parseFloat(document.getElementById("n1").value);
    let n2 = parseFloat(document.getElementById("n2").value);
    let tipoope = document.getElementById("tipo").value;
    let ope = null;

    // Validamos si los valores son números
    if (isNumber(n1) && isNumber(n2)) {
        switch (tipoope) {
            case "+":ope = n1 + n2;break;
            case "-":ope = n1 - n2;break;
            case "*":ope = n1 * n2;break;
            case "/":ope = n1 / n2;break;
        }
        let resul = document.getElementById("resultado");
        resul.innerHTML = `<h2>${n1} ${tipoope} ${n2} = ${ope}</h2>`;
    } else {
        alert("Ingresa solo números");
    }
}

function isNumber(n) {
    return !isNaN(n) && isFinite(n);
}
