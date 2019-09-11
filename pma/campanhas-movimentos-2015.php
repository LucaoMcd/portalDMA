<?php /* Template name: Outras Campanhas e Movimentos 2015*/ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
    
    	<!-------------------- OUTRAS CAMPANHAS E MOVIMENTOS -------------------->
        <h2>OUTRAS CAMPANHAS E MOVIMENTOS 2015</h2>
       
       <?php $paged = (get_query_var('paged')); get_query_var('paged') ; ?>
        <?php query_posts('category_name=Outras Campanhas e Movimentos 2015' .'&paged=' .$paged); while (have_posts()) : the_post(); ?>
          <div class="galeria-imagens">
            <a href="<?php the_permalink() ?>"><?php the_content(); ?></a>
          </div>
		 <?php endwhile;?>
         <div style="text-align:center; margin-top:60px;">
<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
</div>
 
        <!---------------------FIM OUTRAS CAMPANHAS E MOVIMENTOS ---------------->
        
      </div>
      
      <div id="lado-direito">
      	<?php get_sidebar(); ?>
      </div>
      
	<div class="clear"></div>
    
  </div>
 
<?php get_footer(); ?> 