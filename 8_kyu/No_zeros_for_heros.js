  const noBoringZeros = n => {
    
    if (n === 0) {
      return 0;
    }
    
    n = n.toString().split('').reverse();
  
    // Eliminar ceros al principio del array
    while (n[0] === '0') {
      n.shift();
    }
  
    return +(n.reverse().join(''));
  }