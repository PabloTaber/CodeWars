const totalAmountVisible = (topNum, numOfSides) => {

  let suma = (numOfSides * (numOfSides + 1)) / 2;
  let downNum = numOfSides + 1 - topNum;

  return suma - downNum;
}
