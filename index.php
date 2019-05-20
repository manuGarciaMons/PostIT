<?php
session_start();
?>
<form action="validad.php" method="post" enctype="application/x-www-form-urlencoded">
<label for="caja1"><p>Nombre de usuario</p>
<p><input type="text" id="caja1" name="usuario io" placeholder="Usuario" required></p> 
</label>
<label for="caja2"><p>Contraseña</p>
<p><input type="password" id="caja2" name="password" placeholder="Contraseña" required></p>
</label>
<input type="submit" value="iniciar sesion">
</form>
