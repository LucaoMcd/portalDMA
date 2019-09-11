<?php /** Template Name: ProCZ - Página botões */ include "header2.php"; ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
    
    <!-----------------------MARCADORES------------------------------------------------------------------->
     
        
        <?php query_posts('category_name=Album Campanhas ProCZ - Marcadores'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE MARCADORES ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
        <!-----------------------EXPOSIÇÃO------------------------------------------------------------------->
        <h2>Painéis</h2>
        
        <?php query_posts('category_name=Album Campanhas ProCZ - Paineis'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE EXPOSIÇÃO ------------------------------------------------------------------->
        
         <div class="clear" style="margin-bottom:20px;"></div>
        
        <!-----------------------cartaz------------------------------------------------------------------->
        <h2>Cartazes</h2>
        
        <?php query_posts('category_name=Album Campanhas ProCZ - Cartazes'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE cartaz ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
        <!-----------------------cartaz------------------------------------------------------------------->
        <h2>Placas</h2>
        
        <?php query_posts('category_name=Album Campanhas ProCZ - Placas'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE cartaz ------------------------------------------------------------------->
    
    
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
