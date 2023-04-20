const valores = {
    'SP': 67836.43,
    'RJ': 36678.66,
    'MG': 29229.88,
    'ES': 27165.48,
    'Outros': 19849.53
};

let total = 0;
for (let estado in valores) {
    total += valores[estado];
}

for (let estado in valores) {
    const percentual = (valores[estado] / total) * 100;
    document.write(`${estado}: ${percentual.toFixed(2)}%` + "<br>");
}