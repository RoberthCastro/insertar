
<?php

include("conexionpedidos.php");
 // include("http://localhost/nano/index.php/features/conexion/conexionpedidos.php");
include('fecha.php');
include('hora.php');
 // include('http://localhost/nano/index.php/features/hora/hora.php');
 //   include('http://localhost/nano/index.php/features/fecha/fecha.php');

$a=$_POST['email'];
$b=$_POST['name'];
$c=$_POST['years'];

// $a=$_POST['id'];
// $b=$_POST['nombre'];
// $c=$_POST['pelicula']; 
// echo"Variable a: ".$a;

//REGISTRA LOS DATOS DE CLIENTES NUEVOS


$query = "SELECT * FROM usuarios WHERE id='$a'";
$resulatado = mysql_query($query);
	//SI EL REGISTRO YA SE ENCUENTRA
	
	if ($registro = mysql_fetch_array($resulatado)) {

		echo $b." Su Pedido Ha Sido Un Exito!";

		// $hora = hora(); 
		// $fecha =fecha();

 	// 	$sql="INSERT INTO usuarios (id, nombres, apellidos, telefono, email, direccion, fecha, hora) VALUES ('$a','$b',$c,'@correo','0')";
		// mysql_query($sql,$var);

	}else {
		echo $b." Su Pedido Ha Sido Un Exito! <br>";
		echo "Acaba De Ser Registrado Como Cliente Nuevo";
		$hora = hora(); 
		$fecha =fecha();
 		$sql="INSERT INTO usuarios (id,nombres,apellidos,pelicula,telefono,email,direccion,fecha,hora) VALUES('$a','$b','apellidos', '$c','123','email','direccion','$fecha', '$hora')";
		mysql_query($sql,$var);
		// echo "Registrado!";

		
		
		// $insertarPagos = "INSERT INTO pagos SET nombre='$a',codigo='$c',descripcion='Cliente Nuevo',valor='0', fecha='$fecha', hora='$hora'";
		// $EjecutarInsertarPagos = mysql_query($insertarPagos,$var)or die(mysql_error());

}

?>