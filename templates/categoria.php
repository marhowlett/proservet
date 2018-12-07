<?php
    /* Template Name: Catalogo */ 
    get_header();
?>
   

   <section id="slider_catalogo" class="template-section">
    <h1>Nuestros Productos</h1>
    <p>¿Qué producto necesitas?</p>
    <?php echo do_shortcode( '[vc_wp_search el_id="buscardor" el_class="buscar2"]' ); ?>
</section>
 <section id="categoria" class="template-section">
 <h2>Categorias</h2>
  <?php echo do_shortcode('[vc_row][vc_column][woodmart_categories orderby="date" order="ASC" style="carousel" categories_design="alt" categories_with_shadow="enable" spacing="30" slides_per_view="3" hide_pagination_control="yes" ids="" number="3"][/vc_column][/vc_row]');
    ?>
</section>


<?php include 'contacto.php'; ?>
