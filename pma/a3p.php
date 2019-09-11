<div id="content_geral">

<?php /** Template Name: A3P*/ include "header.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
       	<!----------------------- SOBRE A3P -------------------------------------------------------------->
        <h2>Agenda Ambiental na Administração Pública – A3P</h2>        
        <ul class="lista">
		<?php query_posts('category_name=Sobre - A3P'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>
            	<li style="text-align:justify;"><?php the_excerpt(); ?></li>      
        <?php endfor;?>
        </ul>
        <a href="?p=24053" class="botao">Saiba Mais</a>      
        <!----------------------- FIM SOBRE A3P ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>

        <!----------------------- Destaques A3P -------------------------------------------------------------->
        <!--
        <h2>Notícias da A3P</h2>
        <ul class="lista">
        <?php query_posts('category_name=Destaques - A3P'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>            
                <li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(22); ?></a></li>            
        <?php endfor;?>
        </ul>
        <a href="?page_id=24061" class="botao4">Notícias Relacionadas</a>
    	-->


    	<div class="clear" style="margin-bottom:10px;"></div>
		 
	 	<!----------------------- Relatorios A3P ------------------------------------------>
     
       	<h2>Cartilhas da A3P</h2>
	       	<table>
	       		<tr>
	       			<td>
	       				<?php query_posts('category_name=Cartilha A3P Completa'); the_post(); ?>
		  				<?php the_content(); ?>	
	       			</td>
	       			<td>
	       				<?php query_posts('category_name=Cartilha A3P Implantar'); the_post(); ?>
		  				<?php the_content(); ?>	
	       			</td>
	       		</tr>
	       	</table> 

       	<div class="clear" style="margin-bottom:10px;"></div>

       	<!----------------------- Relatorios A3P ------------------------------------------>
        <!--<div class='box11'>   
	        <h7>Relatórios da A3P</h7>
		    <?php query_posts('category_name=Banner A3P Relatório'); the_post(); ?>
		    <?php the_content(); ?><div class="clear" style="margin-bottom:10px;"></div>
	    	<a href="http://www.meioambiente.ufrn.br/?p=24106" class="botao4">Todos os relatórios</a>
		</div> -->
       	
       	<!----------------------- Dicas PROAGUA ------------------------------------------>
        <!--<div class='box9'>   
        	<h7>Dicas da DMA</h7>
		    <?php query_posts('category_name=Banner A3P dicas'); the_post(); ?>
		    <?php the_content(); ?><div class="clear" style="margin-bottom:10px;"></div>
		    <a href="http://www.meioambiente.ufrn.br/?p=24109" target="_blank" class="botao4">Saiba mais</a>
		</div> -->
	  	
	</div><!-- lado-direito -->
    
	<div id="lado-direito">
		<?php include "sidebar.php"; ?>
	</div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>

</div>
