<!DOCTYPE html>
<html lang="es">
<?php
session_start();
?>
<head>
  <title>Intranet</title>
  <meta charset="utf-8"/>
  <meta name="description" content="Intranet de Pirineos"/>
  <meta name="keywords" content="Intranet,HTML5,CSS3"/>
  <link rel="stylesheet" type="text/css" href="css/cumpleanios.css">


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




  <section id="seccion">

    <article id="fecha">
      <div>
          <?php
            if( date("l")=="Monday"){$dia="Lunes";$RestarPorDia=0;}
            if( date("l")=="Tuesday"){$dia="Martes";$RestarPorDia=1;}
            if( date("l")=="Wednesday"){$dia="Miercoles";$RestarPorDia=2;}
            if( date("l")=="Thursday"){$dia="Jueves";$RestarPorDia=3;}
            if( date("l")=="Friday"){$dia="Viernes";$RestarPorDia=4;}
            if( date("l")=="Saturday"){$dia="Sabado";$RestarPorDia=5;}
            if( date("l")=="Sunday"){$dia="Domingo";$RestarPorDia=6;}

            $fechaActual = date('Y-m-j');
            $nuevafecha = strtotime ( '-'.$RestarPorDia.' day' , strtotime ( $fechaActual ) ) ;
            $FechaInicio = date ( 'Y-m-j' , $nuevafecha );

            $nuevafecha = strtotime ( '+6 day' , strtotime ( $FechaInicio ) ) ;
            $FechaFin = date ( 'Y-m-j' , $nuevafecha );

            $FechaInicio = substr($FechaInicio, 8, 2); //2005-10-10
            $FechaFin = substr($FechaFin, 8, 2); //2005-10-10

            $_SESSION['FechaInicio'] = $FechaInicio;
            $_SESSION['FechaFin'] = $FechaFin;

            echo "<p class='actualfecha'>".$dia."  " . date("d") . " / " . date("m") . " / " . date("Y")."</p>";
          ?>
      </div>
    </article>
    <br>
    <br>


    <article id="primer_articulo">
      <header>

          <br>
          <blockquote class="cumpletitulo">Cumpleañeros</blockquote>
          <br>
      </header>

<!--Dirección General -->
<br>
      <p class="coloramarillo">Esta Semana</p>
      <section class="blog">

            <div class="blog-items">
                  <?php
                  function meses($mes)
                  {
                    $mesenletra=''; 
                    if($mes=='01')$mesenletra='Enero';
                     if($mes=='02')$mesenletra='Febrero';
                      if($mes=='03')$mesenletra='Marzo';
                       if($mes=='04')$mesenletra='Abril';
                        if($mes=='05')$mesenletra='Mayo';
                         if($mes=='06')$mesenletra='Junio';
                          if($mes=='07')$mesenletra='Julio';
                           if($mes=='08')$mesenletra='Agosto';
                            if($mes=='09')$mesenletra='Septiembre';
                             if($mes=='10')$mesenletra='Octubre';
                              if($mes=='11')$mesenletra='Noviembre';
                               if($mes=='12')$mesenletra='Diciembre';
                      return $mesenletra;
                  }
                  $link=mysqli_connect("localhost", "root", "pirineos", "cumpleanios");
                  $consulta="SELECT id,Nombre1,Nombre2,ApellidoMaterno,ApellidoPaterno,Foto,Nacimiento FROM empleados WHERE MONTH(Nacimiento) ='".date("m"). "' and DAY(Nacimiento) >= '".  $_SESSION['FechaInicio']."' and DAY(Nacimiento) <= '".$_SESSION['FechaFin']."'  order by DAY(Nacimiento) ASC";
                  
                  $resultado=mysqli_query($link,$consulta);

                    while($fila = mysqli_fetch_array($resultado))
                    {
                      $mes=substr($fila[Nacimiento], 5, 2); //2005-10-10
                      $dia=substr($fila[Nacimiento], 8, 2); //2005-10-10
                      echo  "<div class='item-blog'>";
                                  echo  "<img class ='fotoempleados' src='imagen/empleados/".$fila[id].".JPG' alt='No hay foto' id='fotoemp' onmouseover='fotoemp.src='imagen/logo.png'' onmouseout='fotoemp.src='imagen/empleados/".$fila[id].".JPG'' title='Foto' height='180'/> </td>";
                                  echo   "<div class='textBox'>";
                                  echo      "<h2>".$fila[Nombre1]." ".$fila[ApellidoPaterno]."</h2>";
                                   echo      "<h3 class='textBox2'>".$dia." de ".meses($mes)."</h3>";
                                  echo    "</div>";
                      echo  "</div>";
                   }

                  ?>
            </div>


      </section>


<!--CALIDAD    CALIDADDDDD -->
<br><br><br><br>
      <p class="coloramarillo">Proximos</p>
     
  <section class="blog">

            <div class="blog-items">
                  <?php
                  function meses2($mes)
                  {
                    $mesenletra=''; 
                    if($mes=='01')$mesenletra='Enero';
                     if($mes=='02')$mesenletra='Febrero';
                      if($mes=='03')$mesenletra='Marzo';
                       if($mes=='04')$mesenletra='Abril';
                        if($mes=='05')$mesenletra='Mayo';
                         if($mes=='06')$mesenletra='Junio';
                          if($mes=='07')$mesenletra='Julio';
                           if($mes=='08')$mesenletra='Agosto';
                            if($mes=='09')$mesenletra='Septiembre';
                             if($mes=='10')$mesenletra='Octubre';
                              if($mes=='11')$mesenletra='Noviembre';
                               if($mes=='12')$mesenletra='Diciembre';
                      return $mesenletra;
                  }
                  $link=mysqli_connect("localhost", "root", "pirineos", "cumpleanios");
                  $consulta="SELECT id,Nombre1,Nombre2,ApellidoMaterno,ApellidoPaterno,Foto,Nacimiento FROM empleados WHERE MONTH(Nacimiento) ='".date("m"). "' and DAY(Nacimiento) > '".  $_SESSION['FechaFin']."'  order by DAY(Nacimiento) ASC";
                  
                  $resultado=mysqli_query($link,$consulta);

                    while($fila = mysqli_fetch_array($resultado))
                    {
                      $mes=substr($fila[Nacimiento], 5, 2); //2005-10-10
                      $dia=substr($fila[Nacimiento], 8, 2); //2005-10-10
                      echo  "<div class='item-blog'>";
                                  echo  "<img class ='fotoempleados' src='imagen/empleados/".$fila[id].".JPG' alt='No hay foto' id='fotoemp' onmouseover='fotoemp.src='imagen/logo.png'' onmouseout='fotoemp.src='imagen/empleados/".$fila[id].".JPG'' title='Foto' height='180'/> </td>";
                                  echo   "<div class='textBox'>";
                                  echo      "<h2>".$fila[Nombre1]." ".$fila[ApellidoPaterno]."</h2>";
                                   echo      "<h3 class='textBox2'>".$dia." de ".meses2($mes)."</h3>";
                                  echo    "</div>";
                      echo  "</div>";
                   }

                  ?>
            </div>


      </section>





    </article>
  </section>

<br><br><br><br>
<footer id="pie">
  &copy; Script All rights reserved 2017 for Ing. Ignacio Hernandez
</footer>
</body>
</html>
