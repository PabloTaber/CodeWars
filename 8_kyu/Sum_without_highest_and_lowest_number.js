const sumArray = array => (!array || array.length <= 2) ? 0 : array.reduce((acc, valor) => acc + valor, 0) - Math.max(...array) - Math.min(...array);