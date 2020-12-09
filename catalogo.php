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
        <div id="marca">
    </header>
    
    <section id="contenido">
    <h2>Catálogo</h2>

    <nav id="botonera_catalogo">   
<ul> 
<li><a href="catalogo.php?nom=Juego+comedor+completo&img=ipanema.jpg#catalogo"> Juego de comedor Ipanema </a></li>
<li><a href="catalogo.php?nom=Juego+living&img=sillon1.jpg#catalogo"> Juego de living  </a></li>
<li><a href="catalogo.php?nom=Juego+comedor+venecia&img=venecia.jpg#catalogo"> Juego de comedor Venecia </a></li>
</ul>
 </nav>  
 
<section>
<?php

if(isset($_GET['nom'])) {
         ?>
	  <div id="imagenes_muebles">  </div>
	  <img src= "imagenes/<?php echo $_GET['img']; ?>">
	   <div id="info_muebles">  
       <h3> <?php echo $_GET['nom']; ?> </h3> 
    
       <?php
        
    } ?>



    </div>


   </section>

   <div id="indice">
        <ul>
            <li><a href="index.php"> Ejercicio 1: Home</a></li>
            <li><a href="catalogo.php">Ejercicio 2: Sección catálago</a></li>
            <li><a href="contacto.php"> Ejercicio 3: Sección contacto</a></li>
            <li><a href="noticias.php">  Ejercicio 4: Noticias</a></li>
        </ul>

</div>
<section>
<footer>
Desarrollado por <a href="#" target="_new">Desarrollo web con PHP y Wordpress</a></footer>
</section>
</body>
</html>