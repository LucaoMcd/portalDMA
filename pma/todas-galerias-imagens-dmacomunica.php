<?php /** Template Name: Todas as Galerias de Imagens da DMA Comunica */ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!----------------------- TODAS AS GALERIAS DE IMAGENS ------------------------------------------------------------------->
        <h2>Galeria de imagens</h2>
        <?php $paged = (get_query_var('paged')); get_query_var('paged') ; ?>
       <!--- <?php query_posts('category_name=Album - HOME' .'&paged=' .$paged); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>  --->
        <div style="text-align:center; margin-top:0px;">
<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
</div>
        <!----------------------- FIM DE TODAS AS GALERIAS DE IMAGENS ------------------------------------------------------------------->
    
     <div class="clear"></div>
        
     
        <ul class="lista">
        	<li><a href="?page_id=2549">Projeto Expedições</a></li>
            <li><a href="?page_id=2591">Paisagens do Campus</a></li>
            <li><a href="?page_id=2586">Exposições Itinerantes e Interativas</a></li>
            <li><a href="?page_id=17397">Cesta Ecológica</a></li>
            <li><a href="?p=24709 ">Cientec</a></li>
            <li><a href="?p=4611">Semana de Meio Ambiente da UFRN - Sema</a></li>
            
            <div class="clear" style="margin-bottom:10px;"></div>
            
            <a href="?page_id=3144" class="botao4">Todas as galerias do PMA</a> 
            
         </ul>
    
    
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
