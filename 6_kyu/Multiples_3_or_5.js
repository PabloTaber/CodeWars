const solution = number => Array.from({ length: number - 1 }, (_, index) => index + 1).filter(value => value % 3 === 0 || value % 5 === 0).reduce((acc, valor) => acc + valor, 0);
