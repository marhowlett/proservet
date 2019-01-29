<?php
include 'animacion.php';
    /* Template Name: Producto_EXPEC-MOR */ 
    get_header();
?>
   

   <section id="slider_catalogo" class="template-section">
    <h1>Nuestros Productos</h1>
   <div class="buscar2"><?php echo do_shortcode( '[smart_search id="2"]' ); ?></div>
</section>

  <section id="ficha" class="template-section">

        <div class="contenedor">
            <div class="grid">
                <div class="col">
                    <img class="prin" src="<?php echo get_stylesheet_directory_uri(); ?>/img/productos/Costales12.png" alt="Acerca">
                </div>
                <div class="col">
                   <h2 class="headline">ENROTIL-PLUS</h2>
                    <p class="tagline">
                  REG. S.A.G.A.R.P.A. No. Q-7982-012 <br>
                        <strong>Cont. Neto 10 Kg.(100 sobres de 100g.)</strong>
                       
                    </p>
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconos2.png" alt="Iconos">
                  
                    
                </div>
                </div>
                <div class="formula">
                <h2 class="headline">COMPOSICIÓN</h2>
                <p class="tagline">Cada 100 g. de <strong>EXPEC-MOR</strong> contiene: <br>
Yoduro de potasio .....................2.5g.<br>
Carbonato de amonio .................7.5g.<br>
Guayacol éter glicerico ..............6.25g.<br>
Excipiente C.B.P........................100g.</p>
                <hr>
                <h2 class="headline">MODO DE ACCIÓN</h2>
                <p class="tagline"><strong>EXPEC-MOR</strong> se usa como auxiliar en el tratamiento de afecciones del tracto
respiratorio, expectorante, tónico cardiaco y broncodilatador.</p>
               <hr>
                <h2 class="headline">ADMINISTRACIÓN Y DOSIS</h2>
                <p class="tagline">Aves (Engorda y reproductoras), porcinos, caninos, felinos y bovinos
(becerros). 1 g. por cada 10 litros de agua de bebida durante 3 a 10 días.</p>
              <p class="tagline">Administración oral en agua de bebida.</p>
               <hr>
               
                <h2 class="headline">ALMACENAMIENTO.</h2>
                <p class="tagline">Almacenar a temperatura ambiente, en un lugar fresco, seco y protegido
de la luz solar.</p>
                <a href="http://proservet.mx/wp-content/themes/informe.pdf" class="btn">Descarga la ficha técnica</a>
                </div>
                 
        </div>

    </section>
    <?php include 'contacto.php'; ?>