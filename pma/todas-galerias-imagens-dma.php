<?php /** Template Name: Todas as Galerias de Imagens - DMA */ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- TODAS AS GALERIAS DE IMAGENS ------------------------------------------------------------------->
        <h2>Galeria de imagens</h2>
        
        <?php query_posts('category_name=Galeria de imagens - DMA'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE TODAS AS GALERIAS DE IMAGENS ------------------------------------------------------------------->
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
