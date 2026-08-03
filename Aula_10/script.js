const imagem = document.getElementById("imagem");
const nome = document.getElementById("nome");
const tipo = document.getElementById("tipo");
const btnShiny = document.getElementById("btnShiny");

let pokemonAtual = null;
let shiny = false;

function callAPI(){

    const numero = Number(document.getElementById("numero").value);

    if(!Number.isInteger(numero) || numero < 1 || numero > 1025){
        alert("Digite um número entre 1 e 1025.");
        return;
    }

    fetch(`https://pokeapi.co/api/v2/pokemon/${numero}`)
    .then(response => {

        if(!response.ok){
            throw new Error("Pokémon não encontrado.");
        }

        return response.json();

    })

    .then(data => {

        pokemonAtual = data;

        nome.textContent = data.name;

        imagem.src = data.sprites.front_default;

        imagem.style.display = "block";

        tipo.textContent = data.types[0].type.name;

        btnShiny.style.display = "inline";

        shiny = false;

        btnShiny.textContent = "Mostrar versão Shiny";

    })

    .catch(error => {

        console.error(error);

        alert("Não foi possível carregar os dados do Pokémon.");

    });

}

function mostrarShiny(){

    if(!pokemonAtual) return;

    if(shiny){

        imagem.src = pokemonAtual.sprites.front_default;
        btnShiny.textContent = "Mostrar versão Shiny";

    }else{

        imagem.src = pokemonAtual.sprites.front_shiny;
        btnShiny.textContent = "Mostrar versão Normal";

    }

    shiny = !shiny;

}