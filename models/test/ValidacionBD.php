<?php

    require "Conexion.php";
	session_start();
	
	if($_POST){
		
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		
		$sql = "SELECT id, password, nombre, tipo_usuario FROM usuario where usuario='$usuario'";
		$resultado = $mysqli -> query($sql);
		
		echo $sql;
		
		$num = $resultado -> num_rows;
		
		if($num>0){
			$row = $resultado -> fetch_assoc();
			$password_bd = $row['password'];
			
			$pass_c = sha1($password);
		
			if($password_bd == $pass_c){
			
				$_SESSION['id'] = $row['id'];
				$_SESSION['nombre'] = $row['nombre'];
				$_SESSION['tipo_usuario'] = $row['tipo_usuario'];
				
			header("Location: principalAdmin.php");
			}else{
			
				echo "La contraseña no coincide";
			
			}
		}else{
			echo "No existe usuario";	
		}
	}
?>