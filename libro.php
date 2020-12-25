<?php
	class Libro{
		private $id;
		private $precioVenta;
		private $modelo;
		private $marca;
 
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
		
	}
	
	
	    
?>
