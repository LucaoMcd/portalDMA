<?php /** Template Name: Manuais PMA*/ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
		
		<h2>Manuais do PMA</h2>
		
		<div class="menu_manuais">
	       <ul>
				<li>Manuais para Conteúdo
					<ul>
						<li><a href="menu.php?arquivo=wp_painel">Acesso ao painel de controle Wordpress</a></li>
					</ul>
				</li>
				<li>Manuais para Desenvolvimento
					<ul>
						<li><a href="?page_id=26722">Acessos do PMA</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="conteudo_manuais">
			<?php the_content();?>
		</div>
    
    </div><!-- LADO ESQUERDO -->
    
    <div id="lado-direito">

    	<?php get_sidebar(); ?>
    </div><!-- LADO DIREITO -->
    
    <div class="clear">
    	
    </div>
</div><!-- CONTENT -->

<?php get_footer(); ?>

