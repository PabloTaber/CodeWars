String.prototype.toJadenCase = function () {
    return this.split(" ").map(valor => valor[0].toUpperCase() + valor.substring(1)).join(" ");
};