function calculoIMC() {
    var peso = parseFloat(document.getElementById("peso").value)
    var altura = parseFloat(document.getElementById("altura").value)
    var temp=(altura*altura);
    var IMC = peso/temp;

    // if (IMC<18.5){
    //     var grauOb = 0;
    // } else if(IMC<24.9) {
    //     var grauOb = 0;
    // } else if(IMC<29.9) {
    //     var grauOb = 1;
    // } else if(IMC<39.9) {
    //     var grauOb = 2;
    // } else{
    //     var grauOb = 3;
    // }

    document.getElementById("resultadoIMC").innerText = "IMC: " + peso;

    document.getElementById("resultadoOb").innerText = "Grau de Obesidade: " + altura;

    
}