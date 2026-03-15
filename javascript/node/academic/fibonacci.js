console.log("=========");
console.log("FIBONACCI");
console.log("=========");

// Menghitung angka Fibonacci hingga n
function fibonacci(n) {
  let a = 0;
  let b = 1;
  let result = [];
  for (let i = 0; result.length < n; i++) {
    result.push(a);
    let temp = a;
    a = b;
    b = temp + b;
  }
  return result.join(" ");
}

console.log(`Fibonacci: ${fibonacci(10)}`);

// Menghitung angka Fibonacci hingga n dengan validasi input
function fibonacciTo(n) {
  if (!Number.isInteger(n) || n < 0) return null;
  if (n === 0) return [0];
  if (n === 1) return [0, 1];
  const group = [0, 1];
  for (let i = 2; i <= n; i++) {
    group.push(group[i - 1] + group[i - 2]);
  }
  return group;
}

console.log(`Fibonacci: ${fibonacciTo(10)}`);

// Menghitung angka Fibonacci hingga n tampilkan di log
function fibo(n) {
  let a = 0;
  let b = 1;
  for (let i = 0; i < n; i++) {
    console.log(a);
    let temp = a;
    a = b;
    b = temp + b;
  }
  return "⬆ Fibonacci in Log ⬆";
}

console.log(fibo(10));

// Menghitung angka Fibonacci ke-n
function fibona(n) {
  if (!Number.isInteger(n) || n < 0) return null;
  let a = 0;
  let b = 1;
  for (let i = 0; i < n; i++) {
    const next = a + b;
    a = b;
    b = next;
  }
  return b;
}

console.log(`Fibonacci 10: ${fibona(10)}`);
