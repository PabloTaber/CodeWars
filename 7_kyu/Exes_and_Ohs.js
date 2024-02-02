const XO = str => (str.match(/[xX]/g) || []).length === (str.match(/[oO]/g) || []).length;
