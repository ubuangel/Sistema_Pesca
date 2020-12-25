<?php
//incluye la clase Libro y CrudLibro
	require_once('../modelos/crud_autor.php');
	require_once('../autor.php');
	$crud= new CrudAutor();
	$libro=new Autor();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerA($_GET['nombre']);//sigue error
?>
<html>
<head>
	<title>Actualizar Autor</title>
</head>
<body>
	<form action='../controladores/administrar_autor.php' method='post'>
	<table>
		<tr>
		<td>nombre:</td>
			<td><input type='text' name='nombre' value='<?php echo $libro->getnombre()?>'></td>
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