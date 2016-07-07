<!--widget conocenos-->

<?php include 'clases/conexion.php';
		$consulta= "SELECT texto_conocenos FROM conocenos";
		$resultado=mysqli_query($link,$consulta);  
		$i=0;
		while($fila = mysqli_fetch_row($resultado)){        
			$texto[$i]=$fila[0];
			$i++;
		}
		
		
		
			include 'clases/desconexion.php';
		?>



		<div class="widget" id="widget-conocenos">
            <div class="widget-header"> <i class="icon-eye-open"></i>
              <h3> Sección Conócenos</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            	<div class="col-sm-10 col-sm-offset-1">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#mision" data-toggle="tab"> Misión</a></li>
						<li><a href="#vision" data-toggle="tab"> Visión</a></li>
                        <li><a href="#presidencias" data-toggle="tab"> Presidencias</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="mision">
							<div class="media">
								<img class="pull-left media-object" width="150px"  src="images/conocenos/mision.png" alt="Misión"> 
								<div class="media-body">
								<form id="conocenos-form" class="contact" name="conocenos-form" method="post" action="clases/actualizarConocenos.php">
									<div> <input type="hidden" name="titulo" value="Misión"></div>
									<div><textarea name="texto_conocenos" id="mision_editable" class="form-control" rows="5" ><?php echo $texto[1];?></textarea></div>
									<div><button type="submit" class="btn btn-primary" >Cambiar</button></div>
								</form>
								</div>
								
							</div>
						</div>
						<div class="tab-pane fade" id="vision">
							<div class="media">
								<img class="pull-left media-object" width="150px"  src="images/conocenos/vision.png" alt="Visión"> 
								<div class="media-body">
									<form id="conocenos-form" class="contact" name="conocenos-form" method="post" action="clases/actualizarConocenos.php">
									<div> <input type="hidden" name="titulo" value="Visión"></div>
									<div><textarea name="texto_conocenos" id="vision_editable" class="form-control" rows="5" ><?php echo $texto[2];?></textarea></div>
									<div><button type="submit" class="btn btn-primary" >Cambiar</button></div>
								</form>
								</div>
								
							</div>
						</div>
						<div class="tab-pane fade" id="presidencias">
							<div class="media">
								<img class="pull-left media-object" width="150px"  src="images/conocenos/presidencias.png" alt="Comunidad"> 
								<div class="media-body">
								<form id="conocenos-form" class="contact" name="conocenos-form" method="post" action="clases/actualizarConocenos.php">
									<div> <input type="hidden" name="titulo" value="Presidencias"></div>
									<div><textarea name="texto_conocenos" id="presidencias_editable" class="form-control" rows="5" ><?php echo $texto[3];?></textarea></div>
									<div><button type="submit" class="btn btn-primary" >Cambiar</button></div>
								</form>
								
								</div>
							</div>
						</div>
                        
					</div>
				</div>

            </div><!--/widget-conocenos-content-->
          </div> <!-- /widget-conocenos--> 