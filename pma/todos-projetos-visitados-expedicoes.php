<?php /** Template Name: Todos Projetos Expediçoes*/ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">

		<h2>PROJETOS VISITADOS - EXPEDIÇÕES</h2>
		 <ul class="lista">
		 <?php query_posts('category_name=Lugares e Projetos visitados - Expedicoes');  while (have_posts()) : the_post(); ?>
		 							<li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(28); ?></a></li>
		 				<?php endwhile;?>
		 </ul>
    </div><!-- lado-esquerdo -->

    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->

    <div class="clear"></div>

</div><!-- content -->



<?php get_footer(); ?>
