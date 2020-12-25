<?php 
function obtenerPro(){
    include '../app/dbConexion.php';

try{
    
 return $pdo->query("select id,marca ,modelo especificaciones,precioFabrica,precioVenta,stock,descripcion from Producto");
    }catch(Exception $e){

    echo "Error!!".$e->getMessage()."<br>";
    return false;

    }
}


