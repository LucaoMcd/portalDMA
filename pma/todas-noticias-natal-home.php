<?php
/** Template Name: Todas as Notícias Natal, RN e Nordeste - HOME*/
get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- NATAL, RN E NORDESTE EM DESTAQUE -------------------------------------------------------------->
        <h2>Notícias de Natal, RN e Nordeste </h2>
        <ul class="lista">  
        <?php $paged = (get_query_var('paged')); get_query_var('paged') ; ?>
        <?php query_posts('category_name=Natal - HOME' .'&paged=' .$paged); while (have_posts()) : the_post(); ?>                      	
                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?> - <?php the_time('d/m/Y') ?></a></li>            
        <?php endwhile;?>
        </ul>
        <div style="text-align:center; margin-top:60px;">
<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
</div>
        <!----------------------- FIM DE NATAL, RN E NORDESTE EM DESTAQUE ---------------------------------------------------------->
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
