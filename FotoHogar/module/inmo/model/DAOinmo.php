<?php
// include("model/connect.php");
include("c:/xampp/htdocs/angela/FotoHogar/model/connect.php");
// die('<script>console.log('.json_encode( $path ) .');</script>');



class DAOinmo
{
	function insert_inmo($datos)
	{
		// die('<script>console.log('.json_encode( $datos ) .');</script>');

		$id_ref = $datos['id_ref'];
		$descripcion = $datos['descripcion'];
		$tipo = $datos['tipo'];
		$opcion = '';
		foreach ($datos['opcion'] as $indice) {
			$opcion = $opcion . "$indice:";
		}
		$m2 = $datos['m2'];
		$precio = $datos['precio'];
		$habs = $datos['habs'];
		$banyos = $datos['banyos'];
		$ascensor = $datos['ascensor'];
		$fecha = $datos['fecha'];
		$extras = '';
		foreach ($datos['extras'] as $indice) {
			$extras = $extras . "$indice:";
		}
		$gastos = '';
		foreach ($datos['gastos'] as $indice) {
			$gastos = $gastos . "$indice:";
		}

		$sql = "INSERT INTO inmuebles (id_ref, descripcion, tipo, opcion, m2, precio, habs, banyos, ascensor, fecha, extras, gastos)
        		VALUES ('$id_ref', '$descripcion', '$tipo', '$opcion', '$m2', '$precio', '$habs', '$banyos', '$ascensor', '$fecha', '$extras', '$gastos')";

		// die('<script>console.log('.json_encode( $sql ) .');</script>');
		$conexion = connect::con();
		$res = mysqli_query($conexion, $sql);
		connect::close($conexion);
		return $res;
	}

	function select_all_inmo()
	{
		// $data = 'hola DAO select_all_inmo';
		// die('<script>console.log('.json_encode( $data ) .');</script>');
		$sql = "SELECT * FROM inmuebles ORDER BY id ASC";

		$conexion = connect::con();
		$res = mysqli_query($conexion, $sql);
		connect::close($conexion);
		return $res;
	}

	function select_inmo($id)
	{
		// $data = 'hola DAO select_inmo';
		// die('<script>console.log('.json_encode( $data ) .');</script>');
		$sql = "SELECT * FROM inmuebles WHERE id=$id";

		$conexion = connect::con();
		$res = mysqli_query($conexion, $sql)->fetch_object();
		connect::close($conexion);
		return $res;
	}

	function update_inmo($datos)
	{
		// die('<script>console.log('.json_encode( $datos ) .');</script>');
		$id = $datos['id'];
		$id_ref = $datos['id_ref'];
		$descripcion = $datos['descripcion'];
		$tipo = $datos['tipo'];
		$opcion = '';
		foreach ($datos['opcion'] as $indice) {
			$opcion = $opcion . "$indice:";
		}
		$m2 = $datos['m2'];
		$precio = $datos['precio'];
		$habs = $datos['habs'];
		$banyos = $datos['banyos'];
		$ascensor = $datos['ascensor'];
		$fecha = $datos['fecha'];
		$extras = '';
		foreach ($datos['extras'] as $indice) {
			$extras = $extras . "$indice:";
		}
		$gastos = '';
		foreach ($datos['gastos'] as $indice) {
			$gastos = $gastos . "$indice:";
		}

		$sql = " UPDATE inmuebles SET descripcion='$descripcion', tipo='$tipo', opcion='$opcion', m2='$m2', precio='$precio', habs='$habs',
        		banyos='$banyos', ascensor='$ascensor', fecha='$fecha', extras='$extras', gastos='$gastos' WHERE id_ref='$id_ref'";

		$conexion = connect::con();
		$res = mysqli_query($conexion, $sql);
		connect::close($conexion);
		return $res;
	}

	function delete_inmo($id)
	{
		$sql = "DELETE FROM inmuebles WHERE id='$id'";

		$conexion = connect::con();
		$res = mysqli_query($conexion, $sql);
		connect::close($conexion);
		return $res;
	}

	function delete_all_inmo()
	{
		$sql = "DELETE FROM inmuebles";

		$conexion = connect::con();
		$res = mysqli_query($conexion, $sql);
		connect::close($conexion);

		return $res;
	}

	function dummies_inmo()
	{
		$sql = "DELETE FROM inmuebles;";

		$sql .= "INSERT INTO inmuebles (id_ref, descripcion, tipo, opcion, m2, precio, habs, banyos, ascensor, fecha, extras, gastos)
			VALUES ('1526A', 'Chalet en Madrid', 'Piso', 'Venta:', 120, 90000, 4, 2, 1, '10/12/2023', 'Piscina:Jardin:', 'Luz:Agua:Vado:'),
			 ('1527A', 'Piso en Barcelona', 'Casa', 'Alquiler:', 150, 150000, 5, 3, 0, '11/12/2023', 'Jardin:Trastero:', 'Luz:Agua:'),
			 ('1528A', 'Casa en Valencia', 'Casa', 'Nueva:', 100, 120000, 3, 2, 0, '10/12/2023', 'Jardin:Trastero:', 'Luz:Agua:Vado:'),
			 ('1523C', 'Local en Valencia', 'Local', 'Venta:', 250, 350000, 1, 1, 0, '15/12/2023', 'Calefaccion:', 'Luz:Agua:'),
			 ('5555A', 'Terreno en Alberic', 'Terreno', 'Compartir:', 1500, 75000, 0, 1, 0, '12/12/2022', 'Piscina:', 'Agua:'),
			 ('2356F', 'Chalet en Ontinyent', 'Casa', 'Alquiler:', 150, 360000, 4, 2, 0, '15/01/2024', 'Trastero:Calefaccion:', 'Luz:Agua:Vado:'),
			 ('5687J', 'Piso en Alcoy', 'Piso', 'Compartir:', 90, 500, 3, 2, 1, '14/01/2024', 'Calefaccion:', 'Agua:Basura:'),
			 ('8564M', 'Local en Ontinyent', 'Local', 'Venta:', 250, 35000, 1, 1, 0, '21/01/2024', 'Jardin:Calefaccion:', 'Luz:Agua:'),
			 ('6543K', 'Garaje en Valencia', 'Garaje', 'Venta:', 10, 30000, 0, 0, 1, '07/01/2024', 'Trastero:', 'Vado:')";

		// die('<script>console.log('.json_encode( $sql ) .');</script>');

		$conexion = connect::con();
		$res = mysqli_multi_query($conexion, $sql);
		connect::close($conexion);

		return $res;
	}


}
?>