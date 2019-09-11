<?php /** Template Name: Campanhas Impresso - DMA*/ include "header-dmacomunica.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE O PROJETO -------------------------------------------------------------->
        <h2>Campanhas da DMA</h2>   

<br />    

<p style="text-align:justify"></p>


<br />
<br />

<!----------------------- FIM SOBRE DMACOMUNICA ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        <h2>Impressos</h2>
        
        <?php query_posts('category_name=Album Campanha Impressos'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
   <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        <h2>Eletrônicos</h2>
        
        <?php query_posts('category_name=Album Campanha Eletronicos'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
	   
	   <div class="clear" style="margin-bottom:10px;"></div>       
 
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-dmacomunica.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>

