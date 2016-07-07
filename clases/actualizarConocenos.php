
	<?php include 'conexion.php';
		$titulo_conocenos=$_POST["titulo"];
		$texto=$_POST["texto_conocenos"];
		

		$consulta= "UPDATE conocenos SET texto_conocenos='$texto' WHERE titulo_conocenos='$titulo_conocenos'";
			
	if(mysqli_query($link,$consulta)){
	
		echo "<script type='text/javascript'> alert('Se ha actualizado correctamente el aviso');window.location.href='../index.php';</script>";
		
		}
		else{
			echo "<script type='text/javascript'> alert('Ha habido un error actualizando los datos.');window.location.href='../index.php';</script>";
			}
		
		include 'desconexion.php';
			
		?>