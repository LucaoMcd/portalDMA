<div id="content_geral">

<?php /** Template Name: ProEE*/ include "header-proee.php"; ?>

<div class="clear"></div>

<div id="content">

    <div id="lado-esquerdo">  
           

<!----------------------- SOBRE PROEE -------------------------------------------------------------->
        <h2>PROGRAMA DE EFICIÊNCIA ENERGÉTICA  - PROEE</h2>        
        <ul class="lista">
        <?php query_posts('category_name=Sobre - PROEE'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
                <li><?php the_excerpt(); ?></li>      
        <?php endfor;?>
        </ul>
        <a href="http://www.meioambiente.ufrn.br/?p=3561" class="botao">Saiba mais </a>      
        <!----------------------- FIM DESTAQUES PROEE ---------------------------------------------------------->
        
        <div class="clear"></div>
        <!--
        <h2>Notícias do PROEE</h2>
        <ul class="lista">
        <?php query_posts('category_name=Destaques - PROEE'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>            
                <li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(22); ?></a></li>            
        <?php endfor;?>
        </ul>
        <a href="http://www.meioambiente.ufrn.br/?page_id=22286" class="botao4">Notícias Relacionadas</a>
        <br>
        -->
        
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- BLOG PROEE ------------------------------------------>
        <!-- <div id='blog-dma'>  --> 
        <!-- <h2>Blog da PROARVORE</h2> -->
       <?php // query_posts('category_name=Blog - PROEE'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
            <?php //the_content(); ?>
            <!--<div class='clear' style='margin-bottom:10px;'></div>-->
       <?php // endfor;?> 
       <!-- </div> <div class='clear' style='margin-bottom:10px;'></div> --> 
       <!----------------------- FIM DE BLOG DO PROEE ------------------------------------------>
       
       <div class="clear" style="margin-bottom:10px;"></div>
        
        
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS -------------------------------------------------------------------------->        
        	<!--<ul class="box1 galeria">
            	<h2>Galeria de Imagens</h2>
                <?php //query_posts('category_name=Galeria de imagens - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php //the_content(); ?>
                <?php //endfor;?>
				<br />
                <a href="?page_id=3144" class="botao4" style="margin-top:4px;">Todas as galerias do PMA</a>
            </ul>-->
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------> 
        
        <!----------------------- VÍDEOS  ---------------------------------------------------------------->  
			<div class="box1">
                <h2>Vídeos</h2>
                <?php query_posts('category_name=videos-proee'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <a href="http://www.meioambiente.ufrn.br/?page_id=22478" class="botao6" style="margin-top:8px;">Todos os cine-vídeos verdes sobre eficiência energética</a>
            </div>      
        <!----------------------- FIM DOS VÍDEOS ------------------------------------------------------------------>  
        
	<div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- PERSONALIDADES -------------------------------------------------------------------------->        
            <!--<div class="box1">
                <h2>Personalidade do mês</h2>-->
                <?php //query_posts('category_name=Personalidades - PROEE'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php //the_content(); ?>
                <?php //endfor;?>
            <!--</div>-->
        <!----------------------- FIM DE PERSONALIDADES ------------------------------------------------------------------> 
    
    </div><!-- lado-direito -->
    
        <div id="lado-direito">
            <?php include "sidebar-proee.php"; ?>
        </div><!-- lado-direito -->
        
        <div class="clear"></div>
        
    </div><!-- content -->



<?php get_footer(); ?>
</div>