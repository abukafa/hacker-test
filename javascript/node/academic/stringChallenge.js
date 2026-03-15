console.log("================");
console.log("STRING CHALLENGE");
console.log("================");

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

const vocal = countVowel("indonesia");
console.log(`aiueo: indonesia => ${vocal}`);

// Membalikkan sebuah string (reverse string)
function reverse(str) {
  let reversed = "";
  for (let i = str.length - 1; i >= 0; i--) {
    reversed += str[i];
  }
  return reversed;
}

// Membalikkan sebuah string (reverse string) dengan validasi input
function reverseString(str) {
  if (typeof str !== "string") return "";
  let out = "";
  for (let i = str.length - 1; i >= 0; i--) {
    out += str[i];
  }
  return out;
}

const reversedString = reverseString("developer");
console.log(`reverseString: developer => ${reversedString}`);

// REVERSE built-in JavaScript
function reverseStr(str) {
  return str.split("").reverse().join("");
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

const capitalized = capitalize("hello world");
console.log("capitalize: hello world => " + capitalized);

// Menghitung jumlah kemunculan setiap karakter dalam string
const str = "programming";
let obj = str.split("").reduce((acc, char) => {
  acc[char] = (acc[char] || 0) + 1;
  return acc;
}, {});
console.log("count char: programming");
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

const charCount = countChars("programming");
console.log(`count char: programming => ${JSON.stringify(charCount)}`);
