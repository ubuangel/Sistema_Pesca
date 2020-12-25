<?php
//incluye la clase Libro y CrudLibro



//obtiene todos los libros con el método mostrar de la clase crud

//incluye la clase Libro y CrudLibro
require_once('../modelos/crud_libro.php');
require_once('../libro.php');
$crud=new CrudLibro();
$li= new Libro();
//obtiene todos los libros con el método mostrar de la clase crud
$tuplas=$crud->mostra();

?>

 
<html>
<head>
	<meta charset="UTF-8">
  <link href="../app/estilos/principal.css" rel="stylesheet" type="text/css">
  <title> Lista de Usuarios</title>
  
</head>
<body>

 <?php include 'cabeceraPagina.html'; ?>
	<table border=1 align="center">
		<head>
			<td><font color="white">nombre</td>
			<td><font color="white">clave</td>
			<td><font color="white">direccion</td>
			<td><font color="white">privilegio</td>
		
		</head>
		
			
		<body>
			 
			<?php foreach ($tuplas as $li) {?>
			
			<tr>
				<td><font color="white"><?php echo $li->getnombre() ?></td>
				<td><font color="white"><?php echo $li->getclave()?></td>
				<td><font color="white"><?php echo $li->getdirec() ?></td>
				<td><font color="white"><?php echo $li->getpri()?></td>
				
				<td><a href="actualisa.php?nombre =<?php echo $li->getnombre()?>&accion=act">Actualizar</a></td>
				<td> <a href="../controladores/administrar_libro.php?nombre=<?php echo $li->getnombre()?>&accion=eli" > Eliminar</a></td>
			</tr>
			
			<?php }?>

		</body>
		
		</table>
		

	<a href="../index.php"  ><font color="white">Volver</a>
</body>
</html>
