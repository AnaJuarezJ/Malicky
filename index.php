<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"/>
    <title>Recicladora Comercial Malicky</title>
</head>
<body>

  <!-- HEADER -->
<header tabindex="0">
  <a href="./index.html"><img src="./assets/logom.png" alt="Logo" class="logo"></a>
    RECICLADORA COMERCIAL MALICKY
</header>

<!-- NAV -->
<div id="nav-container">
    <div class="bg"></div>
    <div class="button" tabindex="0">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </div>
    <div id="nav-content" tabindex="0">
      <ul>
        <li><a href="./index.html">Inicio</a></li>
        <li><a href="./index.html#about">Acerca de nosotros</a></li>
        <li><a href="./index.html#services">Servicios</a></li>
        <li><a href="./index.html#contact_form">Contáctanos</a></li>
        <li class="small"><a href="mailto:recicladoracomercialmalicky@gmail.com"><i class="fas fa-envelope"></i> recicladoracomercialmalicky@gmail.com</a></li>
        <li class="small"><a href="tel:+524446522670"><i class="fas fa-phone"></i> +52 444 652 2670</a></li>
  
      </ul>
    </div>
</div>

<!-- SLIDER -->
<div class="slider-container">
    <div class="slider-wrapper">
        <div class="slide"><img src="./assets/reciclaje.png" alt="Slide 1"><div class="caption"><a href="./index.html#reciclaje">Reciclaje y Gestión de Residuos</a></div></div>
        <div class="slide"><img src="./assets/transaccion.png" alt="Slide 2"><div class="caption"><a href="./index.html#transaccion">Transacciones de Bienes</a></div></div>
        <div class="slide"><img src="./assets/industria.jpeg" alt="Slide 3"><div class="caption"><a href="./index.html#industria">Industria y Comercio de Equipos y Materiales</a></div></div>
        <div class="slide"><img src="./assets/participacion.jpg" alt="Slide 4"><div class="caption"><a href="./index.html#participacion">Participación en Sociedades</a></div></div>
        <div class="slide"><img src="./assets/financiera.png" alt="Slide 5"><div class="caption"><a href="./index.html#financiera">Actividades Financieras y de Valores</a></div></div>
        <!-- Agrega más slides según sea necesario -->
    </div>
    <div class="arrow arrow-left" onclick="prevSlide()">&#10094;</div>
    <div class="arrow arrow-right" onclick="nextSlide()">&#10095;</div>
    <div class="dots" id="dots-container"></div>
</div>

<!-- ABOUT -->
<div id="about" class="about-container">
  <section class="about-section">
    <div class="content">
      <h2>Acerca de <span>nosotros</span></h2>

      <p>En <span>Recicladora Comercial Malicky</span>, nos enorgullece presentarnos como líderes en la industria de la compraventa de chatarra, papel y desperdicios industriales. Fundada con un firme compromiso con la sostenibilidad y la excelencia operativa, nuestra empresa ha evolucionado para convertirse en un referente en el ámbito de la gestión de residuos y la promoción de prácticas empresariales responsables. Somos reconocidos por nuestra búsqueda constante de la eficiencia operativa y la calidad en todos los aspectos de nuestro negocio. Desde la importación de maquinaria especializada hasta la logística de transporte y los servicios de limpieza, cada actividad está respaldada por estándares rigurosos que reflejan nuestro compromiso con la excelencia. Operamos con transparencia y total adherencia a las leyes y regulaciones aplicables en todas nuestras transacciones. La emisión, suscripción, aceptación y negociación de títulos y valores mobiliarios se realiza cumpliendo con los estándares legales correspondientes, garantizando así la confianza de nuestros clientes y socios comerciales. Nuestra historia y trayectoria están marcadas por una dedicación inquebrantable hacia la sostenibilidad, la eficiencia y la integridad. Invitamos a todos a ser parte de nuestro compromiso continuo de construir un futuro más limpio y sostenible para las generaciones venideras.</p>
    </div>
  </section>


  <div class="mission-vision">
    <section id="vision" class="vision-section">
      <div class="content">
        <h2><span>V</span>isión</h2>
        <p>Además de nuestra experiencia en la compraventa de residuos, participamos en la diversificación de operaciones. Desde la adquisición y enajenación de bienes muebles e inmuebles hasta la producción, distribución y comercialización de maquinaria, nos esforzamos por adaptarnos a las cambiantes necesidades del mercado, manteniendo siempre nuestro compromiso con la innovación y la adaptabilidad. Nuestra visión es clara: liderar la transformación hacia un mundo más limpio y sostenible.</p>
      </div>
    </section>

    <section id="mision" class="mission-section">
      <div class="content">
        <h2><span>M</span>isión</h2>
        <p>Somos más que una empresa; somos agentes del cambio comprometidos con la preservación del medio ambiente. En Recicladora Comercial Malicky, adoptamos la misión de contribuir al ciclo de economía circular, transformando lo que algunos consideran desechos en valiosos recursos. Nos esforzamos por ser pioneros en prácticas sostenibles, desde la compraventa de materiales reciclables hasta la importación de maquinaria de vanguardia que maximiza la eficiencia en la gestión de residuos.</p>
      </div>
    </section>
  </div>
</div>

<!-- SERVICIOS -->
<section id="services" class="about-container">
<br>
<br>
<h2> Nuestros  <span>servicios</span></h2> <br>
<div id="reciclaje" class="blog-card">
  <div class="meta">
    <div class="photo" style="background-image: url(./assets/reciclaje.png)"></div>
    <ul class="details">
      <li class="author">Compraventa de chatarra, papel y desperdicios industriales.</li>
      <li class="date">Importación de maquinaria para el reciclaje.</li>
      <li class="date">Transporte de materiales reciclables propios.</li>
      <li class="date">Servicios de limpieza en general.</li>
    </ul>
  </div>
  <div class="description">
    <h1>Reciclaje y Gestión de Residuo</h1>
    <h2>Productos</h2>
    <p>La empresa se dedica a la compraventa de materiales reciclables como chatarra, papel y desperdicios industriales. Además, ofrece servicios de transporte para sus propios materiales reciclables y servicios de limpieza en general, posiblemente relacionados con la gestión de residuos.</p>
  </div>
</div>

<div id="transaccion" class="blog-card alt">
  <div class="meta">
    <div class="photo" style="background-image: url(./assets/transaccion.png)"></div>
    <ul class="details">
      <li class="author">Compra, venta, importación y exportación de bienes muebles e inmuebles.</li>
    </ul>
  </div>
  <div class="description">
    <h1>Transacciones de Bienes</h1>
    <h2>Productos</h2>
    <p>La compañía se especializa en la transacción de bienes, abarcando la compra, venta, importación y exportación de bienes muebles e inmuebles. Está involucrada en actividades relacionadas con la propiedad y transacciones comerciales de diversa índole.</p>
  </div>
</div>

<div id="industria" class="blog-card">
  <div class="meta">
    <div class="photo" style="background-image: url(./assets/industria.jpeg)"></div>
    <ul class="details">
      <li class="author">Producción, distribución, comercialización, renta, importación y exportación de maquinaria, equipo y materiales.</li>
    </ul>
  </div>
  <div class="description">
    <h1>Industria y Comercio de Equipos y Materiales</h1>
    <h2>Productos y servicios</h2>
    <p>La empresa se dedica a la producción, distribución, comercialización, renta, importación y exportación de maquinaria, equipo y materiales. Su enfoque está en la industria y el comercio de productos y herramientas especializadas.</p>
  </div>
</div>

<div id="participacion" class="blog-card alt">
  <div class="meta">
    <div class="photo" style="background-image: url(./assets/participacion.jpg)"></div>
    <ul class="details">
      <li class="author">Promoción, constitución, organización, exportación y administración de diversas sociedades mercantiles.</li>
    </ul>
  </div>
  <div class="description">
    <h1>Participación en Sociedades</h1>
    <h2>Servicios</h2>
    <P>La compañía tiene un rol activo en la promoción, constitución, organización, exportación y administración de diversas sociedades mercantiles. Participa en la gestión y desarrollo de negocios en diferentes sectores.</P>
  </div>
</div>

<div id="financiera" class="blog-card">
  <div class="meta">
    <div class="photo" style="background-image: url(./assets/financiera.png)"></div>
    <ul class="details">
      <li class="author">Emisión, suscripción, aceptación, endoso, aval o negociación de títulos o valores mobiliarios, con autorización legal correspondiente.</li>
    </ul>
  </div>
  <div class="description">
    <h1>Actividades Financieras y de Valores</h1>
    <h2>Servicios</h2>
    <p>La empresa se involucra en actividades financieras, incluyendo la emisión, suscripción, aceptación, endoso, aval o negociación de títulos o valores mobiliarios, siempre con la debida autorización legal. Participa en los mercados financieros para obtener recursos lucrativos, ya sea por cuenta propia o ajena.</p>
  </div>
</div>

</section>

<!-- CONTACTANOS -->
<a href="./index.html#contact_form" class="btn-flotante"><i class="fas fa-envelope"></i> CONTÁCTANOS</a>

<div id="contact_form" class="contact_form">
  <div class="formulario">      
    <h1>Contáctanos</h1>
    <small>Escríbenos y en breve nos pondremos en contacto contigo</small>
    
    <form action="submeter-formulario.php" method="post" accept-charset="UTF-8">
      <div class="input_container">
        <label for="nombre" class="colocar_nombre">Nombre <span class="obligatorio">*</span></label>
        <input type="text" name="introducir_nombre" id="nombre" required placeholder="Escribe tu nombre">
      </div>

      <div class="input_container">
        <label for="email" class="colocar_email">Email <span class="obligatorio">*</span></label>
        <input type="email" name="introducir_email" id="email" required placeholder="Escribe tu Email">
      </div>

      <div class="input_container">
        <label for="telefono" class="colocar_telefono">Teléfono</label>
        <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
      </div>    

      <div class="input_container">
        <label for="asunto" class="colocar_asunto">Asunto <span class="obligatorio">*</span></label>
        <input type="text" name="introducir_asunto" id="asunto" required placeholder="Escribe un asunto">
      </div>    

      <div class="input_container">
        <label for="mensaje" class="colocar_mensaje">Mensaje <span class="obligatorio">*</span></label>
        <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required placeholder="Deja aquí tu comentario..."></textarea> 
      </div>

      <button type="submit" name="enviar_formulario" id="enviar_formulario"><p>Enviar</p></button>

      <p class="aviso">
        <span class="obligatorio"> * </span>Los campos son obligatorios.
      </p>          
    </form>
  </div>  
</div>




<!-- Site footer -->
<footer id="footer" class="site-footer">
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Acerca de nosotros</h6>
            <p class="text-justify"><i>Recicladora Comercial Malick</i>, lidera la gestión sostenible de recursos con especialización en compraventa de chatarra y papel. Destacamos en transacciones de bienes, importación/exportación de equipos, y participación en sociedades comerciales. Nos distingue nuestro compromiso ético y ambiental, respaldado por actividades financieras autorizadas. Construimos un futuro responsable y exitoso, ofreciendo soluciones integrales y productos de calidad.<br> <a href="RecicladoraComercialMalick.com">RecicladoraComercialMalick.com</a> </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Servicios</h6>
            <ul class="footer-links">
            <li><a href="./index.html#reciclaje">Reciclaje y Gestión de Residuos</a></li>
              <li><a href="./index.html#transaccion">Transacciones de Bienes</a></li>
              <li><a href="./index.html#industria">Industria y Comercio de Equipos y Materiales</a></li>
              <li><a href="./index.html#participacion">Participación en Sociedades</a></li>
              <li><a href="./index.html#financiera">Actividades Financieras y de Valores</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Acceso rápido</h6>
            <ul class="footer-links">
              <li><a href="./index.html">Inicio</a></li>
              <li><a href="./index.html#about">Acerca de nosotros</a></li>
              <li><a href="./index.html#services">Servicios</a></li>
              <li><a href="./index.html#contact_form">Contáctanos</a></li>
              <!--<li><a href="./index.html">CLABE interbancaria</a></li>-->
              <li><a href="./index.html#footer">Politicas de privacidad</a></li>
            </ul>
          </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2024 Recicladora Comercial Malick. Todos los derechos reservados. 
            <a href="#">Este sitio web es propiedad de Recicladora Comercial Malick. El contenido de este sitio está protegido por derechos de autor y no puede ser reproducido, distribuido, transmitido ni utilizado, excepto con el permiso previo por escrito de Recicladora Comercial Malick.</a>.
            </p>
          </div>
        </div>
    </div>
</footer>

<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="./js/script.js"></script>


</body>
</html>
