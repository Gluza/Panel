<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<body>
<?php include 'header.php';?>

<!-- Menu de navegación-->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.php"><i class="icon-edit"></i><span>Página Principal</span> </a> </li>
        <li><a href="reports.php"><i class="icon-file"></i><span>Archivos</span> </a> </li>
        <li><a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li>
        <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
        <li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="icons.html">Icons</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing Plans</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li> 
            <li><a href="error.html">404</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<!-- Fin Menu de navegación-->

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
       
        <!-- /span6 -->
        <div class="span">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts"> 
					<a href="#widget-avisos" class="shortcut"><i class="shortcut-icon icon-picture"></i> <span class="shortcut-label">Avisos generales</span> </a>
                    <a href="#widget-conocenos" class="shortcut"><i class="shortcut-icon icon-eye-open"></i><span class="shortcut-label">Conocenos</span> </a>
					<a href="#widget-oferta" class="shortcut"><i class="shortcut-icon icon-paperclip"></i><span class="shortcut-label">Oferta académica</span> </a>
					<a href="#widget-horarios" class="shortcut"><i class="shortcut-icon icon-time"></i> <span class="shortcut-label">Horarios</span> </a>
					<a href="#widget-estudiantes" class="shortcut"><i class="shortcut-icon icon-group"></i><span class="shortcut-label">Estudiantes</span> </a>
					<a href="#widget-contacto" class="shortcut"><i class="shortcut-icon icon-envelope-alt"></i><span class="shortcut-label">Contacto</span> </a>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
		  
		  

        <?php include 'widget-avisos.php';?>
		<?php include 'widget-conocenos.php';?>
		<?php include 'widget-oferta.php';?>
		<?php include 'widget-horarios.php';?>
		<?php include 'widget-estudiantes.php';?>  
		<?php include 'widget-contacto.php';?>  
		
			
	<?php include 'extra.php';?>


	<?php include 'footer.php';?>


<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 

<?php include 'scriptCalendario.php';?> 

</body>
</html>
