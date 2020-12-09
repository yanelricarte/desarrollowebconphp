<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Desarrollo web con PHP y Wordpress</title>
<link href="estilos.css" rel="stylesheet" type="text/css"/>
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
    <section id="contenido_contacto">
    <h2>Contáctenos</h2>

    <form method="POST" action="enviar_mensaje.php">
        <ul>
            <input type="text" name="nombre" placeholder="Nombre" required/></li>
            <input type="text" name="apellido" placeholder="Apellido" required/></li>
            <input type="email" name="correo" placeholder="Correo electrónico" required/></li>
            
            Motivo: <select name="motivo">
                <option value="consulta">Consulta</option>
                <option value="pedido">Pedido</option>
                <option value="reclamo">Reclamo</option>
            
            </select></li>
            
            Mensaje: <textarea name="mensaje" placeholder="Mensaje" rows="5"></textarea></li>
            
            <input type="submit" class= "boton_form" value="Enviar mensaje"/></li>
        </ul>
    </form>
 <?php
     if (isset ($_GET ['e']))  {
        echo "<h3> Mensaje enviado exitosamente </h3>";
        }
    ?>


    </section>    
    
    <div id="indice">
        <ul>
            <li><a href="index.php"> Ejercicio 1: Home</a></li>
            <li><a href="catalogo.php">Ejercicio 2: Sección catálago</a></li>
            <li><a href="contacto.php"> Ejercicio 3: Sección contacto</a></li>
            <li><a href="noticias.php">  Ejercicio 4: Noticias</a></li>
        </ul>

</div>


<footer>
Desarrollado por <a href="#" target="_new">Desarrollo web con PHP y Wordpress</a></footer>
</section>
</body>
</html>