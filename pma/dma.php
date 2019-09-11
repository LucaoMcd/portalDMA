<div id="content_geral">

<?php /** Template Name: Diretoria de Meio Ambiente*/ include "header-dma.php"; ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
    
    	<!----------------------- SOBRE A DMA -------------------------------------------------------------->
        <h2>DIRETORIA DE MEIO AMBIENTE - DMA</h2>     
        <ul class="lista">   
		<?php query_posts('category_name=Sobre a DMA - DMA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
        	<li><?php the_excerpt(); ?></li> 
        <?php endfor;?>
        </ul>
        <a href="?p=1494" class="botao">Saiba Mais</a>    
        <!----------------------- FIM DE SOBRE A DMA ---------------------------------------------------------->
        
        <div class="clear"><br /></div>
                
        <!----------------------- DESTAQUES DMA -------------------------------------------------------------->
        <h2>DESTAQUES DA DMA/SIN - UFRN</h2>
		<?php query_posts('category_name=Destaques - DMA'); for ( $retranca = 1; $retranca <=3; $retranca++ ) : the_post(); ?>
        <?php if ($retranca == 3)
		{?>		
			<div class="box-noticias-right">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>      
				</div>
		<?php
		}
		else
		{?>

			<div class="box-noticias">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>      
				</div>
		<?php
		}?>
        <?php endfor;?>
        <a href="?page_id=1207" class="botao5">Todas as notícias da DMA/SIN</a>      
        <!----------------------- FIM DESTAQUES DMA ---------------------------------------------------------->
	   
	   <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- INICIO EVENTOS ------------------------------------------------------------------->
        <a href="?p=1503"><img class="eventos" src="http://www.meioambiente.ufrn.br/wp-content/gallery/imagens-para-portal/banner-calendario.png" alt="" name=""/>  </a>
        <!----------------------- FIM EVENTOS ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS --------------------------------------------------------------------------->        
        	<ul class="box1 galeria">
            	<h2>Galeria de Imagens</h2>
                <?php query_posts('category_name=Galeria - DMA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
		<a href="?page_id=3144" class="botao4" style="margin-right:20px">Todas as galerias do PMA</a>
            </ul>
                               
        <!----------------------- FIM DE GALERIA DE IMAGENS -------------------------------------------------------------------> 
        
        <!----------------------- VÍDEOS --------------------------------------------------------------------------->        
            <div class="box2">
            	<h2>Cine - Vídeo Verde</h2>
                <?php query_posts('category_name=Videos - DMA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <a href="?page_id=372" class="botao5" style="margin-top:10px;">Todos os cine-vídeos verdes</a>
            </div>        
        <!----------------------- FIM DOS VÍDEOS ------------------------------------------------------------------->  
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
    
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-dma.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
</div>
