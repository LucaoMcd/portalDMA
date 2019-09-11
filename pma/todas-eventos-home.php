<?php /** Template Name: Todas os Eventos - HOME*/ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- EVENTOS ------------------------------------------------------------------->

        <h2>Eventos</h2>
        
        <?php query_posts('category_name=Eventos - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endfor;?>
                
        <!----------------------- FIM EVENTOS ------------------------------------------------------------------->
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
