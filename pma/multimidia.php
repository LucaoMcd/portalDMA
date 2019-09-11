<?php /** Template Name: Multmidia*/ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- 3 NOTICIAS DESTAQUE -------------------------------------------------------------->
	<h2>Destaques na ufrn, brasil e no mundo</h2>
	<?php aio_slideshow(); ?>
	<?php// include (ABSPATH . '/wp-content/plugins/featured-content-gallery/gallery.php'); ?>
	<?php //wowslider(1); ?>
	<?php //if(function_exists('wp_content_slider')) { wp_content_slider(); } ?>
	<?php query_posts('category_name=Destaques - MULTIMIDIA'); for ( $retranca = 1; $retranca <=3; $retranca++ ) : the_post(); ?>
            <div class="box-noticias">
            	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
            </div>
        <?php endfor;?>
        <a href="?page_id=23" class="botao">Mais notícias</a>
        <!----------------------- FIM 3 NOTICIAS DESTAQUE ---------------------------------------------------------->
        
        <div class="clear"></div>
        
        <!----------------------- NATAL, RN E NORDESTE EM DESTAQUE ------------------------------------------>
        <h2>Natal, RN e Nordeste em destaque</h2>
        <ul class="lista">
        <?php query_posts('category_name=Natal - MULTIMIDIA'); for ( $retranca = 1; $retranca <=6; $retranca++ ) : the_post(); ?>            
                <li><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></li>            
        <?php endfor;?>
        </ul>
        <a href="?page_id=19" class="botao">Mais notícias</a>
        <!----------------------- FIM DE NATAL, RN E NORDESTE EM DESTAQUE ------------------------------------------>
		
        
        <div class="clear" style="margin-bottom:10px;"></div>
              
        <!----------------------- BRASIL E MUNDO ------------------------------------------------------------------->
        <h2>Notícias do Brasil e do Mundo</h2>
        <ul class="lista">
        <?php query_posts('category_name=Brasil - MULTIMIDIA'); for ( $retranca = 1; $retranca <=6; $retranca++ ) : the_post(); ?>            
                <li><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></li>            
        <?php endfor;?>
        </ul>
        <a href="?page_id=17" class="botao">Mais notícias</a>
        <!----------------------- FIM BRASIL E MUNDO --------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- INICIO EVENTOS ------------------------------------------------------------------->
        <a href="?p=1503"><img src="http://10.3.225.167/meioambiente/wp-content/uploads/CalEventos.jpg" alt="" name="" style="width:665px;"/>  </a> 
        <!----------------------- FIM EVENTOS ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- CINE VERDE --------------------------------------------------------------------------->        
            <div class="box1">
            	<h2>Cine Verde</h2>
                <?php query_posts('category_name=Cine - MULTIMIDIA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
            </div>        
        <!----------------------- FIM DO CINE VERDE ------------------------------------------------------------------->       
        
        <!----------------------- VÍDEOS --------------------------------------------------------------------------->        
            <div class="box2">
            	<h2>Vídeos</h2>
                <?php query_posts('category_name=Videos - MULTIMIDIA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <!--<a href="?page_id=372" class="botao" style="margin-top:10px;">Ver todas</a> -->
            </div>        
        <!----------------------- FIM DOS VÍDEOS ------------------------------------------------------------------->        
        
        <div class="clear" style="margin-bottom:10px;"></div>
                
        <!----------------------- PERSONALIDADES --------------------------------------------------------------------------->        
        	<ul class="box1 galeria">
            	<h2>Personalidades</h2>
                <?php query_posts('category_name=Personalidades - MULTIMIDIA'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
                <li><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></li>
                <?php endfor;?>
                <!--<a href="?page_id=21" class="botao">Ver todas</a> -->
            </ul>                   
        <!----------------------- FIM DE PERSONALIDADES -------------------------------------------------------------------> 
        
        <!----------------------- GALERIA DE IMAGENS --------------------------------------------------------------------------->        
        	<ul class="box2 galeria">
            	<h2>Galeria de Imagens</h2>
                <?php query_posts('category_name=Galeria de imagens - MULTIMIDIA'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
                <li><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></li>
                <?php endfor;?>
                <!--<a href="?page_id=346" class="botao">Ver todas</a> -->
            </ul>                   
        <!----------------------- FIM DE GALERIA DE IMAGENS -------------------------------------------------------------------> 
        
        <div class="clear" style="margin-bottom:10px;"></div>
               
        <!----------------------- CURIOSIDADES --------------------------------------------------------------------------->        
        	<div class="box1" id="curiosidades">
            	<h2>Curiosidades</h2>
                <?php query_posts('category_name=Curiosidades - MULTIMIDIA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                <?php endfor;?>
                <!--<a href="?page_id=369" class="botao" style="margin-top:10px;">Ver todas</a>-->
            </div>        
        <!----------------------- FIM DE CURIOSIDADES -------------------------------------------------------------------> 
        
        <!----------------------- CHARGES --------------------------------------------------------------------------->        
        	<div class="box2" id="charges">
            	<h2>Charges</h2>
                <?php query_posts('category_name=Charges - MULTIMIDIA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
            </div>        
        <!----------------------- FIM DE CHARGES -------------------------------------------------------------------> 
    
    </div><!-- LADO ESQUERDO -->
    
    <div id="lado-direito">
    	<?php include "sidebar-cultura-lazer.php"; ?>
    </div><!-- LADO ESQUERDO -->
    
    <div class="clear"></div>
	
</div><!-- CONTENT -->



<?php get_footer(); ?>