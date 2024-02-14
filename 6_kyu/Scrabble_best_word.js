const getBestWord = (points, words) => {
  let valorA = "A".charCodeAt(0);
  let minLongitud = Number.MAX_SAFE_INTEGER;
  let maxPuntos = 0;
  let index = 0;

    for (let i = 0; i < words.length; i++) {
        const palabra = words[i];
        let  palabraLongitud= palabra.length;
        let  palabraPuntos = palabra.split("").reduce((acc, valor) => acc + points[valor.charCodeAt(0) - valorA], 0);

        if (palabraPuntos > maxPuntos || (palabraPuntos === maxPuntos && palabraLongitud < minLongitud)) {
            maxPuntos = palabraPuntos;
            minLongitud = palabraLongitud;
            index = i;
          }
    }

    return index;
};
