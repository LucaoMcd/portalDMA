<?php /* Template name: Todas as Personalidades */ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
      <h2>PERSONALIDADES</h2>
      <?php $paged = (get_query_var('paged')); get_query_var('paged') ; ?>
         <?php query_posts('category_name=Personalidades' .'&paged=' .$paged); while (have_posts()) : the_post(); ?>
          <div class="galeria-personalidades">
            <a href="<?php the_permalink() ?>"><?php the_content(); ?></a>
          </div>
		 <?php endwhile;?>
     <div style="text-align:center;">
<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
</div>
     </div>
     

     <div id="lado-direito">
      	<?php get_sidebar(); ?>
      </div>
      
	<div class="clear"></div>
    
  </div>
 
<?php get_footer(); ?> 