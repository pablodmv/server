<?php

echo '<pre>';
$retval="";
function commando($command)
{
$ultima_linea=system($command, $retval);
return $ultima_linea;
}

echo 'Empieza \n ' . commando("ls -l /tmp") . '\n termina'     ;

// Muestra el resultado completo del comando "ls", y devuelve la
// ultima linea de la salida en $ultima_linea. Almacena el valor de
// retorno del comando en $retval.

// Imprimir informacion adicional
echo '
/pre>
<hr />Estado del glassfish: ' . commando("ls -l /etc") . '
<hr />Valor de retorno: ' . $retval;

























 ?>
