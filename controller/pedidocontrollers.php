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
        $pedido = $this->pedido->listarPedido();
        
    }

      public function agregarPedido($pedidoNuevo)
    {
      $this->pedido->agregarPedido($pedidoNuevo);
      $pedido = $this->pedido->listar();
     
    }

    public function eliminarPedido($mesa)
    {
        $this->pedido->eliminarPedido($mesa);
        $pedido = $this->pedido->listar();
      
    }

}
