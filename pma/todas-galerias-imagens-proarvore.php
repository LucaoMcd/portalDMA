<?php /** Template Name: Galeria de Imagens ProArvore*/ include "header.php"; ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- TODAS AS GALERIAS DE IMAGENS ------------------------------------------------------------------->
        <h2>Galeria de Imagens - PROGRAMA DE ARBORIZAÇÃO</h2>
        
        <?php query_posts('category_name=Album ProARVORE'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE TODAS AS GALERIAS DE IMAGENS ------------------------------------------------------------------->
        
        <div id="botao-galeria"><br />
        <!--<a href="?page_id=3144" class="botao4" style="margin-top:4px;">Todas as galerias do PMA</a>-->
                <a href="?p=41559" class="botao4" style="margin-top:4px;">Todas as galerias do PMA</a>
        </div>
                
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php include "sidebar.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
