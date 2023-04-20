let num = parseInt(prompt("Digite um número: "));
let fib1 = 0;
let fib2 = 1;

if (num === fib1 || num === fib2) {
  console.log("O número pertence à sequência de Fibonacci.");
} else {
  while (fib2 < num) {
    let temp = fib2;
    fib2 = fib1 + fib2;
    fib1 = temp;
    if (num === fib2) {
      console.log("O número pertence à sequência de Fibonacci.");
      break;
    }
  }
  if (num !== fib2) {
    console.log("O número não pertence à sequência de Fibonacci.");
  }
}