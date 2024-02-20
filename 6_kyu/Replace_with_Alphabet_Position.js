const alphabetPosition = (text) =>
  text
    .toLowerCase()
    .split("")
    .filter(($valor) => $valor >= "a" && $valor <= "z")
    .map(($valor) => $valor.charCodeAt(0) - 96)
    .join(" ");
