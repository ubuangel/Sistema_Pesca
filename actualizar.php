<?php
//incluye la clase Libro y CrudLibro
	require_once('modelos/crud_libro.php');
	require_once('libro.php');
	$crud= new CrudLibro();
	$libro=new Libro();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerLibro($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Articulos</title>
</head>
<body>
	<form action='controladores/administrar_libro.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $libro->getId()?>'>
			<td>modelo:</td>
			<td> <input type='text' name='modelo' value='<?php echo $libro->getmodelo()?>'></td>
		</tr>
		<tr>
			<td>marca:</td>
			<td><input type='text' name='marca' value='<?php echo $libro->getmarca()?>' ></td>
		</tr>
		<tr>
			<td>precio:</td>
			<td><input type='text' name='precioVenta' value='<?php echo $libro->getprecioVenta()?>' ></td>
			
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>
