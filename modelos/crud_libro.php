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
		

 
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM Producto WHERE ID=:id');
			$eliminar->bindValue('id',$id);
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
		
	
	}
?>
