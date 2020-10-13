<?php

/**
 * @author Juan Villoria
 * @copyright Copyright {c} 2020 Juan Villoria
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 */

 /**
  * Este programa calcula la distancia hamming entre dos cadenas
  */

function distancia($a, $b)
{
    if (mb_strlen($a) != mb_strlen($b)) {
        return false;
    }

    if ($a === $b) {
        return 0;
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
