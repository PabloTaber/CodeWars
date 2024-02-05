const findNextSquare = sq => {
    let raiz = Math.sqrt(sq);

    return Number.isInteger(raiz) ? Math.pow(++raiz, 2) : -1;
}