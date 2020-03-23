<?php

    $error = ""; $mensajeExito = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "Es obligatorio una dirección de email.<br>";
            
        }
        
        if (!$_POST["contenido"]) {
            
            $error .= "El contenido del mensaje es obligatorio.<br>";
            
        }
        
        if (!$_POST["asunto"]) {
            
            $error .= "El campo asunto del mensaje es obligatorio.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "Correo electrónico no válido.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>Hubo algún error en el formulario:</p>' . $error . '</div>';
            
        } else {
            
            $emailA = "refrigeracionavenida00@gmail.com";
            
            $asunto = $_POST['asunto'];
            
            $contenido = $_POST['contenido'];
            
            $cabeceras = "From: ".$_POST['email'];
            
            if (mail($emailA, $asunto, $contenido, $cabeceras)) {
                
                $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado con éxito, nos pondremos en contacto pronto!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>El mensaje no pudo ser enviado, por favor inténtalo más tarde</div>';
                
                
            }
            
        }
        
        
        
    }

?>

    <!DOCTYPE html>
<html lang="es">
<head>
  <meta name="msvalidate.01" content="DA32A8CA81BF8F01A669255DBC64D17D" />
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133916932-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133916932-1');
</script>
   
    <title>Contacto</title>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contacto.css">
<link rel="icon" href="imagenes/logo.jpg">
<meta name="google-site-verification" content="qPXAlGdflPbwGZ5iJTR3Ad4lzaEnZBGQGB5K9glnTME" />

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
    
<section id="cuerpo">

  <header>

<div id="logo">
        
    </div>
<nav class="nombre"><ul>
    <li class="destacado"><a href="index.php" class="destacado_00">REFRIGRACIÒN AVENIDA</a></li>
</ul>
        </nav>
 </header> 


 

 
<nav class="botonera"> 
                <ul>
    <li class="destacado"><a href="instalacion.php" class="destacado_1">INSTALACÍO</a></li>

    <li class="destacado"><a href="ventas.php" class="destacado_1">VENTAS</a></li>

    
    <li class="destacado"> <a href="mantenimiento.php" class="destacado_1">MANTENIMIENTO</a></li>

    <li class="destacado"> <a href="seguros.php" class="destacado_1">SEGUROS</a></li> 

    <li class="destacado"> <a href="contacto.php" class="destacado_1">CONTACTO</a></li> 
</ul>
    </nav>

    <section id="contenido">
    
    <nav class="redes"> 
    <ul>
	<li class="destacado"><a id="botonf" href="https://www.facebook.com/mariano.moragues.94"class="destacado_2"></a></li>

<li class="destacado"><a id="botonin" href="https://www.instagram.com/moraguesmariano/?hl=es-la" class="destacado_2"></a></li>

    <li class="destacado"><a id="botong"
     href="https://twitter.com/REFRIGERACONAV1" class="destacado_2"></a></li>
        
     <li class="destacado"><a id="botonm"
href="https://www.google.com.ar/maps/place/Av.+Domingo+Faustino+Sarmiento+1783,+San+Pedro,+Buenos+Aires/@-33.6878601,-59.6681115,16z/data=!4m5!3m4!1s0x95ba22d7cfc63e0d:0xa1a3ccc9ed6e785c!8m2!3d-33.6876344!4d-59.6659008" class="destacado_2"></a></li>    

     </ul>

</nav>
 

 <h2>CONTACTO</h2>

  <article class="contacto">

<div id="contacto">

<div id="contacto0"></div>

<div id="contacto1"><p>Local comercial<br> Av. Sarmiento 1783 San Pedro B Prov. De Bs As.</p></div>
</div>

<div id="telefono">

<div id="telefono0"></div>

<div id="telefono1"><p>Tel: (03329) 15578559 <br> Desde esta linea podes realizarnos consultas atrevas de llamadas, sms y  whatsapp.</p></div>
</div>

<div id="facebook">

<div id="facebook0"></div>

<div id="facebook1"><p>SEGUINOS</p>
<a  href="https://www.facebook.com/mariano.moragues.94"><p>facebook/refrigeracionavenida</p></a></div>
</div>

<div id="instagram">

<div id="instagram0"></div>

<div id="instagram1"><p>SEGUINOS</p>
<a href="https://www.instagram.com/moraguesmariano/?hl=es-la"><p>instagram/refrigeracionavenida</p></a></div>
</div>

<div id="google">

<div id="google0"></div>

<div id="google1"><p>SEGUINOS</p>
<a  href="https://www.yelp.com.ar/user_details?userid=Q9d9gembh4-vkGfdJt8Y7Q"><p>YELP/refrigeracionavenida</p></a></div>
</div>

<div id="blogger">

<div id="blogger0"></div>

<div id="blogger1"><p>SEGUINOS</p>
<a class="color" href="https://es.foursquare.com/user/531901831"><p>foursquare/refrigeracionavenida</p></a></div>
</div>

<div id="correo">

<div id="correo0"></div>

<div id="correo1"><p>ESCRÍBENOS</p>
<a  href="mailto:your@email.com"><p>refrigeracionavenidasp@hotmail.com</p></a></div>
</div>

</article>


</section>






<aside> 

<div id="horarios"><h3>HORARIOS COMERCIALES</h3>
    <p>
          Lunes a viernes
<br><br>
    Mañana de 08:30 hs a 12:30 hs
 <br><br>
     Tarde de 15:30 hs a 19:00 hs
<br></br>
               Sábados
<br></br>
    Mañana de 08:30 hs a 12:30 hs
 <br></br>
             Domingos
<br><br>
        CERRADOS </p></div>

<h4>DEJANOS TU CONSULTA</h4>
<div id="redondo">

   <div id="error"><? echo $error.$mensajeExito; ?></div>

      
      <div id="error"><? echo $error.$mensajeExito; ?></div>
      
      <form method="post">
                 
                  <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Nombre" >
            
                    <input type="email" class="form-control" id="email" name="email" placeholder="Introduce email">
         
       
                 
                  <input class="form-control" id="consulta" name="contenido" placeholder="Consulta" >
          
               <input class="btn" type="submit" >
      </form>


 
</div>
   
</aside>

<figcaption >ENCUENTRANOS EN <a href="https://www.google.com.ar/maps/place/Av.+Domingo+Faustino+Sarmiento+1783,+San+Pedro,+Buenos+Aires/@-33.6878601,-59.6681115,16z/data=!4m5!3m4!1s0x95ba22d7cfc63e0d:0xa1a3ccc9ed6e785c!8m2!3d-33.6876344!4d-59.6659008">GOOGLE MAPS</a></figcaption>


<article hidden><p>Reparación de lavarropas, reparación de aires acondicionado frio calor, cámaras frigoríficas, aires portátiles, aires de ventana, climatizadores centrales, heladeras, heladeras mostradoras, equipos de refrigeración, arreglos, reparación, en san pedro, provincia de buenos aires, argentina, venta de aires acondicionado y lavarropas, compra de aires acondicionado y lavarropas, venta de repuestos de aireas acondicionado y lavarropas, carga de gas refrigerante, venta de bombas de agua de lavarropas, venta de motor de lavarropa y aire acondicionado, venta de correas de lavarropas, ventas de cámaras frigoríficas, ventas de heladeras, venta de secarropa, instalación de  lavarropas y aires acondicionado, lavarropas y aires acondicionado,.</p></article>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.8236618384276!2d-59.66808948418152!3d-33.687629917111124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95ba22d7cfc63e0d%3A0xa1a3ccc9ed6e785c!2sAv.+Domingo+Faustino+Sarmiento+1783%2C+San+Pedro%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1547393663036"  frameborder="0" style="border:0" allowfullscreen></iframe>


<section id="marcas">

    
<div id="marcastexto1"><p>
ALGUNAS DE LAS MARCAS CON LAS QUE TRABAJAMOS</p></div>

<div id="marcastexto2"><P>STOCK PERMANENTE</P></div>

<div id="marcastexto3"><P>PRODUCTOS CON GARANTÍA DE FABRICA</P></div>   .


<div id="marcas_imagenes1"></div>
    
<div id="marcas_imagenes2"></div>

<div id="marcas_imagenes3"></div>

<div id="marcas_imagenes4"></div>
    
<div id="marcas_imagenes5"></div>

<div id="marcas_imagenes6"></div>

</section>




    <footer>

        <div id="pie">  
            <div id="informe_pie">
                <p>
                    © Refrigeración Avenida Av. Sarmiento 1783 San Pedro B Prov. De Bs As.<br><br> Tel: (03329) 15578559 
                </p>
       </div>
<div id="mediosdepago" >
<div id="mediosdepago_parrafo"><p>Medios de pago</p>

<div id="efectivo"></div>   

<div id="visa"></div>

<div id="mastercard"></div>

<div id="pagomaestro"></div>

</div>  
    </div>
        
</div>
            
</footer>

</section>
</body>
</html>