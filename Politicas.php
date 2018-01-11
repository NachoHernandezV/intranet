<!DOCTYPE html>
<html lang="es">
<head>
  <title>Intranet</title>
  <meta charset="utf-8"/>
  <meta name="description" content="Intranet de Pirineos"/>
  <meta name="keywords" content="Intranet,HTML5,CSS3"/>
  <link rel="stylesheet" type="text/css" href="css/politicas.css">


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
          <blockquote class="cumpletitulo">Politicas</blockquote>
          <br>
      </header>

<!--Dirección General -->
<br>
      <p class="coloramarillo">Dirección General</p>
      <section class="blog">
      <section class="blog-items">

          <article class="item-blog">
            <img src="imagen/politicasD.png" alt="" width="220">
            <div class="description">
              <h3>Investigación y Desarrollo</h3>
            </div>
          </article>

          <article class="item-blog">
            <img src="imagen/politicasD.png" alt="" width="220">
            <div class="description">
              <h3>Planeación y Control</h3>
            </div>
          </article>

          <article class="item-blog">
            <img src="imagen/politicasD.png" alt="" width="220">
            <div class="description">
              <h3>Recepción</h3>
            </div>
          </article>
      </section>
      </section>


<!--DIRECCION ADMINISTRATIVA -->
<br><br><br><br>

      <p class="coloramarillo">Administración</p>
      <section class="blog">
      <section class="blog-items">

   		<article class="item-blog">
   			<img src="imagen/politicas.png" alt="" width="220">
   			<div class="description">
   				<h3>Activo Fijo</h3>
   			</div>
   		</article>

   		<article class="item-blog">
   			<img src="imagen/politicas.png" alt="" width="220">
   			<div class="description">
   				<h3>Almacen</h3>
   			</div>
   		</article>

   		<article class="item-blog">
   			<img src="imagen/politicas.png" alt="" width="220">
   			<div class="description">
   				<h3>Cedi</h3>
   			</div>
   		</article>

   		<article class="item-blog">
   			<img src="imagen/politicas.png" alt="" width="220">
   			<div class="description">
   				<h3>Compras</h3>
   			</div>
   		</article>

   		<article class="item-blog">
   			<img src="imagen/politicas.png" alt="" width="220">
   			<div class="description">
   				<h3>Contabilidad General</h3>
   			</div>
   		</article>

   		<article class="item-blog">
   			<img src="imagen/politicas.png" alt="" width="220">
   			<div class="description">
   				<h3>Credito y Cobranza</h3>
   			</div>
   		</article>

   		<article class="item-blog">
   			<img src="imagen/politicas.png" alt="" width="220">
   			<div class="description">
   				<h3>Cuentas por Pagar</h3>
   			</div>
   		</article>

   		<article class="item-blog">
   			<img src="imagen/politicas.png" alt="" width="220">
   			<div class="description">
   				<h3>Dirección Administrativa</h3>
   			</div>
   		</article>

   		<article class="item-blog">
   			<img src="imagen/politicas.png" alt="" width="220">
   			<div class="description">
   				<h3>Embarques</h3>
   			</div>
   		</article>

      <article class="item-blog">
   			<img src="imagen/politicas.png" alt="" width="220">
   			<div class="description">
   				<h3>Gestión de Personal</h3>
   			</div>
   		</article>

      <article class="item-blog">
        <a href="politicas/impuestos.pdf" target="_blank">
        <img src="imagen/politicas.png" alt="" width="220"></a>
        <div class="description">
          <h3>Impuestos</h3>
        </div>
      </article>

      <article class="item-blog">
        <img src="imagen/politicas.png" alt="" width="220">
        <div class="description">
          <h3>Ribera de Lerma</h3>
        </div>
      </article>

      <article class="item-blog">
        <img src="imagen/politicas.png" alt="" width="220">
        <div class="description">
          <h3>Seguridad Industrial</h3>
        </div>
      </article>

      <article class="item-blog">
        <a href="politicas/sistemas.pdf" target="_blank">
        <img src="imagen/politicas.png" alt="" width="220"></a>
        <div class="description">
          <h3>Sistemas</h3>
        </div>
      </article>

      <article class="item-blog">
        <img src="imagen/politicas.png" alt="" width="220">
        <div class="description">
          <h3>Tesoreria</h3>
        </div>
      </article>


   	</section>
  	</section>

<!--CALIDAD    CALIDADDDDD -->
<br><br><br><br>
      <p class="coloramarillo">Calidad</p>
      <section class="blog">
      <section class="blog-items">

          <article class="item-blog">
            <img src="imagen/politicasC.png" alt="" width="220">
            <div class="description">
              <h3>Seguridad Alimentaria</h3>
            </div>
          </article>

          <article class="item-blog">
            <img src="imagen/politicasC.png" alt="" width="220">
            <div class="description">
              <h3>Harinas Blancas</h3>
            </div>
          </article>

          <article class="item-blog">
            <img src="imagen/politicasC.png" alt="" width="220">
            <div class="description">
              <h3>Calidad</h3>
            </div>
          </article>

          <article class="item-blog">
            <img src="imagen/politicasC.png" alt="" width="220">
            <div class="description">
              <h3>Envase y Embalaje</h3>
            </div>
          </article>

          <article class="item-blog">
            <img src="imagen/politicasC.png" alt="" width="220">
            <div class="description">
              <h3>Microbiologia</h3>
            </div>
          </article>

          <article class="item-blog">
            <img src="imagen/politicasC.png" alt="" width="220">
            <div class="description">
              <h3>Asuntorios Regulatorios</h3>
            </div>
          </article>
      </section>
      </section>

      <!--Dirección de PLANTA -->
      <br><br><br><br>

            <p class="coloramarillo">Dirección de Planta</p>
            <section class="blog">
            <section class="blog-items">

                <article class="item-blog">
                  <img src="imagen/politicasP.png" alt="" width="220">
                  <div class="description">
                    <h3>Envansado</h3>
                  </div>
                </article>

                <article class="item-blog">
                  <img src="imagen/politicasP.png" alt="" width="220">
                  <div class="description">
                    <h3>Mantenimiento</h3>
                  </div>
                </article>

                <article class="item-blog">
                  <img src="imagen/politicasP.png" alt="" width="220">
                  <div class="description">
                    <h3>Molino</h3>
                  </div>
                </article>
                <article class="item-blog">
                  <img src="imagen/politicasP.png" alt="" width="220">
                  <div class="description">
                    <h3>Mixes</h3>
                  </div>
                </article>

                <article class="item-blog">
                  <img src="imagen/politicasP.png" alt="" width="220">
                  <div class="description">
                    <h3>Sanidad y Trigos</h3>
                  </div>
                </article>

            </section>
            </section>

            <!--Dirección de ventas -->
            <br><br><br><br>

                  <p class="coloramarillo">Ventas</p>
                  <section class="blog">
                  <section class="blog-items">

                      <article class="item-blog">
                        <img src="imagen/politicasV.png" alt="" width="220">
                        <div class="description">
                          <h3>Mercadotecnia</h3>
                        </div>
                      </article>

                      <article class="item-blog">
                        <img src="imagen/politicasV.png" alt="" width="220">
                        <div class="description">
                          <h3>Ventas Bajio</h3>
                        </div>
                      </article>

                      <article class="item-blog">
                        <img src="imagen/politicasV.png" alt="" width="220">
                        <div class="description">
                          <h3>Ventas Occidente</h3>
                        </div>
                      </article>

                  </section>
                  </section>



    </article>

  </section>

<br><br><br><br>
<footer id="pie">
  &copy; Script All rights reserved 2017 for Ing. Ignacio Hernandez
</footer>
</body>
</html>
