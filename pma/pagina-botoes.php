<?php /** Template Name: ProCZ - Página botões */ include "header.php"; ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
    
		<!-----------------------MARCADORES------------------------------------------------------------------->
        <div class="botoes-procz">
			
        
			<?php query_posts('category_name=Album Campanhas ProCZ - Marcadores'); while (have_posts()) : the_post(); ?>        
			<div class="galeria-imagens">              	
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
			</div>       
			<?php endwhile;?>
   		<!-----------------------EXPOSIÇÃO------------------------------------------------------------------->
					
			<?php query_posts('category_name=Album Campanhas ProCZ - Paineis'); while (have_posts()) : the_post(); ?>        
			<div class="galeria-imagens">              	
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
			</div>       
			<?php endwhile;?>
		 <!-----------------------cartaz------------------------------------------------------------------->

			<?php query_posts('category_name=Album Campanhas ProCZ - Cartazes'); while (have_posts()) : the_post(); ?>        
			<div class="galeria-imagens">              	
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
			</div>       
			<?php endwhile;?>

		 <!-----------------------Paineis------------------------------------------------------------------->
			<?php query_posts('category_name=Album Campanhas ProCZ - Placas'); while (have_posts()) : the_post(); ?>        
			<div class="galeria-imagens">              	
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
			</div>       
			<?php endwhile;?>

		</div>
       
    
    	<!--<br>
    	 <a href="?p=4270" class="botao3">Marcador</a><br><br>
         <a href="?p=4279" class="botao3">Exposição</a><br><br>
         <a href="#" class="botao3">Cartaz</a><br><br>
         <a href="?p=4283" class="botao3">Placa</a>!-->
    
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-procz.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
