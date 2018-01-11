<!DOCTYPE html>
<html lang="es">
<head>
  <title>Intranet</title>
  <meta charset="utf-8"/>
  <meta name="description" content="Intranet de Pirineos"/>
  <meta name="keywords" content="Intranet,HTML5,CSS3"/>
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />--><!--Para el desarrollo web en celulares*/-->
  <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <!-- End WOWSlider.com HEAD section -->

<?php  date_default_timezone_set('America/Monterrey');?>
</head>

<body>



      <header id="cabecera">

        <figure class="logotipo">
          <img src="imagen/logo.png">
        </figure>

        <nav id="menu">
            <ul>
              <li><a target="_seft" href="index.php">Inicio</a></li>
              <li><a target="_seft" href="Politicas.php">Politicas</a></li>
              <li><a target="_seft" href="Directorio.php">Directorio</a></li>
              <li><a target="_seft" href="cumpleanios.php">Cumpleañeros</a></li>
              <li><a target="_seft" href="#">Contactos</a></li>
            </ul>
        </nav>

        <section >
          <h1 class="textprincipal">Intranet<h1>
        </section>
      </header>



<div id="agrupar">
  <section id="seccion">
    <div>
        <?php
          if( date("l")=="Monday")$dia="Lunes";
          if( date("l")=="Tuesday")$dia="Martes";
          if( date("l")=="Wednesday")$dia="Miercoles";
          if( date("l")=="Thursday")$dia="Jueves";
          if( date("l")=="Friday")$dia="Viernes";
          if( date("l")=="Saturday")$dia="Sabado";
          if( date("l")=="Sunday")$dia="Domingo";
          echo "<p class='actualfecha'>".$dia."  " . date("d") . " / " . date("m") . " / " . date("Y")."</p>";
        ?>
    </div>
    <br>
    <br>
            <article id="wowslider">
               <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
            <div id="wowslider-container1">
            <div class="ws_images"><ul>
              <li><img src="data1/images/bakery.jpg" alt="bakery" title="bakery" id="wows1_0"/></li>
              <li><img src="data1/images/flour.jpg" alt="flour" title="flour" id="wows1_1"/></li>
              <li><img src="data1/images/flour2.jpg" alt="flour2" title="flour2" id="wows1_2"/></li>
              <li><img src="data1/images/flour3.jpg" alt="flour3" title="flour3" id="wows1_3"/></li>
              <li><img src="data1/images/flour4.jpg" alt="flour4" title="flour4" id="wows1_4"/></li>
              <li><a href="http://wowslider.net"><img src="data1/images/flour5.jpg" alt="jquery image slider" title="flour5" id="wows1_5"/></a></li>
              <li><img src="data1/images/flour6.jpg" alt="flour6" title="flour6" id="wows1_6"/></li>
            </ul></div>
            <div class="ws_bullets"><div>
              <a href="#" title="bakery"><span><img src="data1/tooltips/bakery.jpg" alt="bakery"/>1</span></a>
              <a href="#" title="flour"><span><img src="data1/tooltips/flour.jpg" alt="flour"/>2</span></a>
              <a href="#" title="flour2"><span><img src="data1/tooltips/flour2.jpg" alt="flour2"/>3</span></a>
              <a href="#" title="flour3"><span><img src="data1/tooltips/flour3.jpg" alt="flour3"/>4</span></a>
              <a href="#" title="flour4"><span><img src="data1/tooltips/flour4.jpg" alt="flour4"/>5</span></a>
              <a href="#" title="flour5"><span><img src="data1/tooltips/flour5.jpg" alt="flour5"/>6</span></a>
              <a href="#" title="flour6"><span><img src="data1/tooltips/flour6.jpg" alt="flour6"/>7</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slideshow</a> by WOWSlider.com v8.8</div>
            <div class="ws_shadow"></div>
            </div>
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>
            <!-- End WOWSlider.com BODY section -->

           </article>

    <article id="primer_articulo">
      <header>

          <br>
          <blockquote class="coloramarillo">Efemerides</blockquote>
          <br>
      </header>
      <div class="efemerides">
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
    <section class="contenidocolumna1">
        <blockquote>
          <?php
            $fecha=date("y")."-".date("m")."-".date("d");
          	 $link=mysqli_connect("localhost", "root", "pirineos", "cumpleanios");
          	 $resultado=mysqli_query($link,"SELECT id, Nombre1,Nombre2,ApellidoPaterno,ApellidoMaterno,Foto,Nacimiento,Ingreso, ROUND (DATEDIFF('".$fecha."',Ingreso)/365) as duracionempleados FROM empleados where Ingreso like '%-".date("m")."-%'");

             /*INICIO DE LA TABLA*/
             echo "<p class='tabletitulo'>Aniversarios de Diciembre 2017</p>";
             echo "<table border='0' id='tableanirversary'>";

              $dia=date("d");

          	 while($fila = mysqli_fetch_array($resultado))
          	 {
               $primerquincena=substr($fila[Ingreso], -2);

               if($dia <=15 And $primerquincena <= 15) /*ESTE if y ELSE es para mostrar la mitad solamante y luego la otra mitad segun avanzen los dias*/
               {
                  echo "<tr>";
                    echo "<td ><img src='imagen/empleados/".$fila[id].".JPG' alt='No hay foto' title='Foto'/> </td>";
            		    echo "<td class='tablename'>".$fila[Nombre1]." ".$fila[ApellidoPaterno].""."</td>";
                    echo "<td class='tableanios'>".$fila[duracionempleados]." Años".""."</td>";
                    echo "<td  class='tablefecha'>".$fila[Ingreso].""."</td>";
                  echo "</tr>";
              }
               if($dia > 15 And  $primerquincena > 15) /*ESTE if y ELSE es para mostrar la mitad solamante y luego la otra mitad segun avanzen los dias*/
              {
                 echo "<tr>";
                   echo "<td><img src='imagen/empleados/".$fila[id].".JPG' alt='No hay foto' title='Foto'/> </td>";
                   echo "<td class='tablename'>".$fila[Nombre1]." ".$fila[ApellidoPaterno].""."</td>";
                   echo "<td class='tableanios'>".$fila[duracionempleados]." Años".""."</td>";
                   echo "<td class='tablefecha'>".$fila[Ingreso]."<br>"."</td>";
                 echo "</tr>";
              }
          	 }
            echo "</table>";
           ?>
       </blockquote>
   </section >

  </aside>

</div>
<footer id="pie">
  &copy; Script All rights reserved 2017 for Ing. Ignacio Hernandez
</footer>
</body>
</html>
