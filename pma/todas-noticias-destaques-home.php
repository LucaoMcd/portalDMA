<?php
/** Template Name: Todas as Notícias Destaques - HOME*/
get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
    
		<!----------------------- NOTICIAS DESTAQUE -------------------------------------------------------------->
        <h2>Notícias da ufrn</h2>
        <ul class="lista"> 
        <?php $paged = (get_query_var('paged')); get_query_var('paged') ; ?> 
        <?php query_posts('category_name=Destaques - HOME' 
.'&paged=' .$paged); while (have_posts()) : the_post(); ?>                      	
                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?> - <?php the_time('d/m/Y') ?></a></li>            
        <?php endwhile;?>
        </ul>
        <div style="text-align:center; margin-top:60px;">
<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
</div>
        <!----------------------- FIM NOTICIAS DESTAQUE ---------------------------------------------------------->
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
