const howMuchILoveYou = (nbPetals) => {
    const frases = [
      "I love you",
      "a little",
      "a lot",
      "passionately",
      "madly",
      "not at all",
    ];
    const indice = (nbPetals - 1) % frases.length;
  
    return frases[indice];
  };
