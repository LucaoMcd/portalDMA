<?php /** Template Name: ProEA*/ include "header-proea.php"; ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- DESTAQUES PROEA -------------------------------------------------------------->
        <!--
        <h2>DESTAQUES DA PROEA/SIN - UFRN</h2>        
        <ul class="lista">
		<?php query_posts('category_name=Destaques - PROEA'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
            	<li><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></li>      
        <?php endfor;?>
        </ul>
        <a href="#" class="botao">Mais notícias</a>
        -->
        <!----------------------- FIM DESTAQUES PROEA ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- BLOG DA PROEA ------------------------------------------>
        <div id='blog-dma'>   
       <h2>Blog da PROEA</h2>
	   <?php query_posts('category_name=Blog - PROEA'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
	        <?php the_content(); ?>
			<div class='clear' style='margin-bottom:10px;'></div>
       <?php endfor;?>
       </div> <div class='clear' style='margin-bottom:10px;'></div>

       <!----------------------- FIM DE BLOG DA PROEA ------------------------------------------>
	   
	   <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- INICIO EVENTOS ------------------------------------------------------------------->
        <a href="?page_id=494"><img src="<?php bloginfo('template_directory'); ?>/pics/banner-calendario.jpg" alt="" name="" style="width:665px;"/>  </a> 
        <!----------------------- FIM EVENTOS ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS --------------------------------------------------------------------------->        
        	<ul class="box1 galeria">
            	<h2>Galeria de Imagens</h2>
                <?php query_posts('category_name=Galeria de imagens - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
				<br />
                <a href="http://www.meioambiente.ufrn.br/?page_id=3144" class="botao4" style="margin-top:4px;">Todas as galerias do PMA</a>
            </ul>                  
        <!----------------------- FIM DE GALERIA DE IMAGENS -------------------------------------------------------------------> 
        
        <!----------------------- VÍDEOS --------------------------------------------------------------------------->        
            <div class="box2">
            	<h2>Vídeos</h2>
                <?php query_posts('category_name=Videos - PROEA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <!--<a href="?page_id=372" class="botao" style="margin-top:10px;">Ver todas</a>-->
            </div>        
        <!----------------------- FIM DOS VÍDEOS ------------------------------------------------------------------->  
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- PERSONALIDADES --------------------------------------------------------------------------->        
        	<div class="box1">
            	<h2>Personalidade do mês</h2>
                <?php query_posts('category_name=Personalidades - PROEA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
            </div>                  
        <!----------------------- FIM DE PERSONALIDADES -------------------------------------------------------------------> 
    
    </div><!-- lado-direito -->
    
        <div id="lado-direito">
        	<?php include "sidebar-dma.php"; ?>
        </div><!-- lado-direito -->
        
        <div class="clear"></div>
    	
    </div><!-- content -->



<?php get_footer(); ?>
</div>