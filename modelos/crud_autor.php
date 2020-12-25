<?php
// incluye la clase Db

//En el archivo crud_libro.php vamos a codificar las funciones CRUD para la tabla libros.
require_once('conexion.php');
 
	class CrudAutor{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo libro

		// método para mostrar todos los libros

		
		public function mostra(){
		    $db=Db::conectar();
		    $listaLibros=[];
		    $select=$db->query('SELECT * FROM Usuario');
		    
		    foreach($select->fetchAll() as $autor){
		        $myLibro= new Autor();
		        $myLibro->setnombre($autor['nombre']);
		        $myLibro->setclave($autor['clave']);
		        $myLibro->setdirec($autor['direccion']);
		        $myLibro->setpri($autor['privilegio']);
		        $listaLibros[]=$myLibro;
		    }
		    return $listaLibros;
		}
 
		// método para eliminar un libro, recibe como parámetro el id del libro
	
		
		public function elimina($nombre){
		    $db=Db::conectar();
		    $eliminar=$db->prepare('DELETE FROM Usuario WHERE nombre=:nombre');
		    $eliminar->bindValue('nombre',$nombre);
		    $eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
	
		
			public function obtenerA($nombre){
		    $db=Db::conectar();
		    $select=$db->prepare('SELECT * FROM Usuario WHERE nombre=:nombre');
		    $select->bindValue('nombre',$nombre);
		    $select->execute();
		    $autor=$select->fetch();
		    $myautor= new Autor();
		    $myautor->setnombre($autor['nombre']);
		    $myautor->setclave($autor['clave']);
		    $myautor->setdirec($autor['direccion']);
		    $myautor->setpri($autor['privilegio']);
		    return $myautor;
		}
		
		
 
		// método para actualizar un libro, recibe como parámetro el libro

		
			public function actualisa($autor){
		    $db=Db::conectar();
		    $actualisa=$db->prepare('UPDATE Usuario SET  nombre=:nombre,clave=:clave,direccion=:direccion ,privilegio=:privilegio WHERE nombre=:nombre');
		    $actualisa->bindValue('nombre',$autor->getnombre());
		    $actualisa->bindValue('clave',$autor->getclave());
		    $actualisa->bindValue('direccion',$autor->getdirec());
		    $actualisa->bindValue('privilegio',$autor->getpri());
		    $actualisa->execute();
		}
	}
?>
