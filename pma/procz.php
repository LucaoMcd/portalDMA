<div id="content_geral">

<?php /** Template Name: ProCZ*/ include "header-procz.php"; ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- Sobre o CZ (Centro de Zoonoses) -------------------------------------------------------------->
        <h2>PROGRAMA DE CONTROLE DE ZOONOSES - PROCZ</h2>     
        <ul class="lista">      
        <?php query_posts('category_name=Sobre o CZ - PROCZ'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
        <li><?php the_excerpt(); ?></li>
        <?php endfor;?>
        </ul>
        <a href="?p=3476" class="botao">Saiba Mais</a> 
        <!----------------------- FIM Sobre o CZ (Centro de Zoonoses) ---------------------------------------------------------->
        <div class="clear"></div>
        <!------------------- Destaques do PROCZ ------------------->
        <!--
        
        	<h2>Notícias do ProCZ</h2>
        		<ul class="lista">
        			<?php query_posts('category_name=Destaques - PROCZ'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>            
                		<li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(22); ?></a></li>            
        			<?php endfor;?>
        		</ul><br>
                <a href="?page_id=9642" class="botao4">Notícias Relacionadas</a>
        
        <div class="clear" style="margin-bottom:10px;"></div>
        -->
        
		<!----------------------- CAMPANHAS PROCZ ------------------------------------------>
        <div class='box11'>   
       <h2>Campanhas</h2>
	   <?php query_posts('category_name=Procz - campanhas'); the_post(); ?>
	   <?php the_content(); ?>
	    <a href="?page_id=9150" class="botao2">Mais campanhas</a>
		</div> 
      
       <!----------------------- FIM DE CAMPANHAS PROCZ ------------------------------------------>
	   
	   
	   <!----------------------- LEGISLACAO PROCZ ------------------------------------------>
        <div class='box12'>   
       <h2>Legislação</h2>
	   <?php query_posts('category_name=Procz - legislacao'); the_post(); ?>
	   <?php the_content(); ?>
	    <a href="?page_id=9166" class="botao5">Legislação</a>
		</div> 
      
       <!----------------------- FIM DE LEGISLACAO PROCZ ------------------------------------------>
		
		        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- Galeria de imagens --------------------------------------------------------------------------->        
        	<div class="box1">
            	<h2>Galeria de imagens</h2>
                <?php query_posts('category_name=Galeria - PROCZ'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <div class="clear" style="margin-bottom:10px;">
                <a href="?page_id=3730" class="botao5">Todas as galerias do ProCZ</a>
                </div>
            </div>                  
        <!----------------------- FIM DE Galeria de imagens ------------------------------------------------------------------->
        
         <!----------------------- VIDEOS PROCZ --------------------------------------------------------------------------->        
			<div class="box2">
            	<h2>Cine - Videos Verde</h2>
                <?php query_posts('category_name=Videos - PROCZ'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <a href="?page_id=9515" class="botao6" style="margin-top:10px;">Todos os cine-vídeos verdes sobre controle de zoonoses</a>
            </div>    
        <!----------------------- FIM DE VIDEOS PROCZ ------------------------------------------------------------------->
        
        
        
        <!----------------------- Movimentos --------------------------------------------------------------------------->        
        	<!--<div class="box2">
            	<h2>Movimentos</h2>
                <?php query_posts('category_name=Movimentos - PROCZ'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
            </div>-->                   
        <!----------------------- FIM DE Movimentos -------------------------------------------------------------------> 
    
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-procz.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>

</div>