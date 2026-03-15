console.log("==============");
console.log("BILANGAN PRIMA");
console.log("==============");

// Menampilkan angka prima dari 2 hingga 30
for (let i = 2; i <= 30; i++) {
  let isPrime = true;
  for (let j = 2; j * j <= i; j++) {
    if (i % j === 0) {
      isPrime = false;
      break;
    }
  }
  if (isPrime) console.log(i);
}

// Mencari angka prima hingga n
function prima(n) {
  const result = [];
  for (let i = 2; i <= n; i++) {
    let isPrime = true;
    for (let j = 2; j * j <= i; j++) {
      if (i % j === 0) {
        isPrime = false;
        break;
      }
    }
    if (isPrime) result.push(i);
  }
  return result;
}

console.log(`Prima hingga 20: ${prima(20)}`);

// Mengecek apakah sebuah angka merupakan bilangan prima
function isPrima(n) {
  if (!Number.isInteger(n) || n < 2) return false;
  if (n === 2) return true;
  if (n % 2 === 0) return false;
  for (let i = 3; i * i <= n; i += 2) {
    if (n % i === 0) return false;
  }
  return true;
}

console.log(`Apakah 17 prima? ${isPrima(17)}`); // true
