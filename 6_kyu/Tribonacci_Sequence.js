const tribonacci = (signature, n) => {
    const resultado = [...signature];
  
      for (let index = 3; index < n; index++) {
              resultado.push(resultado.slice(index - 3, index).reduce((acc, valor) => acc + valor, 0));
      }
  
    return resultado.slice(0, n);
  };
