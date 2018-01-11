<!DOCTYPE html>
<html lang="es">
<head>
  <title>Intranet</title>
  <meta charset="utf-8"/>
  <meta name="description" content="Intranet de Pirineos"/>
  <meta name="keywords" content="Intranet,HTML5,CSS3"/>
  <link rel="stylesheet" type="text/css" href="css/Directorio.css">


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
    </article>
    <br>
    <br>


    <article id="primer_articulo">
      <header>

          <br>
          <blockquote class="cumpletitulo">Numeros Telefonicos</blockquote>
          <br>
      </header>

<!--Dirección General -->
<br>


      <section class="blog">
        <form action="Directorio.php" method="post">
          <section class="blog-items">

                <article class="item-blog">
                  <img src="imagen/logo.png" alt="" width="220">
                  <div class="description">
                    <h3>Celulares</h3>
                  </div>
                </article>

                  <article class="item-blog2" >
                    <input  class="item-cajas"  type="text" placeholder="Ingrese el Nombre" name="cajanombre" id="cajanombre">
                  </article>

                  <article class="item-blog2" >
                    <input  class="item-cajas" type="text" placeholder="Ingrese el Apellido" name="cajaapellidos" id="cajaapellidos">
                  </article>

                  <article class="item-blog3" >
                    <button class="boton item-boton" name="buscar" id="Buscar">Buscar</button>
                  </article>

          </section>
     </form>
          <div class="consulta-php">
          <?php
            $cajanombre = $_POST['cajanombre'];
            $cajaapellidos = $_POST['cajaapellidos'];
            $Buscar= $_POST['Buscar'];

            $link=mysqli_connect("localhost", "root", "pirineos", "cumpleanios");

            if( empty($cajaapellidos) and !empty($cajanombre)){
            $sentencia="SELECT nombre,apellido,cell,puesto FROM celularespirineos where nombre like '%" .$cajanombre. "%'";
            }
            elseif(empty($cajanombre) and !empty($cajaapellidos)){
             $sentencia="SELECT nombre,apellido,cell,puesto FROM celularespirineos where apellido like '%".$cajaapellidos."%'";
              }
              else{
                $sentencia="SELECT nombre,apellido,cell,puesto FROM celularespirineos where nombre like '%" .$cajanombre. "%'or apellido like '%".$cajaapellidos."%'";
              }

            if(empty($cajanombre) and empty($cajaapellidos))
            {

            }
            else
            {
              $resultado=mysqli_query($link,$sentencia);
              echo "<table border='0'>";
               	 while($fila = mysqli_fetch_array($resultado))
               	 {
                     echo "<tr>";
                      echo "<td>".$fila[nombre]."&nbsp"."</td>";
                      echo "<td>".$fila[apellido]."&nbsp"."</td>";
                      echo "<td>".$fila[cell]."&nbsp"."</td>";
               		    echo "<td>".$fila[puesto]."<br>"."</td>";
                     echo "</tr>";

               	 }
              echo "</table>";
            }
          ?>
        </div>
      </section>


<br><br><br><br>
<!-- SEGUNDA AREA PARA BUSCAR ..... ES LA PARTE -->
<section class="blog">
  <form action="Directorio.php" method="post">
    <section class="blog-items">

          <article class="item-blog">
            <img src="imagen/moderna.png" alt="" width="220">
            <div class="description">
              <h3>Corporativo</h3>
            </div>
          </article>

            <article class="item-moder-blog2" >
              <input  class="item-moder-cajas"  type="text" placeholder="Ingrese el Nombre" name="moder-cajanombre" id="cajanombre">
            </article>

            <article class="item-moder-blog2" >
              <input  class="item-moder-cajas" type="text" placeholder="Ingrese el Apellido" name="moder-cajaapellidos" id="cajaapellidos">
            </article>

            <article class="item-moder-blog2" >
              <select class="item-moder-select" name="moder-area" id="moder-area">
                <option value="Seleccione" selected>Seleccione</option>
                <option value="Corporativo">Corporativo</option>
                <option value="Laboratorio PALM" >Laboratorio PALM</option>
                <option value="PALM Laredo">PALM Laredo</option>
                <option value="Pasta en Sobre">Pasta en Sobre</option>
                <option value="Finagil">Finagil</option>
              </select>
            </article>

            <article class="item-blog3" >
              <button class="boton item-moder-boton" name="buscar-moder" id="Buscar-moder">Buscar</button>
            </article>

    </section>
</form>
    <div class="consulta-php">
    <?php
      $cajanombre = $_POST['moder-cajanombre'];
      $cajaapellidos = $_POST['moder-cajaapellidos'];
      $Buscar= $_POST['Buscar-moder'];
      $Area=$_POST['moder-area'];

      $link=mysqli_connect("localhost", "root", "pirineos", "cumpleanios");

      if( empty($cajaapellidos) and !empty($cajanombre)){
      $sentencia="SELECT nombre,apellido,ext,extencion,numerodirecto,Area FROM telefonoscorporativo where nombre like '%" .$cajanombre. "%' and Area='".$Area."'";
      }
      elseif(empty($cajanombre) and !empty($cajaapellidos)){
       $sentencia="SELECT nombre,apellido,ext,extencion,numerodirecto,Area FROM telefonoscorporativo where apellido like '%".$cajaapellidos."%' and Area='".$Area."'";
        }
      elseif (empty($cajanombre) and empty($cajaapellidos) ) {
          $sentencia="SELECT nombre,apellido,ext,extencion,numerodirecto,Area FROM telefonoscorporativo where Area='".$Area."'";
        }
      else{
          $sentencia="SELECT nombre,apellido,ext,extencion,numerodirecto,Area FROM telefonoscorporativo where nombre like '%" .$cajanombre. "%'or apellido like '%".$cajaapellidos."%' and Area='".$Area."'";
        }


        $resultado=mysqli_query($link,$sentencia);
        if(!empty($resultado))
        {
          echo "<table border='0'>";
             while($fila = mysqli_fetch_array($resultado))
             {
                 echo "<tr>";
                  echo "<td>".$fila[nombre]."&nbsp"."</td>";
                  echo "<td>".$fila[apellido]."&nbsp"."</td>";
                  echo "<td>".$fila[ext]."&nbsp"."</td>";
                  echo "<td>".$fila[extencion]."&nbsp"."</td>";
                  echo "<td>".$fila[numerodirecto]."&nbsp"."</td>";
                  echo "<td>".$fila[Area]."<br>"."</td>";
                 echo "</tr>";

             }
          echo "</table>";
      }
    ?>
  </div>
</section>

<br><br><br><br>
<!-- TERCERA AREA DE SELECCION-->
 <section class="blog">
        <form action="Directorio.php" method="post">
          <section class="blog-items">

                <article class="item-blog">
                  <img src="imagen/moderna.png" alt="" width="220">
                  <div class="description">
                    <h3>Corporativo Palmillas</h3>
                  </div>
                </article>

                  <article class="item-blog2" >
                    <input  class="item-moderPalm-cajas"  type="text" placeholder="Ingrese el Nombre" name="cajanombrePalm" id="cajanombrePalm">
                  </article>

                  <article class="item-blog2" >
                    <input  class="item-moderPalm-cajas" type="text" placeholder="Ingrese el Apellido" name="cajaapellidosPalm" id="cajaapellidosPalm">
                  </article>

                  <article class="item-blog3" >
                    <button class="boton item-moder-boton" name="buscarPalm" id="BuscarPalm">Buscar</button>
                  </article>

          </section>
     </form>
          <div class="consulta-php">
          <?php
            $cajanombre = $_POST['cajanombrePalm'];
            $cajaapellidos = $_POST['cajaapellidosPalm'];
            $Buscar= $_POST['BuscarPalm'];

            $link=mysqli_connect("localhost", "root", "pirineos", "cumpleanios");

            if( empty($cajaapellidos) and !empty($cajanombre)){
            $sentencia="SELECT nombre,apellido,ext,numerodirecto FROM celularesPalm where nombre like '%" .$cajanombre. "%'";
            }
            elseif(empty($cajanombre) and !empty($cajaapellidos)){
             $sentencia="SELECT nombre,apellido,ext,numerodirecto FROM celularesPalm where apellido like '%".$cajaapellidos."%'";
              }
              else{
                $sentencia="SELECT nombre,apellido,ext,numerodirecto FROM celularesPalm where nombre like '%" .$cajanombre. "%'or apellido like '%".$cajaapellidos."%'";
              }

            if(empty($cajanombre) and empty($cajaapellidos))
            {

            }
            else
            {
              $resultado=mysqli_query($link,$sentencia);
              echo "<table border='0'>";
                 while($fila = mysqli_fetch_array($resultado))
                 {
                     echo "<tr>";
                      echo "<td>".$fila[nombre]."&nbsp"."</td>";
                      echo "<td>".$fila[apellido]."&nbsp"."</td>";
                      echo "<td>".$fila[ext]."&nbsp"."</td>";
                      echo "<td>".$fila[numerodirecto]."<br>"."</td>";
                     echo "</tr>";

                 }
              echo "</table>";
            }
          ?>
        </div>
      </section>


<br><br><br><br>
<footer id="pie">
  &copy; Script All rights reserved 2017 for Ing. Ignacio Hernandez
</footer>
</body>
</html>
