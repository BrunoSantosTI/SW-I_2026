function processarValidacao() {
    const valorInput = document.getElementById('cpf').value;
    const valido = validarCPF(valorInput);

    if (valido){
        alert ("O CPF" + valorInput + "é válido")
    } else{
        alert ("O CPF" + valorInput + "é inválido")
    }    
}

function soma(){
    const valorInput = document.getElementById('cpf').value;
    const valorNome = document.getElementById('nome').value;
    const valorEndereco = document.getElementById('endereco').value;
    const valorEmail = document.getElementById('email').value;
    alert("Olá " + valorNome + "! Seu CPF é: " + valorInput + ". O seu E-mail é: " + valorEmail + ". O seu endereço é: " + valorEndereco + ".")
}

function validarCPF(valorCPF){
    // remove pontos e traços, deixando apenas números 
    valorCPF = valorCPF.replace(/[^\d]+/g, '');

    if (valorCPF.length !== 11 || !!valorCPF.match(/(\d)\1{10}/)){
        return false;
    }

    const digitos = valorCPF.split('').map(el => +el);

    let soma = 0;


}