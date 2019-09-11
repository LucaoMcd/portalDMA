<?php
/** Template Name: Todas as Personalidades - DMA*/
get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- PERSONALIDADES ------------------------------------------------------------------->
        <h2>Personalidades</h2>  
        <?php query_posts('category_name=Personalidades - DMA'); while (have_posts()) : the_post(); ?>                      	
                <?php the_content(); ?>  
                <div class="clear" style="margin-bottom:10px;"></div>         
        <?php endwhile;?>
        <!----------------------- FIM DE PERSONALIDADES ------------------------------------------------------------------->
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
