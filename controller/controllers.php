<?php

require_once"C:/xampp/htdocs/restaurant/models/pedidos.php";

class PedidoController
{	
	 public $pedido;

    public function __construct()
    {
        $this->pedido = new Pedido();
    }

     public function listarPedido()
    {
        $pedido = $this->pedido->listar();
        
    }

      public function agregarPedido($pedidoNuevo)
    {
      $this->pedido->agregar($pedidoNuevo);
      $pedido = $this->pedido->listar();
     
    }

    public function eliminarPedido($rut)
    {
        $this->pedido->eliminar($rut);
        $pedido = $this->pedido->listar();
      
    }

    public function agregar()
    {
        include "view/mesa.php";

    }

}
