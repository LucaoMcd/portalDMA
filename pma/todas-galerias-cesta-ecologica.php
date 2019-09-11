<?php /** Template Name: Todas as Galerias de Imagens de Cesta Ecologica */ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- TODAS AS GALERIAS DE IMAGENS ------------------------------------------------------------------->
        <h2>Galeria de Imagens - Cesta Ecológica</h2>
        
        <?php query_posts('category_name=Album Cesta Ecologica'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE TODAS AS GALERIAS DE IMAGENS ------------------------------------------------------------------->
      
        
        <div id="botao-galeria">
       <div class="clear" style="margin-bottom:10px;"></div>
        <a href="?page_id=4928" class="botao">Voltar</a>
        </div>
                       
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
