function multiply2(arr, n) {
  let product = 1;
  for (let i = 0; i < n; i++) {
    product *= arr[i];
  }
  return product;
}
function multiply(arr, n) {
  if (n <= 0) {
    return 1;
  } else {
    console.log(n);
    return multiply(arr, n - 1) * arr[n - 1];    
  }
}
var arreglo = [1,2,3,4];
console.log(arreglo);
console.log(multiply2(arreglo,arreglo.length));
console.log(multiply(arreglo,arreglo.length));
console.log(arreglo);

function sum(arr, n) {
  // Cambia solo el código debajo de esta línea
  if(n <= 0){
    return 0
  }else{
    console.log(arr);
    return sum(arr, n-1) + arr[n-1];
  }
}
console.log("****************************");
console.log(sum([1],0));
console.log(sum([2,3,4],1));
console.log(sum([2,3,4,5],3));
