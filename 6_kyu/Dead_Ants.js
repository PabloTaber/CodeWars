const deadAntCount = (ants) => {
  if (ants == null) {
    return 0;
  }

  let countA = 0;
  let countN = 0;
  let countT = 0;

  const sinAnts = ants.replace(/ant/gi, "") || "";

  for (let i = 0; i < sinAnts.length; i++) {
    if (sinAnts[i] === "a") {
      countA++;
    } else if (sinAnts[i] === "n") {
      countN++;
    } else if (sinAnts[i] === "t") {
      countT++;
    }
  }

  return Math.max(countA, countN, countT);
};
