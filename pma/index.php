<div id="content_geral">

<?php /*get_header()*/ include "header.php"; ?>

<div class="clear" style="margin-bottom: 10px;"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- 6 NOTICIAS DESTAQUE -------------------------------------------------------------->
        <h2>Destaques da ufrn</h2>
		<!----------------------------------------------------- SLIDE -------------------------------------------------------->

<?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $imagem_1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php $descricao_imagem_1 = get_post(get_post_thumbnail_id($post->ID))->post_content; ?>
		<?php $titulo_1 = get_the_title(); ?>	
		<?php $link_1 = get_permalink( $post->ID ); ?>		
	<?php endif; ?>
<?php endfor;?>

<?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); ?>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $imagem_2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php $descricao_imagem_2 = get_post(get_post_thumbnail_id($post->ID))->post_content; ?>
		<?php $titulo_2 = get_the_title(); ?>	
		<?php $link_2 = get_permalink( $post->ID ); ?>					
	<?php endif; ?>
<?php endfor;?>

<?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=3; $retranca++ ) : the_post(); ?>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $imagem_3 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php $descricao_imagem_3 = get_post(get_post_thumbnail_id($post->ID))->post_content; ?>
		<?php $titulo_3 = get_the_title(); ?>	
		<?php $link_3 = get_permalink( $post->ID ); ?>					
	<?php endif; ?>
<?php endfor;?>

<?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $imagem_4 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php $descricao_imagem_4 = get_post(get_post_thumbnail_id($post->ID))->post_content; ?>
		<?php $titulo_4 = get_the_title(); ?>	
		<?php $link_4 = get_permalink( $post->ID ); ?>		
	<?php endif; ?>
<?php endfor;?>

<?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=5; $retranca++ ) : the_post(); ?>
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $imagem_5 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php $descricao_imagem_5 = get_post(get_post_thumbnail_id($post->ID))->post_content; ?>
		<?php $titulo_5 = get_the_title(); ?>
		<?php $link_5 = get_permalink( $post->ID ); ?>			
	<?php endif; ?>
<?php endfor;?>
<?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=6; $retranca++ ) : the_post(); ?>
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $imagem_6 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php $descricao_imagem_6 = get_post(get_post_thumbnail_id($post->ID))->post_content; ?>
		<?php $titulo_6 = get_the_title(); ?>	
		<?php $link_6 = get_permalink( $post->ID ); ?>		
	<?php endif; ?>
<?php endfor;?>






				
<div id="featured" >
		  <ul class="ui-tabs-nav">
	        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><span><?php echo $titulo_1;?></span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><span><?php echo $titulo_2;?></span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><span><?php echo $titulo_3;?></span></a></li>
		<li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><span><?php echo $titulo_4;?></span></a></li>
		<li class="ui-tabs-nav-item" id="nav-fragment-5"><a href="#fragment-5"><span><?php echo $titulo_5;?></span></a></li>
		<li class="ui-tabs-nav-item" id="nav-fragment-6"><a href="#fragment-6"><span><?php echo $titulo_6;?></span></a></li>	        
	      </ul>

	    <!-- Primeiro Content -->
	    <div id="fragment-1" class="ui-tabs-panel" style="">
			<a href="<?php echo $link_1 ; ?>" ><img src="<?php echo $imagem_1[0]; ?>" alt="" title="<?php echo $descricao_imagem_1 ?>"/></a>
			 <div class="info" >
				<span><a href="<?php echo $link_1 ; ?>" ><?php echo $titulo_1;?></a></span>
				
			 </div>
	    </div>

	    <!-- Segundo Content -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
			<a href="<?php echo $link_2 ; ?>" ><img src="<?php echo $imagem_2[0]; ?>" alt="" title="<?php echo $descricao_imagem_2 ?>"/></a>
			 <div class="info" >
				<span><a href="<?php echo $link_2 ; ?>" ><?php echo $titulo_2;?></a></span>
				
			 </div>
	    </div>

	    <!-- Terceiro Content -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
			<a href="<?php echo $link_3 ; ?>" ><img src="<?php echo $imagem_3[0]; ?>" alt="" title="<?php echo $descricao_imagem_3 ?>"/></a>
			 <div class="info" >
				<span><a href="<?php echo $link_3 ; ?>" ><?php echo $titulo_3;?></a></span>
				
	         </div>
	    </div>
		
		<!-- Quarto Content -->
	    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
			<a href="<?php echo $link_4 ; ?>" ><img src="<?php echo $imagem_4[0]; ?>" alt="" title="<?php echo $descricao_imagem_4 ?>"/></a>
			 <div class="info" >
				<span><a href="<?php echo $link_4 ; ?>" ><?php echo $titulo_4;?></a></span>
				
	         </div>
	    </div>
		
		<!-- Quinto Content -->
	    <div id="fragment-5" class="ui-tabs-panel ui-tabs-hide" style="">
			<a href="<?php echo $link_5 ; ?>" ><img src="<?php echo $imagem_5[0]; ?>" alt="" title="<?php echo $descricao_imagem_5 ?>"/></a>
			 <div class="info" >
				<span><a href="<?php echo $link_5 ; ?>" ><?php echo $titulo_5;?></a></span>
				
	         </div>
	    </div>

		<!-- Sexto Content -->
	    <div id="fragment-6" class="ui-tabs-panel ui-tabs-hide" style="">
			<a href="<?php echo $link_6 ; ?>" ><img src="<?php echo $imagem_6[0]; ?>" alt="" title="<?php echo $descricao_imagem_6 ?>"/></a>
			 <div class="info" >
				<span><a href="<?php echo $link_6 ; ?>" ><?php echo $titulo_6;?></a></span>
				
	         </div>
	    </div>

	</div>

<!----------------------------------------------------- Fim do SLDIE ---------------------------------------------------------->
		<!--
		<?php /*
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
		
		<?php endfor;?>		*/?>
		-->
		<div class="clear"></div>
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
        
        <div class="clear" style="margin-bottom:0px;"></div>
              
        <!----------------------- BRASIL E MUNDO -------------------------------------------------------------------->
        <h2>Notícias do Brasil e do Mundo</h2>
        <ul class="lista">
        <?php query_posts('category_name=Brasil - HOME'); for ( $retranca = 1; $retranca <=3; $retranca++ ) : the_post(); ?>            
                <li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(22); ?></a></li>            
        <?php endfor;?>
        </ul>
        <a href="?page_id=17" class="botao2">Todas as notícias</a>
        <!----------------------- FIM BRASIL E MUNDO ---------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- INICIO EVENTOS -------------------------------------------------------------------->
        <a href="?p=1503"><img class="eventos" src="http://www.meioambiente.ufrn.br/wp-content/gallery/imagens-para-portal/banner-calendario.png" alt="" name=""/>  </a> 
        <!----------------------- FIM EVENTOS -------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
        <!----------------------- CINE VERDE ---------------------------------------------------------------------------->        
            <div class="box1">
            	<h2>Cine - Vídeo Verde</h2>
                <?php query_posts('category_name=Cine - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
				<!--Remove a tag <p> automática-->
			    
				<?php the_content(); ?>
                <?php endfor;?>
                <a href="?page_id=372" class="botao4">Todos os cine-vídeos</a>
            </div>        
        <!----------------------- FIM DO CINE VERDE -------------------------------------------------------------------->       
        
        <!----------------------- CAMPANHAS ---------------------------------------------------------------------------->        
            <div class="box2">
            	<h2>Campanhas e Movimentos</h2>
                <?php query_posts('category_name=Banners campanhas - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
				<?php add_filter ('the_content',  'wpautop'); ?>
				<?php the_content(); ?>
                <?php endfor;?>
                <a href="?p=18438" class="botao4" style="margin-top:13px;">Todas as campanhas</a>
            </div>        
        <!----------------------- FIM CAMPANHAS -------------------------------------------------------------------->        
        
        <div class="clear" style="margin-bottom:10px;"></div>
                
        <!----------------------- PERSONALIDADES ---------------------------------------------------------------------------->        
        	<div class="box1">
            	<h2>Personalidades</h2>
               	<?php query_posts('category_name=Personalidades - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
		
		<br />
		<a href="?page_id=4972" class="botao4" style="margin-top:18px;">Todas as Personalidades</a>    
	                
            </div>              

        <!----------------------- FIM DE PERSONALIDADES --------------------------------------------------------------------> 
        
        <!----------------------- GALERIA DE IMAGENS ---------------------------------------------------------------------------->        
        	<ul class="box2 galeria">
            	<h2>Galeria de Imagens</h2>
                <?php query_posts('category_name=Galeria de imagens - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
				<br />
                <!--<a href="?page_id=3144" class="botao4" style="margin-top:4px;">Todas as galerias do PMA</a>-->
                <a href="?p=41559" class="botao4" style="margin-top:4px;">Todas as galerias do PMA</a>
            </ul>                   
        <!----------------------- FIM DE GALERIA DE IMAGENS --------------------------------------------------------------------> 
        
        <div class="clear" style="margin-bottom:10px;"></div>
               
        <!----------------------- CURIOSIDADES ---------------------------------------------------------------------------->        
        	<div class="box1" id="curiosidades">
            	<h2>Curiosidades</h2>
                <?php query_posts('category_name=Curiosidades - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                 <?php the_content(); ?>
                <?php endfor;?>
				<br />
                <a href="?p=5462" class="botao4" style="margin-top:10px;">Todas as Curiosidades</a>            
                </div>        
        <!----------------------- FIM DE CURIOSIDADES -------------------------------------------------------------------> 
        
        <!----------------------- IMAGEM DA SEMANA ---------------------------------------------------------------------------->        
        	<div class="box2" id="charges">
            	<h2>Imagem da Semana</h2>
                <?php query_posts('category_name=Imagem semana - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
				<br />
                <a href="?p=34750" class="botao2" style="margin-top:10px;">Todas as Imagens</a>
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