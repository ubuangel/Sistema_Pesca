<?php
//incluye la clase Libro y CrudLibro
require_once('modelos/crud_libro.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro= new Libro();
//obtiene todos los libros con el método mostrar de la clase crud
$lista=$crud->mostrar();
?>
 
<html>
<head>
	<meta charset="UTF-8">
  <link href="app/estilos/principal.css" rel="stylesheet" type="text/css">
  <title> Venta de articulos de Pesca</title>
  
</head>
<body>

 <?php include 'vistas/cabeceraPagina.html'; ?>
	<table border=1 align="center">
		<head>
			<td><font color="white">id</td>
			<td><font color="white">modelo</td>
			<td><font color="white">marca</td>
			<td><font color="white">Actualizar</td>
			<td><font color="white">Eliminar</td>
		</head>
		<body>
			<?php foreach ($lista as $libro) {?>
			<tr>
				<td><font color="white"><?php echo $libro->getId() ?></td>
				<td><font color="white"><?php echo $libro->getmodelo() ?></td>
				<td><font color="white"><?php echo $libro->getmarca()?> </td>
				<td><font color="white"><font color="white"><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a> </td>
				<td><font color="white"><a href="controladores/administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
		
		
		
	</table>
	<a href="index.php"  ><font color="white">Volver</a>
</body>
</html>
