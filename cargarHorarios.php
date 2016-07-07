<div class="row">
	      	<h2><i class="icon-cog"></i>  Horarios</h2>
	      	<div class="span12">
			
	      	<div class="widget">
			
			
			<div class="widget-header">
						
						<h3><ul class="nav nav-tabs">
						<li class="active"><a href="#calendario" data-toggle="tab">Calendario escolar</a></li>
						<li><a href="#horariosClases" data-toggle="tab">Horarios de clases</a></li>
                        <li><a href="#horariosETS" data-toggle="tab"> Horarios ETS</a></li>
						<li><a href="#horariosProfesores" data-toggle="tab"> Horarios Profesores</a></li>
					</ul></h3>
					</div> <!-- /widget-header -->
				<div class="widget-content">
			   
			   <div class="col-sm-10 col-sm-offset-1">
					
					<div class="tab-content">
						<div class="tab-pane fade in active" id="calendario">
							<div class="col-sm-6">
								<div class="status alert alert-success" style="display: none"></div>
								<form action="clases/subir.php" method="POST" enctype="multipart/form-data" name="">
										<h3>Calendario escolar oficial</h3><br>
										<p>Si cuenta con el archivo, elijalo aquí</p>
										<input type ="file" name="archivo[]" multiple="multiple">
										<p>En caso de no contar con el archivo, ingrese la URL aquí</p>
										<input type="text" placeHolder="http://www.ipn.mx/SiteCollectionDocuments/Calendario-IPN/Calendario15-16F.pdf" name="urlCalendario">
										<br>
								<button type="submit" class="btn btn-primary" class="trig">Subir</button> 
								</form> 
							</div>
						</div>
						
						
						<div class="tab-pane fade" id="horariosClases">
							<div class="col-sm-6">
												<div class="status alert alert-success" style="display: none"></div>
												<form action="clases/subir.php" method="POST" enctype="multipart/form-data" name="">
										<h3>Horarios de clases</h3><br>
										<p>Elija el nuevo archivo de horarios de clases del período</p>
										<input type ="file" name="archivo[]" multiple="multiple">
												<br>
								<button type="submit" class="btn btn-primary" class="trig">Subir</button> 
								</form> 
							</div>
						</div>
						
						<div class="tab-pane fade" id="horariosETS">
							<div class="col-sm-6">
												<div class="status alert alert-success" style="display: none"></div>
												<form action="clases/subir.php" method="POST" enctype="multipart/form-data" name="">
										<h3>Horarios de ETS</h3><br>
										<p>Elija el nuevo archivo de horarios de ETS</p>
										<input type ="file" name="archivo[]" multiple="multiple">
												<br>
								<button type="submit" class="btn btn-primary" class="trig">Subir</button> 
								</form> 
							</div>
						</div>
                        
						<div class="tab-pane fade" id="horariosProfesores">
							<div class="col-sm-6">
												<div class="status alert alert-success" style="display: none"></div>
												<form action="clases/subir.php" method="POST" enctype="multipart/form-data" name="">
										<h3>Horarios de profesores</h3><br>
										<p>Elija el nuevo archivo de horarios de profesores de la academia</p>
										<input type ="file" name="archivo[]" multiple="multiple">
												<br>
								<button type="submit" class="btn btn-primary" class="trig">Subir</button> 
								</form> 
							</div>
						</div>
						
					</div><!--div "tab-content"-->
				</div> <!--div "col-sm-10 offset 1"-->
			   
			   
			                   
                  
               
               </div> <!-- /widget content horarios-->
               
             </div><!-- /widget horarios -->
               
               
         </div>
         </div>      
	      	
	  	  <!-- /row -->