const longest = (s1, s2) => {
    let s = (s1 + s2).split("").sort();
    
    return s.filter((valor, indice) => s.indexOf(valor) === indice).join(''); 
}