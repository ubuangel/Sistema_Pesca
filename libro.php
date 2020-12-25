<?php
	class Libro{
		private $id;
		private $precioVenta;
		private $modelo;
		private $marca;
		
		
		private $nombre;
		private $clave;
		private $direccion;
		private $privilegio;
		
 
		function __construct(){}
 
 		
 		
 		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}
 
		public function getprecioVenta(){
		return $this->precioVenta;
		}
 
		public function setprecioVenta($precioVenta){
			$this->precioVenta = $precioVenta;
		}
 
		public function getmarca(){
			return $this->marca;
		}
 
		public function setmarca($marca){
			$this->marca = $marca;
		}
 
		public function getmodelo(){
		return $this->modelo;
		}
 
		public function setmodelo($modelo){
			$this->modelo = $modelo;
		}
		
		
		
		
		
		

		
		public function getnombre() {
		    return $this->nombre;
		}
		public function setnombre($nombre) {
		    $this->nombre=$nombre;
		}
		
		public function getclave() {
		    return $this->clave;
		}
		public function setclave($clave) {
		    $this->clave=$clave;
		}
		public function getdirec() {
		    return $this->direccion;
		}
		public  function setdirec($direccion) {
		    $this->direccion=$direccion;
		}
		public function getpri() {
		    return $this->privilegio;
		}
		public  function setpri($privilegio) {
		    $this->privilegio=$privilegio;
		}
		
	}
	
	
	    
?>
