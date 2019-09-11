<div id="content_geral">

<?php /** Template Name: ProAgua*/ include "header-proagua.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE PROAGUA -------------------------------------------------------------->
        <h2>PROGRAMA DE CONTROLE DE QUALIDADE DA ÁGUA - PROAGUA</h2>        
        <ul class="lista">
		<?php query_posts('category_name=Sobre - PROAGUA'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
            	<li style="text-align:justify;"><?php the_excerpt(); ?></li>      
        <?php endfor;?>
        </ul>
        <a href="?p=3135" class="botao">Saiba Mais</a>      
        <!----------------------- FIM SOBRE PROAGUA ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
		
		<!----------------------- Destaques PROAGUA -------------------------------------------------------------->
        
        <!--
        <h2>Notícias do ProAGUA</h2>
        <ul class="lista">
        <?php query_posts('category_name=Destaques - PROAGUA'); for ( $retranca = 1; $retranca <=3; $retranca++ ) : the_post(); ?>            
                <li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(22); ?></a></li>            
        <?php endfor;?>
        </ul>
        <a href="?page_id=9640" class="botao4">Notícias Relacionadas</a>
       	-->




	 <!----------------------- FIM Destaques PROAGUA ---------------------------------------------------------->
<?php// wowslider(1); ?>
<?php// if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
<?php// if (function_exists('slideshow')) { slideshow($output = true, $post_id = false, $gallery_id = false, $params = array()); } ?>
<?php// do_shortcode('[upzslider usingphp=true]'); ?>
<?php// if(function_exists('jquery_slider')) { echo jquery_slider(); } ?>
<?php// if ( function_exists('show_nivo_slider') ) { show_nivo_slider(); } ?>
<?php// if ( function_exists( 'add_image_size' ) ) { add_image_size( 'orbit-custom', 940, 300 ); } ?>
<?php// echo do_shortcode('[cycloneslider id ="teste"]'); ?>

<!----------------------------------------------------- SLIDE -------------------------------------------------------->

<!--
<?php /*

<?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $imagem_1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php $titulo_1 = get_the_title(); ?>			
	<?php endif; ?>
<?php endfor;?>

<?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); ?>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $imagem_2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php $titulo_2 = get_the_title(); ?>						
	<?php endif; ?>
<?php endfor;?>

<?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=3; $retranca++ ) : the_post(); ?>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $imagem_3 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php $titulo_3 = get_the_title(); ?>						
	<?php endif; ?>
<?php endfor;?>

<?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $imagem_4 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php $titulo_4 = get_the_title(); ?>			
	<?php endif; ?>
<?php endfor;?>

<?php query_posts('category_name=Destaques - HOME'); for ( $retranca = 1; $retranca <=5; $retranca++ ) : the_post(); ?>
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $imagem_5 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php $titulo_5 = get_the_title(); ?>			
	<?php endif; ?>
<?php endfor;?>






				
<div id="featured" >
		  <ul class="ui-tabs-nav">
	        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><span><?php echo $titulo_1;?><br /></span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><span><?php echo $titulo_2;?></span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><span><?php echo $titulo_3;?></span></a></li>
		<li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><span><?php echo $titulo_4;?></span></a></li>
		<li class="ui-tabs-nav-item" id="nav-fragment-5"><a href="#fragment-5"><span><?php echo $titulo_5;?></span></a></li>	        
	      </ul>

	    <!-- Primeiro Content -->
	    <div id="fragment-1" class="ui-tabs-panel" style="">
			<img src="<?php echo $imagem_1[0]; ?>" alt="" />
			 <div class="info" >
				<span><a class="barra_texto" href="#" ><?php echo $titulo_1;?></a></span>
				
			 </div>
	    </div>

	    <!-- Segundo Content -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="<?php echo $imagem_2[0]; ?>" alt="" />
			 <div class="info" >
				<span><a class="barra_texto" href="#" ><?php echo $titulo_2;?></a></span>
				
			 </div>
	    </div>

	    <!-- Terceiro Content -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="<?php echo $imagem_3[0]; ?>" alt="" />
			 <div class="info" >
				<span><a class="barra_texto" href="#" ><?php echo $titulo_3;?></a></span>
				
	         </div>
	    </div>
		
		<!-- Quarto Content -->
	    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="<?php echo $imagem_4[0]; ?>" alt="" />
			 <div class="info" >
				<span><a class="barra_texto" href="#" ><?php echo $titulo_4;?></a></span>
				
	         </div>
	    </div>
		
		<!-- Quinto Content -->
	    <div id="fragment-5" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="<?php echo $imagem_5[0]; ?>" alt="" />
			 <div class="info" >
				<span ><a class="barra_texto" href="#" ><?php echo $titulo_5;?></a></span>
				
	         </div>
	    </div>

	</div>

<!----------------------------------------------------- Fim do SLDIE --------------------------------------------------------->

*/?>
-->
	<!----------------------- FIM Destaques PROAGUA ---------------------------------------------------------->
        







		 <div class="clear" style="margin-bottom:10px;"></div>
		 
		 <!----------------------- Relatorios PROAGUA ------------------------------------------>
        <div class='box11'>   
       <h7>Relatórios do ProAGUA</h7>
	   <?php query_posts('category_name=Banner proagua relatorio'); the_post(); ?>
	   <?php the_content(); ?>
	    <a href="http://www.meioambiente.ufrn.br/?p=26682" class="botao4">Todos os relatórios</a>
		</div> 
      
       <!----------------------- FIM DE Relatorios PROAGUA ------------------------------------------>
		 
		 <!----------------------- Parceiros PROAGUA ------------------------------------------>
        <div class='box12'>   
       <h7>Parceiros</h7>
	   <?php query_posts('category_name=Banner proagua parceiros'); the_post(); ?>
	   <?php the_content(); ?><div class="clear" style="margin-bottom:10px;"></div>
	    <a href="?p=3742" class="botao4">Conheça o LEACQ</a>
		</div> 
      
       <!----------------------- FIM DE Parceiros PROAGUA ------------------------------------------>
		 		 		 
		 <div class="clear" style="margin-bottom:10px;"></div>
		 		 
		 <!----------------------- Legislação PROAGUA ------------------------------------------>
        <div class='box9'>   
       <h7>Legisla&ccedil;&atilde;o</h7>
	   <?php query_posts('category_name=Banner proagua legislacao'); the_post(); ?>
	   <?php the_content(); ?><div class="clear" style="margin-bottom:10px;"></div>
	    <a href="?page_id=9140" class="botao4">Legislação</a>
		</div> 
      
       <!----------------------- FIM DE Legislação PROAGUA ------------------------------------------>
	   
	   <!----------------------- Campanhas PROAGUA ------------------------------------------>
        <div class='box9'>   
       <h7>Campanhas</h7>
	   <?php query_posts('category_name=Banner proagua campanhas'); the_post(); ?>
	   <?php the_content(); ?><div class="clear" style="margin-bottom:10px;"></div>
	    <a href="?page_id=9144" class="botao4">Todas as campanhas</a>
		</div> 
      
       <!----------------------- FIM DE Campanhas PROAGUA ------------------------------------------>
	   
	   <!----------------------- Dicas PROAGUA ------------------------------------------>
        <div class='box9'>   
       <h7>Dicas da DMA</h7>
	   <?php query_posts('category_name=Banner proagua dicas'); the_post(); ?>
	   <?php the_content(); ?><div class="clear" style="margin-bottom:10px;"></div>
	    <a href="http://www.caesa.ap.gov.br/pagina.php?a=183&b=177" target="_blank" class="botao4">Saiba mais</a>
		</div> 
      
       <!----------------------- FIM DE Dicas PROAGUA ------------------------------------------>
		
		<div class="clear" style="margin-bottom:10px;"></div>
		
		<!----------------------- INICIO EVENTOS ------------------------------------------------------------------->
        <!--<a href="?p=1503"><img class="eventos" src="http://www.meioambiente.ufrn.br/wp-content/themes/pma/pics/banner-calendario.jpg" alt="" name=""/>  </a>-->
        <!----------------------- FIM EVENTOS ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
		
         
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS --------------------------------------------------------------------------->        
        	<ul class="box1 galeria">
            	<h2>Galeria de Imagens</h2>
                <?php query_posts('category_name=Galeria de imagens - PROAGUA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <div class="clear" style="margin-top:112px;"><br />
                <a href="?page_id=3722" class="botao5">Todas as galerias do ProAGUA</a>
                </div>
            </ul>                   
        <!----------------------- FIM DE GALERIA DE IMAGENS -------------------------------------------------------------------> 
        
      
      
      <!----------------------- VIDEOS PROAGUA --------------------------------------------------------------------------->        
            <div class="box2">
            	<h2>Vídeos</h2>
                <?php query_posts('category_name=Videos - PROAGUA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <div class="clear" style="margin-bottom:10px;"></div>
                <a href="?page_id=9599" class="botao6" style="margin-top:0px;">Todos os cine-vídeos verdes sobre água</a>
            </div>        
        <!----------------------- FIM DE VIDEOS PROAGUA ------------------------------------------------------------------->
	  
    
  </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-proagua.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>

</div>
