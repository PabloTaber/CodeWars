<?php

/**
 * Define a function that takes an integer argument and returns a logical value true or false depending on if the integer is a prime.
 * 
 * Per Wikipedia, a prime number ( or a prime ) is a natural number greater than 1 that has no positive divisors other than 1 and itself.
 * 
 * Requirements
 * You can assume you will be given an integer input.
 * You can not assume that the integer will be only positive. You may be given negative numbers as well ( or 0 ).
 * NOTE on performance: There are no fancy optimizations required, but still the most trivial solutions might time out. Numbers go up to 2^31 ( or similar, depending on language ). Looping all the way up to n, or n/2, will be too slow.
 * 
 * Example
 * is_prime(1)   false 
 * is_prime(2)   true  
 * is_prime(-1)  false 
 * 
 */

 function is_prime(int $n): bool {
    
    // Si es menor que uno no es primo
    if ($n <= 1) {
        return false;
    // Si es igual a 2 si es primo
    } elseif ($n === 2) {
        return true;
    // Si es par no es primo (excepto 2)
    } elseif ($n % 2 === 0) {
        return false;
    // Verificar divisibilidad por números impares hasta la raíz cuadrada de $n
    } else {
        $divisor = 3;

        while ($divisor * $divisor <= $n) {
            // Verificar divisibilidad
            if ($n % $divisor === 0) {
                return false;
            }
            // Solo verificar divisibilidad con números impares
            $divisor += 2;
        }
        // Si no hay divisores encontrados, $n es primo
        return true;
    }
 }