<!DOCTYPE html>
<html lang="es">
<head>
  <title>Intranet</title>
  <meta charset="utf-8"/>
  <meta name="description" content="Intranet de Pirineos"/>
  <meta name="keywords" content="Intranet,HTML5,CSS3"/>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

<?php  date_default_timezone_set('America/Monterrey');?>
</head>

<body>


<div id="agrupar">
  <header id="cabecera">
    <div id="fecha"><?php
        if( date("l")=="Monday")$dia="Lunes";
        if( date("l")=="Tuesday")$dia="Martes";
        if( date("l")=="Wednesday")$dia="Miercoles";
        if( date("l")=="Thursday")$dia="Jueves";
        if( date("l")=="Friday")$dia="Viernes";
        if( date("l")=="Saturday")$dia="Sabado";
        if( date("l")=="Sunday")$dia="Domingo";
        echo $dia."  " . date("d") . " / " . date("m") . " / " . date("Y");?>
    </div>
    <figure>
      <img src="imagen/logo.png">
      <figcaption>
        Harinera los Pirineos S.A de C.V
      </figcaption>
    </figure>
  </header>
  <nav id="menu">
    <ul>
      <li><a href="index.php"target="_seft">Inicio</a></li>
      <li><a href="politicas.php"target="_seft">Politicas</a></li>
      <li><a href="#">Rastreabilidad</a></li>
      <li><a href="#">Contactos</a></li>
    </ul>
  </nav>

  <section id="seccion">

    <article id="wowslider">
      <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
  	<div id="wowslider-container1">
  	<div class="ws_images"><ul>
  		<li><img src="data1/images/bakery.jpg" alt="bakery" title="bakery" id="wows1_0"/></li>
  		<li><img src="data1/images/flour.jpg" alt="flour" title="flour" id="wows1_1"/></li>
  		<li><img src="data1/images/flour2.jpg" alt="flour2" title="flour2" id="wows1_2"/></li>
  		<li><img src="data1/images/flour3.jpg" alt="flour3" title="flour3" id="wows1_3"/></li>
  		<li><img src="data1/images/flour4.jpg" alt="flour4" title="flour4" id="wows1_4"/></li>
  		<li><a href="http://wowslider.net"><img src="data1/images/flour5.jpg" alt="bootstrap slider" title="flour5" id="wows1_5"/></a></li>
  		<li><img src="data1/images/flour7.jpg" alt="flour7" title="flour7" id="wows1_6"/></li>
  	</ul></div>
  	<div class="ws_bullets"><div>
  		<a href="#" title="bakery"><span><img src="data1/tooltips/bakery.jpg" alt="bakery"/>1</span></a>
  		<a href="#" title="flour"><span><img src="data1/tooltips/flour.jpg" alt="flour"/>2</span></a>
  		<a href="#" title="flour2"><span><img src="data1/tooltips/flour2.jpg" alt="flour2"/>3</span></a>
  		<a href="#" title="flour3"><span><img src="data1/tooltips/flour3.jpg" alt="flour3"/>4</span></a>
  		<a href="#" title="flour4"><span><img src="data1/tooltips/flour4.jpg" alt="flour4"/>5</span></a>
  		<a href="#" title="flour5"><span><img src="data1/tooltips/flour5.jpg" alt="flour5"/>6</span></a>
  		<a href="#" title="flour7"><span><img src="data1/tooltips/flour7.jpg" alt="flour7"/>7</span></a>
  	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">image carousel</a> by WOWSlider.com v8.8</div>
  	<div class="ws_shadow"></div>
  	</div>
  	<script type="text/javascript" src="engine1/wowslider.js"></script>
  	<script type="text/javascript" src="engine1/script.js"></script>
  	<!-- End WOWSlider.com BODY section -->

    </article>

    <article id="primer_articulo">
      <header>
          <p>Efemerides del dia</p>
          <div>
              <?php
                if( date("l")=="Monday")$dia="Lunes";
                if( date("l")=="Tuesday")$dia="Martes";
                if( date("l")=="Wednesday")$dia="Miercoles";
                if( date("l")=="Thursday")$dia="Jueves";
                if( date("l")=="Friday")$dia="Viernes";
                if( date("l")=="Saturday")$dia="Sabado";
                if( date("l")=="Sunday")$dia="Domingo";
                echo "<p>".$dia."  " . date("d") . " / " . date("m") . " / " . date("Y")."</p>";
              ?>
          </div>
      </header>
      <div>
        <?php
        	 $link=mysqli_connect("localhost", "root", "pirineos", "cumpleanios");
           $mesydia="2017-".date("m")."-".date("d");
        	 $resultado=mysqli_query($link,"SELECT dato FROM efemerides where dia='".$mesydia."'");

        	 while($fila = mysqli_fetch_array($resultado))
        	 {
             echo "<table border='0'>";
              echo "<tr>";
        		    echo "<td>".$fila[dato]."<br>"."</td>";
              echo "</tr>";
              echo "</table>";
        	 }
         ?>
     </div>
      <footer>
          <p>Comentarios (0)</p>
      </footer>
    </article>

  </section>

  <aside id="columna">
    <blockquote id="cumpletitulo">Lista de cumplea&ntilde;eros</blockquote><br>

    <blockquote>
      <?php
      	 $link=mysqli_connect("localhost", "root", "pirineos", "cumpleanios");
      	 $resultado=mysqli_query($link,"SELECT Nombre, Apellido, Foto FROM empleados");

      	 while($fila = mysqli_fetch_array($resultado))
      	 {
           echo "<table border='0'>";
            echo "<tr>";
              echo "<td><img src='imagen/".$fila[Foto]."' alt='bakery' title='bakery'/> </td>";
      		    echo "<td>".$fila[Nombre]." ".$fila[Apellido]."<br>"."</td>";
            echo "</tr>";
            echo "</table>";
      	 }
       ?>
    </blockquote>


  </aside>

  <footer id="pie">
    &copy; Script All rights reserved 2017 for Ing. Ignacio Hernandez
  </footer>
</div>
</body>
</html>
