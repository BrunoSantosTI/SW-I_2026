function calculoIMC() {
    var peso = parseFloat(document.getElementById("peso").value)
    var altura = parseFloat(document.getElementById("altura").value)
    
    if (isNaN(peso) || isNaN(altura) || altura === 0) {
        alert("Digite valores válidos!");
        return;
    }

    var IMC = (peso/(altura*altura)).toFixed(2);
    var grauOb;

    if (IMC<18.5){
        grauOb = 0;
    } else if(IMC<24.9) {
        grauOb = 0;
    } else if(IMC<29.9) {
        grauOb = 1;
    } else if(IMC<39.9) {
        grauOb = 2;
    } else{
        grauOb = 3;
    }

    document.getElementById("resultadoIMC").innerText = "IMC: " + IMC;

    document.getElementById("resultadoOb").innerText = "Grau de Obesidade: " + grauOb;

    
}