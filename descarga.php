<?php
session_start();
require_once('conexion.php');
$conexion = Conectar();

$archivo = $_GET['id'];
$ruta = 'pdf/'.$archivo;
?>
<head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

   <?php

	header('Content-Type: application/force-download');
   header('Content-Disposition: attachment; filename='.$archivo);
   header('Content-type: application/pdf');
  

   readfile($ruta);
	
?>

	 </body>
</html>