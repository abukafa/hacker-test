console.log("==========");
console.log("PALINDROME");
console.log("==========");

// Mengecek apakah sebuah string merupakan palindrome (sama dibaca dari depan maupun belakang)
function palindrome(str) {
  let reversed = "";
  for (let i = str.length - 1; i >= 0; i--) {
    reversed += str[i];
  }
  return str === reversed;
}

const katak = palindrome("katak");
console.log("katak: " + katak);

// Faster palindrome
function isPalindrome(str) {
  const reversed = str.split("").reverse().join("");
  return str === reversed;
}

const bangkong = isPalindrome("bangkong");
console.log("bangkong: " + bangkong);
