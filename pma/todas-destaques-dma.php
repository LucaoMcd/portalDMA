<?php
/** Template Name: Todas as Notícias Destaques - DMA*/
get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
    
		<!----------------------- NOTICIAS DESTAQUE -------------------------------------------------------------->
        <h2>DESTAQUES DA DMA/SIN - UFRN</h2>
        <ul class="lista">  
        <?php query_posts('category_name=Destaques - DMA'); while (have_posts()) : the_post(); ?>                      	
                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?> - <?php the_time('d/m/Y') ?></a></li>            
        <?php endwhile;?>
        </ul>
        <!----------------------- FIM NOTICIAS DESTAQUE ---------------------------------------------------------->
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
