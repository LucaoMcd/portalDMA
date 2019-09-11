<div id="content_geral">

<?php /** Template Name: ProGires*/ include "header-progires.php"; ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- sobre PROGIRES -------------------------------------------------------------->
        <h2>PROGRAMA DE GESTÃO INTEGRADA DE RESÍDUOS - PROGIRES</h2>        
		<ul class="lista">
		<?php query_posts('category_name=Sobre - PROGIRES'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
            	<li style="text-align:justify;"><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></li>      
        <?php endfor;?>
        </ul>
        <a href="?p=3826" class="botao">Saiba Mais</a>   
        <!----------------------- FIM sobre PROGIRES ---------------------------------------------------------->
        <div class="clear"></div>
        
         <!----------------------- Destaques progires -------------------------------------------------------------->
        
        <h2>Notícias do ProGIRES</h2>
        <ul class="lista">
        <?php query_posts('category_name=Destaques - PROGIRES'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>            
                <li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(22); ?></a></li>            
        <?php endfor;?>
        </ul>
        <a href="http://www.meioambiente.ufrn.br/?page_id=7762" class="botao4">Notícias Relacionadas</a>
        <!----------------------- FIM Destaques progires ---------------------------------------------------------->
		
		<div class="clear"></div>
		
		<!----------------------- O PROJETO PROGIRES ------------------------------------------>
        <div class='box11'>   
       <h7>Coleta Seletiva Solidária - O Projeto</h7>
	   <?php query_posts('category_name=ProGIRES - o projeto'); the_post(); ?>
	   <?php the_content(); ?>
	    <a href="?p=8959" class="botao4">As etapas da CSS</a>
		</div> 
      
       <!----------------------- FIM DE O PROJETO PROGIRES ------------------------------------------>
	   
	   
	   <!----------------------- CAMPANHA PROGIRES ------------------------------------------>
        <div class='box12'>   
       <h7>CSS da UFRN</h7>
	   <?php query_posts('category_name=ProGIRES - campanha'); the_post(); ?>
	   <?php the_content(); ?>
	    <a href="#" class="botao4">Conheça a UATR</a>
		</div> 
      
       <!----------------------- FIM DE CAMPANHA PROGIRES ------------------------------------------>
	   
	   <div class="clear"></div>
	   
		<!----------------------- RELATÓRIOS PROGIRES ------------------------------------------>
        <div class='box9'>   
       <h7>Relatórios ProGIRES</h7>
	   <?php query_posts('category_name=Banner progires relatorio'); the_post(); ?>
	   <?php the_content(); ?>
	    <a href="http://www.meioambiente.ufrn.br/?p=8699" class="botao4">Todos os relatórios</a>
		</div> 
      
       <!----------------------- FIM DE RELATÓRIOS PROGIRES ------------------------------------------>
		
		<!----------------------- CAMPANHAS PROGIRES ------------------------------------------>
        <div class='box9'>   
       <h7>Campanhas</h7>
	   <?php query_posts('category_name=ProGIRES - campanhas'); the_post(); ?>
	   <?php the_content(); ?>
	    <a href="?page_id=9063" class="botao4">Todas as Campanhas</a>
		</div> 
      
       <!----------------------- FIM DE CAMPANHAS PROGIRES ------------------------------------------>
		
		<!----------------------- LEGISLACAO PROGIRES ------------------------------------------>
        
		<div class='box9'>   
       <h7>Legislação</h7>
	   <?php query_posts('category_name=Banner progires legislacao'); the_post(); ?>
	   <?php the_content(); ?>
	    <a href="?page_id=9061" class="botao5">Legislação sobre res&iacute;duos</a>
		</div> 
      
       <!----------------------- FIM DE LEGISLACAO PROGIRES ------------------------------------------>
		
					   
	    <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- INICIO EVENTOS ------------------------------------------------------------------->
        <a href="?page_id=494"><img src="<?php bloginfo('template_directory'); ?>/pics/banner-calendario.jpg" alt="" name="" style="width:665px;"/>  </a> 
        <!----------------------- FIM EVENTOS ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
 
        <!----------------------- GALERIA DE IMAGENS --------------------------------------------------------------------------->        
        	<ul class="box1 galeria">
			<h2>Galeria de Imagens</h2>
            <?php query_posts('category_name=Destaques - PROGIRES'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
            
			<div class="box-teste">
				<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
				</div>
			<?php endfor;?>		
			 <div class="clear" style="margin-bottom:10px;"><br />
             <a href="?page_id=3233" class="botao5">Todas as galerias ProGIRES</a>
             </div>
			</ul>
        <!----------------------- FIM DE GALERIA DE IMAGENS -------------------------------------------------------------------> 
        
                
       		
		     <!----------------------- VIDEOS PROGIRES --------------------------------------------------------------------------->        
            <div class="box2">
            	<h2>Cine - Videos Verde</h2>
                <?php query_posts('category_name=Videos - PROGIRES'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endfor;?>
                <a href="?page_id=9632" class="botao6" style="margin-top:8px;">Todos os cine-vídeos sobre res&iacute;duos</a>
            </div>        
        <!----------------------- FIM DE VIDEOS PROGIRES ------------------------------------------------------------------->
        
		    <div class="clear" style="margin-bottom:10px;"></div>
		
    
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-progires.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
</div>