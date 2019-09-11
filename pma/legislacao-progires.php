<?php /** Template Name: Legislacao ProGires*/ include "header-progires.php"; ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
            <!-----------------------Legislação PROGIRES  --------------------------------------------------------------------------->        
            <ul class="lista">
            	<h2>Legisla&ccedil;&atilde;o - ProGIRES</h2>
				<?php query_posts('category_name=Legislacao - PROGIRES'); for ( $retranca = 1; $retranca <=20; $retranca++ ) : the_post(); ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_content(); ?></a></li>      
                <?php endfor;?>
                <!--<a href="http://www.meioambiente.ufrn.br/?p=3655" class="botao">Ver mais</a>-->               
            </ul>        
        <!----------------------- FIM DE Legislação PROGIRES ------------------------------------------------------------------->  
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
    
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-progires.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>