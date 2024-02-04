const basicOp = (operation, value1, value2) => {
  const operaciones = {
    '+': (a, b) => a + b,
    '-': (a, b) => a - b,
    '*': (a, b) => a * b,
    '/': (a, b) => a / b,
  };

  return operaciones[operation](value1, value2);
};
