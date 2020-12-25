<?php
// incluye la clase Db

//En el archivo crud_libro.php vamos a codificar las funciones CRUD para la tabla libros.
require_once('conexion.php');
 
	class CrudLibro{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo libro

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM Producto');
 
			foreach($select->fetchAll() as $libro){
				$myLibro= new Libro();
				$myLibro->setId($libro['id']);
				$myLibro->setmodelo($libro['modelo']);
				$myLibro->setmarca($libro['marca']);
				#$myLibro->setprecioVenta($libro['precioVenta']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}
		
		public function mostra(){
		    $db=Db::conectar();
		    $listaLibros=[];
		    $select=$db->query('SELECT * FROM Usuario');
		    
		    foreach($select->fetchAll() as $autor){
		        $myLibro= new Libro();
		        $myLibro->setnombre($autor['nombre']);
		        $myLibro->setclave($autor['clave']);
		        $myLibro->setdirec($autor['direccion']);
		        $myLibro->setpri($autor['privilegio']);
		        $listaLibros[]=$myLibro;
		    }
		    return $listaLibros;
		}
 
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM Producto WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		
		public function elimina($nombre){
		    $db=Db::conectar();
		    $eliminar=$db->prepare('DELETE FROM Usuario WHERE nombre=:nombre');
		    $eliminar->bindValue('nombre',$nombre);
		    $eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM Producto WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$libro=$select->fetch();
			$myLibro= new Libro();
			$myLibro->setId($libro['id']);
			$myLibro->setmodelo($libro['modelo']);
			$myLibro->setmarca($libro['marca']);
			$myLibro->setprecioVenta($libro['precioVenta']);
			return $myLibro;
		}
		
			public function obtenerA($nombre){
		    $db=Db::conectar();
		    $select=$db->prepare('SELECT * FROM Usuario WHERE nombre=:nombre');
		    $select->bindValue('nombre',$nombre);
		    $select->execute();
		    $autor=$select->fetch();
		    $myautor= new Libro();
		    $myautor->setnombre($autor['nombre']);//error  trying to access array offset on value of type bool in /home/angel/Git_Sistema_Web/eqson/modelos/crud_libro.php on line 83
		    $myautor->setclave($autor['clave']);
		    $myautor->setdirec($autor['direccion']);
		    $myautor->setpri($autor['privilegio']);
		    return $myautor;
		}
		
		
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE Producto SET  modelo=:modelo,marca=:marca ,precioVenta=:precioVenta WHERE ID=:id');
			$actualizar->bindValue('id',$libro->getId());
			$actualizar->bindValue('modelo',$libro->getmodelo());
			$actualizar->bindValue('marca',$libro->getmarca());
			$actualizar->bindValue('precioVenta',$libro->getprecioVenta());
			$actualizar->execute();
		}
		
			public function actualisa($libro){
		    $db=Db::conectar();
		    $actualisa=$db->prepare('UPDATE Usuario SET  clave=:clave,direccion=:direccion ,privilegio=:privilegio WHERE nombre=:nombre');
		    $actualisa->bindValue('nombre',$libro->getnombre());
		    $actualisa->bindValue('clave',$libro->getclave());
		    $actualisa->bindValue('direccion',$libro->getdirec());
		    $actualisa->bindValue('privilegio',$libro->getpri());
		    $actualisa->execute();
		}
	}
?>
