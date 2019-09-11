<?php get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">    
		<?php the_post()?>
        <h2><?php the_title(); ?></h2>
        <p><small>Divulgado em: <?php the_time('d/m/Y ') ?></small></p>
        <?php the_content(); ?>  
		<?php
			$categoria = get_the_category();
			$tamanho_cat = count($categoria);
			for($i=0; $i <= $tamanho_cat; $i++)
			{
				$nomeCategoria = $categoria[$i]->cat_name;
				if($nomeCategoria == "Brasil - HOME")
				{
					echo "<br /><br /><h4 align='right'><b><a href='http://www.meioambiente.ufrn.br/?page_id=17' class='botao2'>Todas as not&iacute;cias.</a></b><br></h4>";
					break;
				}
				elseif($nomeCategoria == "Natal - HOME")
				{
					echo "<br /><br /><h4 align='right'><b><a href='http://www.meioambiente.ufrn.br/?page_id=19' class='botao2'>Todas as not&iacute;cias.</a></b><br></h4>";
					break;
				}
				elseif($nomeCategoria == "Destaques - HOME")
				{
					echo "<br /><br /><h4 align='right'><b><a href='http://www.meioambiente.ufrn.br/?page_id=23'class='botao2'>Todas as not&iacute;cias.</a></b><br></h4>";
					break;
				}
			}
		?>
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>

</div><!-- content -->

<?php get_footer(); ?>
