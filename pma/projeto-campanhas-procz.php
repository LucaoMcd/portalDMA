<?php /** Template Name: Projeto Campanhas do PROCZ*/ include "header-procz.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE AS CAMPANHAS -------------------------------------------------------------->
        <h2>Campanhas da DMA - ProCZ</h2>   



<!----------------------- FIM SOBRE AS CAMPANHAS ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
         <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        <h2>Impressos</h2>
        
        <?php query_posts('category_name=Album Campanhas Procz - Impressos'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
   <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        <h2>Eletrônicos</h2>
        
        <?php query_posts('category_name=Album Campanhas Procz - Eletronicos'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
	   
	   <div class="clear" style="margin-bottom:20px;"></div>    
       
        
 
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-procz.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>

