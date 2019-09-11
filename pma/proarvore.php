<div id="content_geral">

<?php /** Template Name: ProArvore*/ include "header-proarvore.php"; ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE PROEE -------------------------------------------------------------->
        <h2>PROGRAMA DE ARBORIZAÇÃO - PROARVORE</h2>        
        <ul class="lista">
		<?php query_posts('category_name=Sobre - PROArvore'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
            	<li><?php the_excerpt(); ?></li>      
        <?php endfor;?>
        </ul>
        <a href="?p=7003" class="botao">Saiba mais </a>      
        <!----------------------- FIM DESTAQUES PROEE ---------------------------------------------------------->
        
        <div class="clear"></div>
        
        <!--
        <h2>Notícias do PROArvore</h2>
        <ul class="lista">
        <?php query_posts('category_name=Destaques - PROArvore'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>            
                <li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(22); ?></a></li>            
        <?php endfor;?>
        </ul>
        <a href="?page_id=7741" class="botao4">Notícias Relacionadas</a>
        <br>
        -->
        
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- BLOG DA PROEE ------------------------------------------>
        <!-- <div id='blog-dma'>  --> 
        <!-- <h2>Blog da PROEE</h2> -->
	   <?php // query_posts('category_name=Blog - PROArvore'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
	        <?php //the_content(); ?>
			<!--<div class='clear' style='margin-bottom:10px;'></div>-->
       <?php // endfor;?> 
       <!-- </div> <div class='clear' style='margin-bottom:10px;'></div> --> 
       <!----------------------- FIM DE BLOG DA PROEE ------------------------------------------>
	   
	   <div class="clear" style="margin-bottom:10px;"></div>
        
        
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS --------------------------------------------------------------------------->        
        	<div class="box1">
            	<h2>Galeria de imagens</h2>
                <?php query_posts('category_name=Galeria - PROArvore'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <div class="clear" style="margin-bottom:10px;"><br />
                <a href="?page_id=3788" class="botao5">Todas as galerias ProARVORE</a>
                </div>
            </div>   
                         
        <!----------------------- FIM DE GALERIA DE IMAGENS -------------------------------------------------------------------> 
        
        <!----------------------- VÍDEOS --------------------------------------------------------------------------->        
           <div class="box2">
            	<h2>Vídeos</h2>
                <?php query_posts('category_name=Videos - PROArvore'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <a href="?page_id=9620" class="botao6" style="margin-top:8px;">Todos os cine-vídeos verdes sobre arborização</a>
            </div>           
        <!----------------------- FIM DOS VÍDEOS ------------------------------------------------------------------->  
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- PERSONALIDADES --------------------------------------------------------------------------->        
        	<!-- <div class="box1"> -->
            	<!-- <h2>Personalidade do mês</h2> -->
                <?php /*query_posts('category_name=Personalidades - PROArvore'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); */?>
                <?php //the_content(); ?>
                <?php //endfor;?>
                <!-- </div> -->
        <!----------------------- FIM DE PERSONALIDADES -------------------------------------------------------------------> 
    
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-proarvore.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>

</div>