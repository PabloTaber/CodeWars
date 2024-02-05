const createPhoneNumber = numbers => {
    let area = numbers.slice(0,3).join('');
    let prefijo = numbers.slice(3, 6).join('');
    let numero = numbers.slice(6, 11).join('');
    
    return '(' + area + ') ' + prefijo + '-' + numero;
}