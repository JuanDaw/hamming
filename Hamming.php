<?php

/*
 * Esto es sólo un ESQUELETO para el ejercicio de la "distancia Hamming".
 */

function distancia($a, $b)
{
    if (mb_strlen($a) != mb_strlen($b)) {
        return false;
    }

    $sol = 0;

    for ($i=0; $i < mb_strlen($a); $i++) { 
        for ($j=0; $j < mb_strlen($b); $j++) { 
            if ($a[$i] = $b[$j]) {
                $sol += 1;
            }
        }
    }

    return $sol;
}
