console.log("===============");
console.log("ARRAY CHALLENGE");
console.log("===============");

function filter(arr) {
  // code goes here
  return arr.filter((item, index) => arr.indexOf(item) === index);
}

const test = filter([1, 2, 1, 3, 4, 4]);
console.log(`filter([1, 2, 1, 3, 4, 4]) => ${test}`);

// Mengurutkan angka dalam array
const nums = [9, 2, 5, 1, 7, 2, 5, 1, 7, 5, 8, 9, 0];
const asc = [...nums].sort((a, b) => a - b);
console.log(`sort asc: ${asc}`);

const desc = [...nums].sort((a, b) => b - a);
console.log(`sort desc: ${desc}`);

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

const uniqueArray = removeDuplicates([1, 2, 2, 3, 4, 4, 5]);
console.log(`removeDuplicates([1, 2, 2, 3, 4, 4, 5]) => ${uniqueArray}`);
