<?php
//incluye la clase Libro y CrudLibro
	require_once('../modelos/crud_libro.php');
	require_once('../libro.php');
	$crud= new CrudLibro();
	$libro=new Libro();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerA($_GET["nombre"]);//aqui problema -undefinined index nombre
?>
<html>
<head>
	<title>Actualizar Usuario</title>
</head>
<body>
	<form action='../controladores/administrar_libro.php' method='post'>
	<table>
		<tr>
		
			<input type='hidden' name='nombre' value='<?php echo $libro->getnombre()?>'>
			<td>clave:</td>
			<td> <input type='text' name='clave' value='<?php echo $libro->getclave()?>'></td>
		</tr>
		<tr>
			<td>direccion:</td>
			<td><input type='text' name='direccion' value='<?php echo $libro->getdirec()?>' ></td>
		</tr>
		<tr>
			<td>privilegio:</td>
			<td><input type='text' name='privilegio' value='<?php echo $libro->getpri()?>' ></td>
			
		</tr>
		<input type='hidden' name='actualisa' value'actualisa'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="../index.php">Volver</a>
</form>
</body>
</html>