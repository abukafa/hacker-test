console.log("===========");
console.log("MAX MIN LEN");
console.log("===========");

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

const maxNumber = largestNumber([4, 7, 2, 9, 1]);
console.log(`largestNumber([4, 7, 2, 9, 1]) => ${maxNumber}`);

// MAX built-in JavaScript
Math.max(...[12, 5, 8, 21, 9]);

// Manual MAX
function max(...values) {
  const nums =
    values.length === 1 && Array.isArray(values[0]) ? values[0] : values;
  return Math.max(...nums);
}

const maxNum = max([4, 7, 2, 9, 1]);
console.log(`max([4, 7, 2, 9, 1]) => ${maxNum}`);

// Manual MIN
function min(...values) {
  const nums =
    values.length === 1 && Array.isArray(values[0]) ? values[0] : values;
  return nums.reduce((a, b) => (a < b ? a : b));
}

const minNum = min([4, 7, 2, 9, 1]);
console.log(`min([4, 7, 2, 9, 1]) => ${minNum}`);

// Manual LEN
function len(str) {
  return str.length;
}

const lenNum = len([4, 7, 2, 9, 1]);
console.log(`len([4, 7, 2, 9, 1]) => ${lenNum}`);
