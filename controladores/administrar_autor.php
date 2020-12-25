<?php
//incluye la clase Libro y CrudLibro
//Ahora creamos el archivo administrar_libro.php este archivo hará las funciones de un controlador, ya que procesará de acuerdo a la petición que le sea enviado desde la vista.
require_once('../modelos/crud_autor.php');
require_once('../autor.php');
 
$crud= new CrudAutor();//crear un  objeto de de tipo crud    para usar las funciones edfinidas en crud_libro 

$autor=new Autor();
 

	if(isset($_POST['actualisa'])){
		$autor->setnombre($_POST['nombre']);
		$autor->setclave($_POST['clave']);
		$autor->setdirec($_POST['direccion']);
		$autor->setpri($_POST['privilegio']);
		$crud->actualisa($autor);
		header('Location: ../index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}
	elseif($_GET['accion']=='act'){
	    header('Location: actualisa.php');
	}
	elseif($_GET['accion']=='eli'){
	    $crud->elimina($_GET['nombre']);
	    
	    header('Location: ../index.php');
	    
	}
	

?>
