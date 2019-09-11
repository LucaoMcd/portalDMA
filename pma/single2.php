<?php get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">    
		<?php the_post()?>
        <h2><?php the_title(); ?></h2>
        <p><small>Divulgado em: <?php the_time('d/m/Y ') ?></small></p>
        <?php the_content(); ?>    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->

<?php get_footer(); ?>
