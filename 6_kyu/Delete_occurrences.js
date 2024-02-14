const deleteNth = (arr, n) => {
  let count = [];

  return arr.filter((numero) => {
    count[numero] = (count[numero] || 0) + 1;
    return count[numero] <= n;
  });
};
