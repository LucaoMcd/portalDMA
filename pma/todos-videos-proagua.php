<?php /** Template Name: Todos os Vídeos - PROAGUA*/ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- TODAS AS GALERIAS DE VÍDEOS ------------------------------------------------------------------->
        <h2>Vídeos</h2>
        <ul id="galeria-videos"> 
         <?php $paged = (get_query_var('paged')); get_query_var('paged') ; ?>
        <?php query_posts('category_name=Videos - PROAGUA-2' .'&paged=' .$paged); while (have_posts()) : the_post(); ?>    
                <li><a href="<?php the_permalink() ?>"><?php the_content(); ?></a></li>              
        <?php endwhile;?>
        </ul> 
        <div style="text-align:center; margin-top:60px;">
<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
</div>
        <!----------------------- FIM DE TODAS AS GALERIAS DE  VÍDEOS ------------------------------------------------------------------->
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
