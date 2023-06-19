<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedido Realizado</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <ul class="menu">
    <li>
            <a href="Menu.html">Menu</a>
        </li>
        <li>
            <li>
            <a href="pedido2.html">Pedido</a>
        </li>
        <li>
            <a href="Contacto - copia.html">Contacto</a>
        </li>
        <li>
          <a href="calculadorafisica.html">Calculadora Fisica</a>
      </li>
      <li>
        <a href="Apimovies Original.html">Movies</a>
      </li>
      <li>
        <a href="perfil.html">Perfil</a>
      </li>
      <li>
        <a href="importante.html">Importante</a>
      </li>
      <li>
        <a href="Cuestionario.html">Cuestionario</a>
      </li>
        <li>
          <a href="Calculadora.html">Calculadora</a>
        </li>
        <li>
          <a href="pedidorealizado.php">pedidorealizado</a>
        </li>
    </ul>

   <div class="right-3"><h1>Pedido Realizado</h1>
    <h2>Con Exito</h2>
    <img class="imagen-2" src="imagenes/spidermancomiendo2.jpg">
    <h1 class="imagen-2">!Gracias por su Compra!</h1>
<b>▸Nombre:</b> <?php echo $_POST["nombre"]; ?><br>
<b>▸Apellido:</b> <?php echo $_POST["apellido"]; ?><br>
<b>▸Telefono:</b> <?php echo $_POST["telefono"]; ?><br>
<b>▸Direccion:</b> <?php echo $_POST["direccion"]; ?><br>
<b>▸Opciones:</b>  <?php echo $_POST["opciones"]; ?><br>
<b>▸Complementos:</b>
<?php
if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])){

foreach($_POST['check_list'] as $selected){
echo $selected.",";
}
}
}
?>
</div>
</body>
</html>