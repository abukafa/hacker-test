// Fizz Buzz dari 1 hingga 30
for (let i = 1; i <= 30; i++) {
  if (i % 3 === 0 && i % 5 === 0) {
    console.log("FizzBuzz");
  } else if (i % 3 === 0) {
    console.log("Fizz");
  } else if (i % 5 === 0) {
    console.log("Buzz");
  } else {
    console.log(i);
  }
}

// Manual MAX
function max(...values) {
  const nums =
    values.length === 1 && Array.isArray(values[0]) ? values[0] : values;
  return Math.max(...nums);
}

// Manual MIN
function min(...values) {
  const nums =
    values.length === 1 && Array.isArray(values[0]) ? values[0] : values;
  return nums.reduce((a, b) => (a < b ? a : b));
}

// Manual LEN
function len(str) {
  return str.length;
}

// Menghitung jumlah hurufvokal dalam sebuah string
function jumlahVokal(str) {
  const vokal = ["a", "i", "u", "e", "o"];
  count = 0;
  str = str.toLowerCase();
  for (let i = 0; i < str.length; i++) {
    if (vokal.includes(str[i])) count++;
  }
  return count;
}

// Menghitung jumlah huruf vokal dalam sebuah string menggunakan Set untuk efisiensi
function countVowel(str) {
  if (typeof str !== "string") return 0;
  let count = 0;
  const vowels = new Set(["a", "i", "u", "e", "o"]);
  for (const ch of str.toLowerCase()) {
    if (vowels.has(ch)) count++;
  }
  return count;
}

// Membalikkan sebuah string (reverse string)
function reverse(str) {
  let reversed = "";
  for (let i = str.length - 1; i >= 0; i--) {
    reversed += str[i];
  }
  return reversed;
}
reverse("developer");

// Membalikkan sebuah string (reverse string) dengan validasi input
function reverseString(str) {
  if (typeof str !== "string") return "";
  let out = "";
  for (let i = str.length - 1; i >= 0; i--) {
    out += str[i];
  }
  return out;
}

// REVERSE built-in JavaScript
function reverseStr(str) {
  return str.split("").reverse().join("");
}

// Mengecek apakah sebuah string merupakan palindrome (sama dibaca dari depan maupun belakang)
function palindrome(str) {
  let reversed = "";
  for (let i = str.length - 1; i >= 0; i--) {
    reversed += str[i];
  }
  return str === reversed;
}
palindrome("katak");

// Faster palindrome
function isPalindrome(str) {
  const reversed = str.split("").reverse().join("");
  return str === reversed;
}

// Mengubah kalimat menjadi huruf kapital pada setiap kata (title case)
function capitalize(str) {
  let words = str.split(" ");
  let capitalizedWords = [];
  for (let word of words) {
    capitalizedWords.push(word.charAt(0).toUpperCase() + word.slice(1));
  }
  return capitalizedWords.join(" ");
}
capitalize("hello world");

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
}

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
factorial(5);

// Mencari angka terbesar dalam array
function largestNumber(arr) {
  let largest = arr[0];
  for (let num of arr) {
    if (num > largest) {
      largest = num;
    }
  }
  return largest;
}
largestNumber([4, 7, 2, 9, 1]);

// MAX built-in JavaScript
Math.max(...[12, 5, 8, 21, 9]);

// Menghapus elemen duplikat dari array
function removeDuplicates(arr) {
  let unique = [];
  for (let item of arr) {
    if (!unique.includes(item)) {
      unique.push(item);
    }
  }
  return unique;
}
removeDuplicates([1, 2, 2, 3, 4, 4, 5]);

// Menghitung jumlah kemunculan setiap karakter dalam string
const str = "programming";
let obj = str.split("").reduce((acc, char) => {
  acc[char] = (acc[char] || 0) + 1;
  return acc;
}, {});
for (const [char, count] of Object.entries(obj)) {
  console.log(`${char}: ${count}`);
}

// Menghitung jumlah kemunculan setiap karakter dalam string menggunakan reduce
function countChars(str) {
  const result = str.split("").reduce((acc, i) => {
    acc[i] = (acc[i] || 0) + 1;
    return acc;
  }, {});
  return result;
}

// Mengurutkan angka dalam array
const nums = [9, 2, 5, 1, 7];
nums.sort((a, b) => a - b);

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
prima(50);

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
