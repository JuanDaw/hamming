# Hamming

Calcula la distancia Hamming entre dos cadenas de ADN.

Una mutación es simplemente un fallo que se produce durante la creación o la
copia de un ácido nucleico, en particular, ADN. Como los ácidos nucleicos son
vitales para la función celular, las mutaciones tienden a provocar un efecto
onda a través de la célula. Aunque las mutaciones son, técnicamente, fallos,
en muy raras ocasiones pueden proporcionar a la célula un atributo
beneficioso. De hecho, los efectos a largo plazo de la evolución son
atribuibles al resultado acumulado de las mutaciones microscópicas
beneficiosas ocurridas a lo largo de muchas generaciones.

La forma más simple y sencilla de mutación es una mutación puntual, en la que
se reemplaza una base por otra en un solo nucleótido.

Si contamos el número de diferencias entre dos hebras de ADN tomados de
distintos genomas con un antecesor común, obtendremos una medida del número
mínimo de puntos de mutación que pueden haber ocurrido en el camino
evolutivo entre las dos hebras.

A esto se le denomina "distancia Hamming".

Se calcula comparando dos hebras de ADN y contando cuántos de sus
nucleótidos son distintos a los de sus equivalentes en la otra cadena.

    GAGCCTACTAACGGGAT
    CATCGTAATGACGGCCT
    ^ ^ ^  ^ ^    ^^

La distancia Hamming entre esas dos cadenas de ADN es 7.

# Notas de implementación

La distancia Hamming sólo se define entre secuencias de igual longitud.

