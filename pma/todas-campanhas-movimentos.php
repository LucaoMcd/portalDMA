﻿<?php /* Template name: Todas as Campanhas e Movimentos - HOME*/ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
    
    	<!-------------------- TODAS AS CAMPANHAS E MOVIMENTOS -------------------->
        <h2>CAMPANHAS E MOVIMENTOS</h2>
       
       <?php $paged = (get_query_var('paged')); get_query_var('paged') ; ?>
        <?php query_posts('category_name=Campanhas e Movimentos' .'&paged=' .$paged); while (have_posts()) : the_post(); ?>
          <div class="galeria-imagens">
            <a href="<?php the_permalink() ?>"><?php the_content(); ?></a>
          </div>
		 <?php endwhile;?>
         <div style="text-align:center; margin-top:60px;">
<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
</div>
 
        <!---------------------FIM TODAS AS CAMPANHAS E MOVIMENTOS ---------------->
        
      </div>
      
      <div id="lado-direito">
      	<?php get_sidebar(); ?>
      </div>
      
	<div class="clear"></div>
    
  </div>
 
<?php get_footer(); ?> 