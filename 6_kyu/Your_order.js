const order = words => {
    const arrayWords = words.split(" ");
    const resultado = [];

    arrayWords.forEach(element => {
        const numero = element.match(/\d/);
        resultado[numero] = element;
    });

    return resultado.join(' ').trim();
}