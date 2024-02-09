const countPositivesSumNegatives = (input) => input === null || input.length === 0 ? [] : [
        input.filter((valor) => valor > 0).length,
        input.filter((valor) => valor < 0).reduce((acc, valor) => acc + valor, 0),
      ];
