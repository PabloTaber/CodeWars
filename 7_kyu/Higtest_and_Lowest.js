const highAndLow = numbers => {
    numbers = numbers.split(" ").map(num => parseInt(num));
    const max = Math.max(...numbers);
    const min = Math.min(...numbers);

    return max + " " + min;
}
