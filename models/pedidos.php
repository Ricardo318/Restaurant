<?php

require_once "C:/xampp/htdocs/models/cnxbd.php";

class pedido{ 

private $mesa;
private $descripcion;

function __construct($mesa,$descripcion)
{
	$this ->mesa = $mesa;
	$this ->descripcion = $descripcion;
}

 public function getMesa()
    {
        return $this->mesa;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setMesa($mesa)
    {
        $this->mesa = $mesa;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    
    public function agregarPedido()
    {
    	 $mesa= $pedido->getMesa();
        $descripcion= $pedido->getDescripcion(); 

        $db= new DB();
        $sentencia=  $db->getConexion()->prepare("INSERT INTO pedidos (mesa,descripcion) VALUES (?,?)");
        $sentencia->bindParam(1,  $mesa);
        $sentencia->bindParam(2,  $descripcion);
      
        $sentencia->execute();
    }

    public function eliminarPedido(){
    
      $db= new DB();
        $sentencia =  $db->getConexion()->prepare("DELETE FROM pedidos WHERE mesa = ?");
        $sentencia->bindParam(1, $mesa);
        $sentencia->execute();
    
    }

    public function listarPedido()
   {
        $db= new DB();
        $sql = "SELECT * FROM pedidos";
        $sentencia = $db->getConexion()->prepare($sql);
        $sentencia->execute();
        $resultado= $sentencia->fetchAll();
        foreach ($resultado as $fila) { 
           $pedido= new Pedido();
           $pedido->setMesa($fila["mesa"]);
           $pedido->setDescripcion($fila["descripcion"]); 
         
           $pedidos[] =$pedido;
        }
        return $pedidos;
    
    }

















}
