<!--widget avisos-->

		<?php include 'clases/conexion.php';
		$consulta= "SELECT titulo_slider, descripcion_slider, boton_slider, url_slider FROM slider";
		$resultado=mysqli_query($link,$consulta);  
		$i=0;
		while($fila = mysqli_fetch_row($resultado)){        
			$titulo[$i]=$fila[0];
			$descripcion[$i]=$fila[1];
			$boton[$i]=$fila[2];
			$url[$i]=$fila[3];
			$i++;
		}
		
		
		
			include 'clases/desconexion.php';
		?>
		
		
		


          <div class="widget" id="widget-avisos">
            <div class="widget-header"> <i class="icon-picture"></i>
              <h3> Sección de avisos</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            	<div class="col-sm-10 col-sm-offset-1">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#aviso1" data-toggle="tab"> Aviso 1</a></li>
						<li><a href="#aviso2" data-toggle="tab"> Aviso 2</a></li>
                        <li><a href="#aviso3" data-toggle="tab">Aviso 3</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="aviso1">
							<div class="span5">
												<div class="status alert alert-success" style="display: none"></div>
												<form id="slider-form" class="contact" name="slider-form" method="post" action="clases/actualizarSlide.php">
														<input type="hidden" name="id_slider" readonly ="readonly"value=1>
													<div class="form-group">
														<input type="text" name="titulo_slider" class="form-control name-field" required="required" placeholder="Titulo" value="<?php echo $titulo[0]?>"></div>
													<div class="form-group">
														<textarea name="contenido_slider"  required="required" class="form-control" rows="5" placeholder="Contenido" ><?php echo $descripcion[0]?></textarea>
													</div> 
													<div class="form-group">
														<input type="text" name="boton_slider" class="form-control mail-field" required="required" placeholder="Botón" value="<?php echo $boton[0]?>">
													</div> 
							
													<div class="form-group">
														<button type="submit" class="btn btn-primary" >Cambiar</button>
													</div>
													</form> 
							</div>
							<!--VISTA PREVIA
							<div class="span5">
							
								<div class="vistaPrevia" style="background-image: url(img/captura1.jpg)"> 
									
											<br>
											<h2 class="heading animated bounceInDown">Titulo prueba</h2> <br>
											<p class="animated bounceInUp">Descripcion prueba </p> <br>
											<a class="btn btn-default slider-btn animated fadeIn" href="#">boton prueba</a> 
									
									</div>
								<div>
								<button type="submit" class="btn btn-primary" >Mostrar</button>
								</div>
							</div>-->
						</div>
						
						
						<div class="tab-pane fade" id="aviso2">
							<div class="span5">
												<div class="status alert alert-success" style="display: none"></div>
												<form id="slider-form" class="contact" name="slider-form" method="post" action="clases/actualizarSlide.php">
														<input type="hidden" name="id_slider" readonly ="readonly" value=2>
													<div class="form-group">
														<input type="text" name="titulo_slider" class="form-control name-field" required="required" placeholder="Titulo" value="<?php echo $titulo[1]?>"></div>
													<div class="form-group">
														<textarea name="contenido_slider"  required="required" class="form-control" rows="5" placeholder="Contenido" ><?php echo $descripcion[1]?></textarea>
													</div> 
													<div class="form-group">
														<input type="text" name="boton_slider" class="form-control mail-field" required="required" placeholder="Botón" value="<?php echo $boton[1]?>">
													</div> 
							
													<div class="form-group">
														<button type="submit" class="btn btn-primary" >Cambiar</button>
													</div>
													</form> 
							</div>
							<!--VISTA PREVIA
							<div class="span5">
							
								<div class="vistaPrevia" style="background-image: url(img/captura1.jpg)"> 
									
											<br>
											<h2 class="heading animated bounceInDown">Titulo prueba</h2> <br>
											<p class="animated bounceInUp">Descripcion prueba </p> <br>
											<a class="btn btn-default slider-btn animated fadeIn" href="#">boton prueba</a> 
									
									</div>
								<div>
								<button type="submit" class="btn btn-primary" >Mostrar</button>
								</div>
							</div>-->
						</div>
						<div class="tab-pane fade" id="aviso3">
							<div class="span5">
												<div class="status alert alert-success" style="display: none"></div>
												<form id="slider-form" class="contact" name="slider-form" method="post" action="clases/actualizarSlide.php">
														<input type="hidden" name="id_slider" readonly ="readonly" value=3>
													<div class="form-group">
														<input type="text" name="titulo_slider" class="form-control name-field" required="required" placeholder="Titulo" value="<?php echo $titulo[2]?>"></div>
													<div class="form-group">
														<textarea name="contenido_slider"  required="required" class="form-control" rows="5" placeholder="Contenido" ><?php echo $descripcion[2]?></textarea>
													</div> 
													<div class="form-group">
														<input type="text" name="boton_slider" class="form-control mail-field" required="required" placeholder="Botón" value="<?php echo $boton[2]?>">
													</div> 
							
													<div class="form-group">
														<button type="submit" class="btn btn-primary" >Cambiar</button>
													</div>
													</form> 
							</div>
							<!--VISTA PREVIA
							<div class="span5">
							
								<div class="vistaPrevia" style="background-image: url(img/captura1.jpg)"> 
									
											<br>
											<h2 class="heading animated bounceInDown">Titulo prueba</h2> <br>
											<p class="animated bounceInUp">Descripcion prueba </p> <br>
											<a class="btn btn-default slider-btn animated fadeIn" href="#">boton prueba</a> 
									
									</div>
								<div>
								<button type="submit" class="btn btn-primary" >Mostrar</button>
								</div>
							</div>-->
							
						</div>
                        
					</div>
				</div>

            </div> <!-- /widget-avisos-content --> 
          </div> <!-- /widget avisos-->