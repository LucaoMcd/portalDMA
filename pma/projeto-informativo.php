<?php /** Template Name: Projeto Informativo DMA*/ include "header-dmacomunica.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE O PROJETO -------------------------------------------------------------->
        <h2>Informativo DMA</h2>   

<br />    

<p style="text-align:justify"></p>


<!----------------------- FIM SOBRE DMACOMUNICA ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        
        <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        
        <h2>Galeria de Imagens - Informativo DMA</h2>
        
        <?php query_posts('category_name=Album Informativo DMA'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
       
       
        <div class="clear" style="margin-bottom:10px;"></div>     
      
      <!----------------------- ASSOCIACAO A OUTROS PROJETOS ------------------------------------------>
          
       <h2>Associação a outros projetos </h2>
	   <ul class="lista">
            <li><a href="?page_id=8449">Blogs</a></li>  
            <li><a href="?page_id=8526">Campanhas da DMA</a></li>
            <li><a href="?page_id=8477">Cesta Ecológica e SEMA</a></li>
            <li><a href="?page_id=7747">Expedições</a></li>            
            <li><a href="?page_id=8289">Exposições Itinerantes e Interativas</a></li> 
            <li><a href="?page_id=8419">Portal de Meio Ambiente</a></li>                                                  
         </ul>
        <!--<a href="?page_id=1207" class="botao2">Mais Notícias</a>!-->
        
       <!----------------------- FIM DE ASSOCIACAO A OUTROS PROJETOS ------------------------------------------>

    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-dmacomunica.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>

