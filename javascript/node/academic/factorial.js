console.log("=========");
console.log("FACTORIAL");
console.log("=========");

// Menghitung faktorial dari sebuah angka ex: 5! = 5 x 4 x 3 x 2 x 1 = 120
function factorial(n) {
  if (n === 0 || n === 1) {
    return 1;
  }
  number = n;
  for (let i = n - 1; i >= 1; i--) {
    number *= i;
  }
  return number;
}

const result = factorial(5);
console.log(`5! = ${result}`);
