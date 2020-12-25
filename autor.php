<?php 

class Autor{
	    private $nombre;
	    private $clave;
	    private $direccion;
	    private $privilegio;
	    
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