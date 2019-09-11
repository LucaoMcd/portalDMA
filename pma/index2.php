<div id="content_geral">

<?php /*get_header()*/ include "header.php"; ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- 6 NOTICIAS DESTAQUE -------------------------------------------------------------->
        <h2>Destaques da ufrn</h2>
	<?php// if(function_exists('wp_content_slider')) { wp_content_slider(); } ?>
        <?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=6; $retranca++ ) : the_post(); ?>				
		<?php if ($retranca == 3 || $retranca == 6)
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
        	<a href="?page_id=23" class="botao2">Todas as notícias</a>
        <!----------------------- FIM 3 NOTICIAS DESTAQUE ---------------------------------------------------------->
        
        <div class="clear"></div>
        
        <!----------------------- NATAL, RN E NORDESTE EM DESTAQUE ------------------------------------------>
        <h2>Natal, RN e Nordeste em destaque</h2>
        <ul class="lista">
        <?php query_posts('category_name=Natal - HOME'); for ( $retranca = 1; $retranca <=3; $retranca++ ) : the_post(); ?>            
                <li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(22); ?></a></li>            
        <?php endfor;?>
        </ul>
        <a href="?page_id=19" class="botao2">Todas as notícias</a>
        <!----------------------- FIM DE NATAL, RN E NORDESTE EM DESTAQUE ------------------------------------------>
        
        <div class="clear" style="margin-bottom:10px;"></div>
              
        <!----------------------- BRASIL E MUNDO ------------------------------------------------------------------->
        <h2>Notícias do Brasil e do Mundo</h2>
        <ul class="lista">
        <?php query_posts('category_name=Brasil - HOME'); for ( $retranca = 1; $retranca <=3; $retranca++ ) : the_post(); ?>            
                <li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(22); ?></a></li>            
        <?php endfor;?>
        </ul>
        <a href="?page_id=17" class="botao2">Todas as notícias</a>
        <!----------------------- FIM BRASIL E MUNDO --------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- INICIO EVENTOS ------------------------------------------------------------------->
        <a href="?p=1503"><img src="http://www.meioambiente.ufrn.br/wp-content/uploads/CalEventos.jpg" alt="" name="" style="width:665px;"/>  </a> 
        <!----------------------- FIM EVENTOS ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- CINE VERDE --------------------------------------------------------------------------->        
            <div class="box1">
            	<h2>Cine - Vídeo Verde</h2>
                <?php query_posts('category_name=Cine - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
				<!--Remove a tag <p> automática-->
			    
				<?php the_content(); ?>
                <?php endfor;?>
                <a href="?page_id=372" class="botao4">Todos os cine-vídeos</a>
            </div>        
        <!----------------------- FIM DO CINE VERDE ------------------------------------------------------------------->       
        
        <!----------------------- CAMPANHAS --------------------------------------------------------------------------->        
            <div class="box2">
            	<h2>Campanhas e Movimentos</h2>
                <?php query_posts('category_name=Banners campanhas - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
				<?php add_filter ('the_content',  'wpautop'); ?>
				<?php the_content(); ?>
                <?php endfor;?>
                <a href="?p=14955" class="botao4" style="margin-top:9px;">Todas as campanhas</a>
            </div>        
        <!----------------------- FIM CAMPANHAS ------------------------------------------------------------------->        
        
        <div class="clear" style="margin-bottom:10px;"></div>
                
        <!----------------------- PERSONALIDADES --------------------------------------------------------------------------->        
        	<div class="box1">
            	<h2>Personalidades</h2>
                <?php query_posts('category_name=Personalidades - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
				<br />
                <a href="?page_id=4972" class="botao4" style="margin-top:80px;">Todas as Personalidades</a>
            </div>                  
        <!----------------------- FIM DE PERSONALIDADES -------------------------------------------------------------------> 
        
        <!----------------------- GALERIA DE IMAGENS --------------------------------------------------------------------------->        
        	<ul class="box2 galeria">
            	<h2>Galeria de Imagens</h2>
                <?php query_posts('category_name=Galeria de imagens - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
				<br />
                <a href="?page_id=3144" class="botao4" style="margin-top:3px;">Todas as galerias do PMA</a>
            </ul>                   
        <!----------------------- FIM DE GALERIA DE IMAGENS -------------------------------------------------------------------> 
        
        <div class="clear" style="margin-bottom:10px;"></div>
               
        <!----------------------- CURIOSIDADES --------------------------------------------------------------------------->        
        	<div class="box1" id="curiosidades">
            	<h2>Curiosidades</h2>
                <?php query_posts('category_name=Curiosidades - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                 <?php the_content(); ?>
                <?php endfor;?>
				<br />
                <a href="?p=5462" class="botao4" style="margin-top:10px;">Todas as Curiosidades</a>            
                </div>        
        <!----------------------- FIM DE CURIOSIDADES -------------------------------------------------------------------> 
        
        <!----------------------- IMAGEM DA SEMANA --------------------------------------------------------------------------->        
        	<div class="box2" id="charges">
            	<h2>Imagem da Semana</h2>
                <?php query_posts('category_name=Imagem semana - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
				<br />
                <a href="?p=5403" class="botao2" style="margin-top:10px;">Todas as Imagens</a>
            </div>        
        <!----------------------- FIM DE IMAGEM DA SEMANA -------------------------------------------------------------------> 
    
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->

<?php /*get_footer();*/include 'footer.php'; ?>
<div>