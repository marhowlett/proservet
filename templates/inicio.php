<?php
    /* Template Name: Inicio */ 
    get_header();
?>
    <section id="slider" class="template-section">
       
        <div class="contenedor">
          
              <h1>¡Protege a tus animales!</h1>
              <p>con nuestros productos</p>
               <a href="#" class="btn">Me interesa</a>
            </div>

    </section>
    <section id="buscar" class="template-section">
       <div class="grid">

                <div class="col">
                <span>¿Qué producto <br>
                necesitas?</span>
               </div>
                <div class="col">
            
                <div class="buscar"><?php echo do_shortcode( '[smart_search id="1"]' ); ?></div>
               </div>
     </div>
    </section >
    <section id="maquila" class="template-section">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/maquila.png" alt="Maquila">
          <h2>Maquila</h2>
          <p>Laboratorios Proservet en su división de maquila cuenta con una amplia experiencia en la fabricación de un gran número de productos utilizados en la línea veterinaria 
y personal calificado para cumplir con protocolos que garanticen la calidad final de los productos.</p>
         <a href="#" class="btn">Saber más</a>
    </section>
    <section id="somos" class="template-section">
         
      <div class="grid">

                <div class="col">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/somos.png" alt="Maquila">
               </div>
                <div class="col quienes">
                 <h2>¿Quiénes Somos?</h2>
          <p>Desde que inicia operaciones PROSERVET se ha empeñado en crear socios comerciales, y acompañarlos durante todo el proceso venta y post venta.</p>
          <p>Nuestros productos ofrecen calidad y confianza a los productores pecuarios, para el tranquilo desarrollo de sus animales.</p>
         <a href="#" class="btn">Me interesa</a>
               </div>
     </div>
        
    </section>
   
  <?php include 'contacto.php'; ?>
 
<?php 
    get_footer();
?>
