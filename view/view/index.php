<?php

require_once"C:xampp/htdocs/restaurant/controller/pedidoControllers.php"

$pedidoController new PedidoController();

$validacion = (isset($_GET['op']) && !empty($_GET['op']));

    if($op=="listar"){
        $pedidoControllers->listar();
    }

    if($op=="agregar"){
        $pedidoControllers->agregar();
    }

    if($op=="agregarPaciente"){
        $mesa = $_POST['mesa'];
        $descripcion = $_POST['txtdescripcion'];
        
        $pedidoNuevo = new Pedido();
        
        $pacienteNuevo->setRut($mesa);
        $pacienteNuevo->setNombre($descripcion); 

        $pedidoControllers->agregarPedido($pedidoNuevo);
    }

    if($op=="eliminar"){
        $mesa = $_GET['mesa'];
        $pedidoControllers->eliminar($mesa);
    }
}





?>