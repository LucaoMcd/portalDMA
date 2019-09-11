<?php
/** Template Name: Todas as Notícias Natal, RN e Nordeste - HOME*/
get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- NATAL, RN E NORDESTE EM DESTAQUE -------------------------------------------------------------->
        <h2>Natal, RN e Nordeste em destaque</h2>
        <ul class="lista">  
        <?php query_posts('category_name=Natal - HOME'); while (have_posts()) : the_post(); ?>                      	
                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>            
        <?php endwhile;?>
        </ul>
        <!----------------------- FIM DE NATAL, RN E NORDESTE EM DESTAQUE ---------------------------------------------------------->
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
