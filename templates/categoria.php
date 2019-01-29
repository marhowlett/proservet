<?php

include 'animacion.php';
    /* Template Name: Catalogo */ 
    get_header();
?>
   
<section id="slider_catalogo" class="template-section">
    <h1 class="headline">Nuestros Productos</h1>
   <div class="buscar2"><?php echo do_shortcode( '[smart_search id="2"]' ); ?></div>
</section>
 <section id="categoria" class="template-section">
 <h2 class="headline">Categorias</h2>
  <?php echo do_shortcode('[vc_row][vc_column][product_categories orderby="date" order="ASC" columns="1" number="3" hide_empty="3" ids="17, 18, 19"][/vc_column][/vc_row]');
    ?>
</section>


<?php include 'contacto.php'; ?>
