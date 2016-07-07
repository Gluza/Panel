
	<?php include 'conexion.php';
		$id=$_POST["id_slider"];
		$titulo=$_POST["titulo_slider"];
		$descripcion=$_POST["contenido_slider"];
		$boton=$_POST["boton_slider"];

		$consulta= "UPDATE slider SET titulo_slider='$titulo', descripcion_slider='$descripcion', boton_slider='$boton' WHERE id_slider='$id'";
			
	if(mysqli_query($link,$consulta)){
	
		echo "<script type='text/javascript'> alert('Se ha actualizado correctamente el aviso');window.location.href='../index.php';</script>";
		
		}
		else{
			echo "<script type='text/javascript'> alert('Ha habido un error actualizando los datos.');window.location.href='../index.php';</script>";
			}
		
		include 'desconexion.php';
			
		?>