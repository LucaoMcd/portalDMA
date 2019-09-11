<div id="content_geral">

<?php /** Template Name: DMAComunica*/ include "header-dmacomunica.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE DMACOMUNICA -------------------------------------------------------------->
        <h2>Programa de comunicação - DMAComunica</h2>        
        <ul class="lista">
		<?php query_posts('category_name=Sobre - DMACOMUNICA'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
            	<li><?php echo excerpt(38); ?></li>      
        <?php endfor;?>
        </ul>
        <a href="?p=3453" class="botao">Saiba Mais</a>     
        
        <!----------------------- FIM SOBRE DMACOMUNICA ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- NOTÍCIAS DA DMACOMUNICA ------------------------------------------>
         
        <!--
       <h2>NOTÍCIAS da DMACOMUNICA</h2>
	   <ul class="lista">
		<?php query_posts('category_name=Destaques - DMA'); for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); ?>            
                		<li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(28); ?></a></li>            
        			<?php endfor;?>
        </ul>
        <a href="?page_id=1207" class="botao4">Notícias Relacionadas</a>

        -->
        
       <!----------------------- FIM NOTÍCIAS DA DMACOMUNICA ------------------------------------------>
	   
	   <div class="clear" style="margin-bottom:10px;"></div>
       
       <!----------------------- PROJETOS DA DMA ------------------------------------------>
        <div class='box5'>   
       <h2>Projetos da DMA Comunica</h2>
	   <?php query_posts('category_name=Projetos - DMA'); the_post(); ?>
	   <?php the_content(); ?>
	    </div>
      
       <!----------------------- FIM DE PROJETOS DA DMA ------------------------------------------>
        
       <div class="clear" style="margin-bottom:10px;"></div>
                
        <!----------------------- GALERIA DE IMAGENS --------------------------------------------------------------------------->        
        	<ul class="box1 galeria">
            	<h2>Galeria de Imagens</h2>
                <?php query_posts('category_name=Galeria - DMACOMUNICA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
               <a href="?page_id=4928" class="botao5">Todas as galerias DMA Com.</a>
            </ul>                   
        <!----------------------- FIM DE GALERIA DE IMAGENS -------------------------------------------------------------------> 
        
        <!---------------------- Campanhas -------------------------------------------------------------------------->        
            <div class="box2">
            	<h2>Campanhas</h2>
                <?php query_posts('category_name=Campanhas - DMACOMUNICA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <a href="http://www.meioambiente.ufrn.br/?p=18438" class="botao4" style="margin-top:10px;">Todas as campanhas</a>
            </div>        
        <!---------------------- fim de campanhas ------------------------------------------------------------------>  
       
         
        
         <div class="clear" style="margin-bottom:10px;"></div> 
    
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-dmacomunica.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
</div>