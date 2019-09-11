<?php
/** Template Name: Todas as Personalidades - HOME*/
get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- PERSONALIDADES ------------------------------------------------------------------->
        <h2>Personalidades</h2>  
        <?php $paged = (get_query_var('paged')); get_query_var('paged'); ?>
        <?php query_posts('category_name=Personalidades - HOME' .'&paged=' .$paged); while (have_posts()) : the_post(); ?>                      	
                <?php the_content(); ?>  
                <div class="clear" style="margin-bottom:10px;"></div>         
        <?php endwhile;?>
	<br/><br/>
        <div style="text-align:center;">
<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
</div>
        <!----------------------- FIM DE PERSONALIDADES ------------------------------------------------------------------->
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>