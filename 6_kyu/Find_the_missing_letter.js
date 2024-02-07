const findMissingLetter = array => {

  for (let index = 0; index < array.length - 1; index++) {
    let actual = array[index].charCodeAt();
    let siguiente = array[index + 1].charCodeAt();
    
    if (actual + 1 !== siguiente) {
      return String.fromCharCode(actual + 1);
    }
  }

  return '';
}