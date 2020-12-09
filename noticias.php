<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Desarrollo web con PHP y Wordpress</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	
            <nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li>
                <li><a href="catalogo.php">Catálogo</a></li>
                <li><a href="noticias.php">Noticias</a></li>
                <li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Desarrollo web con PHP y Wordpress</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Noticias</h2>

<nav id="botonera_noticias">   

    <ul>
        <li><a href="noticias.php?not1=¿Cómo+optimizar+imágenes+en+WordPress?&img=not1.jpg#botonera_noticias">¿Cómo optimizar imágenes en WordPress?</a></li>
        <li><a href="noticias.php?not2=Acerca+de+WordPress+y+Ripple+(XRP)&img=not2.jpg#botonera_noticias">Coil: “Ripple (XRP) y WordPress se integran </a></li>
        <li><a href="noticias.php?not3=WordPress+en+el+punto+de+mira&img=not3.jpg#botonera_noticias">WordPress en el punto de mira</a></li>
    </ul>

</nav>
   
   	 <?php
     if(isset($_GET['not1'])) {
         ?>
 
            <div id="texto_noticia">
    <?php
                if (isset ($_GET ["not1"])) {

                    echo ("<p>Las imágenes son en muchas ocasiones las causantes de que la web tarde más de la cuenta en cargar. Puede que si vas subiendo y subiendo imágenes sin control a tu web, no te compliques en buscar el mejor hosting para tu WordPress porque no lo hay. Por eso es de las tareas más importantes a la hora de optimizar esta plataforma en línea.</p>");   
               }
 	
        
    } ?>
        
		
        

 	 <?php
     if(isset($_GET['not2'])) {
         ?>
            
            <div id="texto_noticia">
                
                  <?php
                  if (isset ($_GET ["not2"])) {

                    echo ("<p>WordPress es un sistema de gestión de contenidos (CMS) que permite crear y mantener un blog u otro tipo de web.
Según una encuesta de W3techs en abril, más de un tercio de la web se publica utilizando el software WordPress.
Por su parte, Ripple es tanto una plataforma como una moneda. Entonces, la plataforma Ripple es un protocolo de código abierto que está diseñado para permitir transacciones rápidas.
Pero, Ripple (XRP) ha comenzado a romper el hielo en el mundo de los pagos globales. Lo más importante, el nuevo acuerdo de WordPress de Coil, podría ser un gran paso para avanzar en la causa de Blockchain funcional.</p>");   
                }

                     } ?>
     

 	 <?php
     if(isset($_GET['not3'])) {
         ?>
   
            <div id="texto_noticia">
                
                  <?php

                   if (isset ($_GET ["not3"])) {

                    echo ("<p>Con su configuración actual, el ataque persigue fundamentalmente dos objetivos. El fundamental consiste en intentar comprometer el acceso de un usuario que sea administrador de la instalación. Si lo consigue procederá, de inmediato, a descargar un archivo malicioso que empleará para crear una puerta trasera con la que el atacante podrá acceder al sistema. Para el resto de usuarios, se limitará a redirigirlos a scams online y otros contenidos maliciosos.</p>");   

                }
                ?>

    
            </div>
            
   
 <?php
        
   } ?>


 <div id="imagen_noticias"> 
 	<img src= "imagenes/<?php echo $_GET['img']; ?>">
    
  </div>
        
    

</article> 
  </section>
  <div id="indice">
        <ul>
            <li><a href="index.php"> Ejercicio 1: Home</a></li>
            <li><a href="catalogo.php">Ejercicio 2: Sección catálago</a></li>
            <li><a href="contacto.php"> Ejercicio 3: Sección contacto</a></li>
            <li><a href="noticias.php">  Ejercicio 4: Noticias</a></li>
        </ul>

</div>

</body>
<footer>
Desarrollado por <a href="#" target="_new">Desarrollo web con PHP y Wordpress</a></footer>
</section>

</html>