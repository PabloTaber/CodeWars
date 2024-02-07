const add = (a, b) => {
    let reversaA = a.split("").reverse();
    let reversaB = b.split("").reverse();
    let resultado = "";
    let tamanoA = reversaA.length;
    let tamanoB = reversaB.length;
    let acc = 0;

    for (let i = 0; i < Math.max(tamanoA, tamanoB); i++) {
        let valorA = i < tamanoA ? parseInt(reversaA[i]) : 0;
        let valorB = i < tamanoB ? parseInt(reversaB[i]) : 0;
        let suma = valorA + valorB + acc;
        
        acc = suma > 9 ? 1 : 0;
        suma = suma % 10;

        resultado = suma + resultado;
    }
    
    resultado = parseInt(resultado);

    return acc ? acc + resultado : resultado.toString(); 
}