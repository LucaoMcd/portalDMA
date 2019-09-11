<?php /** Template Name: Todas as Noticias Campanha 2013*/ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- NOTÍCIAS ------------------------------------------------------------------->
        <h2>Not&iacute;cias Campanha 'Qu&iacute;micos. N&oacute;s Precisamos. Como Utilizamos?'</h2>
        <ul class="lista">  
        <?php $paged = (get_query_var('paged')); get_query_var('paged') ; ?>
        <?php query_posts('category_name=Noticias Campanha 2013' .'&paged=' .$paged); while (have_posts()) : the_post(); ?>                      	
                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?> - <?php the_time('d/m/Y') ?></a></li>            
        <?php endwhile;?>
        </ul>
        <div style="text-align:center; margin-top:60px;">
<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
</div>
        <!----------------------- FIM NOTÍCIAS ------------------------------------------------------------------->
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
