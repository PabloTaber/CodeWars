const toCsvText = (array) => {
    return array.map(element => element.join(',')).join('\n');
}