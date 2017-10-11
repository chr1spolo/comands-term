<?php

echo "Ingrese su número: ";
$d = trim( fread(STDIN, 100) );
$i = 0;

while (true) 
{
    if (++$i % $d == 0) 
    {
        fwrite( STDOUT, sprintf("El %d es múltiplo de %d \n", $i, $d) );
    } 
    else 
    {
        fwrite( STDERR, sprintf( "¡Warning! el %d no es múltiplo de %d \n", $i, $d ) );
    }
    sleep(1);
}

?>