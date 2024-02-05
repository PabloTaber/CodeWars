const validBraces = braces => {

    while (braces.includes("[]") || braces.includes("{}") || braces.includes("()")) {
        braces = braces.replace(/\(\)|\{\}|\[\]/g, '');
    }

   return braces === ""; 

}

