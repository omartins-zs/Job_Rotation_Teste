let palavra = prompt("Digite uma palavra:");
let novaPalavra = "";

for (let i = palavra.length - 1; i >= 0; i--) {
    novaPalavra += palavra[i];
}

document.write(novaPalavra);