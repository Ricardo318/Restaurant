<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pedido</title>
</head>
<body>

	<h1>Pedido</h1>
	<form action="index.php?op=agregarPedido" method="post">
	Mesa<select name="Mesa" id="Mesa">
		<option value="1">Seleccione una mesa</option>
		<option value="2">1</option>
		<option value="3">2</option>
		<option value="4">3</option>
		<option value="5">4</option>
		<option value="6">5</option>
		<option value="7">6</option>
		<option value="8">7</option>
		<option value="9">8</option>
		<option value="10">9</option>
		<option value="11">10</option>
		<option value="12">11</option>
		<option value="13">12</option>
		<option value="14">13</option>
		<option value="15">14</option>
		<option value="16">15</option>
		<option value="17">16</option>
		<option value="18">17</option>
		<option value="19">18</option>
		<option value="20">19</option>
		<option value="21">20</option>
	</select>
	<br><br><br>
    <label for="comentario">Descripcion</label>
      <textarea cols="35" rows="5" id="comentario" placeholder="ingrese pedido" name="comentario"></textarea> 
<br><br><br>
   
</form>
  <script>

	function alerta(){
		alert('pedido ingresado');
	}
</script>
		
		<form action="verpedido.php">
		<button type="submit">Ver Pedido</button>

		<button type="button" onclick="alerta()">Agregar</button>
		<br><br>
		<a href="menu.php">Volver</a>
</form>

</body>
</html>