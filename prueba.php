<?php
// Script /scripts/login.php

function Login($nombre, $contrasena)
{
   echo $nombre . $contrasena;
}

if(isset($_POST['nombre-usuario'])
 && isset($_POST['contrasena-usuario']))
{
  // Las variables "nombre-usuario" y "contrasena-usuario" que
  // nos llegan a través del método HTTP POST que se encarga
  // de realizar el formulario HTML, es decir, en el transcurso de
  // su proceso, digo, dichas variables están establecidas, como
  // acabamos de comprobar la condición anterior.

  // Pues bien, esto quiere decir que el formulario ha sido enviado
  // (no nos abriremos a otras posibilidades, puesto que no nece-
  // sariamente ha sido "el formulario" quien ha realizado el HTTP
  // POST...) y así nosotros llamamos a la función "Login".

  // Podemos hacerlo, puesto que estamos "en PHP", en el Servidor,
  // en medio del proceso de este Script. No estaría demás añadir
  // que este puede ser un buen momento para realizar las valida-
  // ciones que se consideren oportunas a la entrada del usuario.

  // Después ya podríamos llamar a la función "Login"
  Login($_POST['nombre-usuario'], $_POST['contrasena-usuario']);
}

?>

 <form method="post" action="">
 <input type="text" name="nombre-usuario" />
 <input type="password" name="contrasena-usuario" />
 <input type="submit" value="Enviar el formulario" />
</form>
