<?php
//incluye la clase Libro y CrudLibro
//Ahora creamos el archivo administrar_libro.php este archivo hará las funciones de un controlador, ya que procesará de acuerdo a la petición que le sea enviado desde la vista.
require_once('../modelos/crud_libro.php');
require_once('../libro.php');
 
$crud= new CrudLibro();//crear un  objeto de de tipo crud    para usar las funciones edfinidas en crud_libro 
$libro= new Libro();
$autor=new Autor();
 

	if(isset($_POST['actualizar'])){
		$libro->setId($_POST['id']);
		$libro->setmodelo($_POST['modelo']);
		$libro->setmarca($_POST['marca']);
		$libro->setprecioVenta($_POST['precioVenta']);
		$crud->actualizar($libro);
		header('Location: ../index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: ../index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}
	
	elseif (isset($_POST['actualisa'])){
	    $autor->setnombre($_POST['nombre']);
	    $autor->setclave($_POST['clave']);
	    $autor->setdirec($_POST['direccion']);
	    $autor->setpri($_POST['privilegio']);
	    $crud->actualisa($autor);
	    header('Location: ../index.php');
	    // si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif($_GET['accion']=='act'){
	    header('Location: actualisa.php');
	}
	elseif($_GET['accion']=='eli'){
	    $crud->elimina($_GET['nombre']);
	    
	    header('Location: ../index.php');
	    
	}
	
	
	elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>
