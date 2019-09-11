<?php /** Template Name: Legislacao ProAgua*/ include "header-proagua.php"; ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
            <!-----------------------Legislação PROAgua  --------------------------------------------------------------------------->        
            <ul class="lista">
            	<h2>Legisla&ccedil;&atilde;o - ProAGUA</h2>
				<?php query_posts('category_name=Legislacao - PROAgua'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_content(); ?></a></li>      
                <?php endfor;?>
                <!--<a href="http://www.meioambiente.ufrn.br/?p=3655" class="botao">Ver mais</a>-->               
            </ul>        
        <!----------------------- FIM DE Legislação PROAgua ------------------------------------------------------------------->  
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
    
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-proagua.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>