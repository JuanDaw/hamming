<?php

/**
 * @author Juan Villoria
 * @copyright Copyright {c} 2020 Juan Villoria
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 */

 /**
  * Este programa calcula la distancia hamming entre dos cadenas.
  * @param string $a. La primera cadena.
  * @param string $b. La segunda cadena. 
  * @return int|bool. El número de caracteres distintos, o false si tiene distinta longitud
  */
function distancia($a, $b)
{
    if (mb_strlen($a) != mb_strlen($b)) {
        return false;
    }

    if ($a === $b) {
        return 0;
    }

    $sol = array_diff_assoc(mb_str_split($a), mb_str_split($b));

    return count($sol);
}
