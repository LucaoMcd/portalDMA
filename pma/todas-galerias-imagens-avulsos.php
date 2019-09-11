<?php /** Template Name: Todas as Galerias de Imagens Avulso */ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- TODAS AS GALERIAS DE IMAGENS ------------------------------------------------------------------->
        <h2>Galeria de Imagens - Outros</h2>
        
        <?php query_posts('category_name=Album Avulso'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE TODAS AS GALERIAS DE IMAGENS ------------------------------------------------------------------->
        
        <div id="botao-galeria">
        <a href="?page_id=3144" class="botao2">Ver Mais Galerias</a>
        </div>
                
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
