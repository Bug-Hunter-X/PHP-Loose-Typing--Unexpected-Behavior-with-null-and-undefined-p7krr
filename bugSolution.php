function foo(x) {
  if (x === null || x === undefined) {
    return 0;
  }
  return x + 1;
}

function bar(y) {
  return foo(y);
}

console.log(bar(null)); // Output: 0
console.log(bar(undefined)); // Output: 0