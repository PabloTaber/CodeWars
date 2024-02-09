const persistence = num => {
    let contador = 0;

    while (num > 9) {
        num = Array.from(num.toString()).reduce((acc, valor) => acc * parseInt(valor), 1);     
        contador++;        
    }

    return contador;
}


