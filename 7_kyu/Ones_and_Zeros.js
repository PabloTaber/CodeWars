const binaryArrayToNumber = arr => arr.reverse().reduce((acc, valor, indice) => acc + valor * (2**indice), 0);
