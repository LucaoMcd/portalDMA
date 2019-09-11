<?php
/** Template Name: Todas as Notícias Destaques - HOME*/
get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">

		<!----------------------- NOTICIAS DESTAQUE -------------------------------------------------------------->
        <h2>Destaques da ufrn</h2>
				<div class="exibir-materias" style="display:flex; flex-direction: column; margin: 20px 0px 10px 10px;">
        <?php $paged = (get_query_var('paged')); get_query_var('paged'); ?>
        <?php query_posts('category_name=Destaques - HOME'.'&posts_per_page=8&paged=' .$paged);
							while (have_posts()) : the_post(); ?>
				<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id()); ?>
								<div class="item-materias" style="display:flex; flex-direction: row; margin-bottom: 10px;">
									<a href="<?php the_permalink() ?>"><img src="<?php echo $img[0]; ?>" width="100px" height="70px"/></a>
									<div style="display:flex; flex-direction: column; margin-left: 10px;">
										<p style="font-size:15px"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
										<p style="color:#777">
											<?php
													the_time('j \d\e F \d\e Y');
											?>
										</p>
									</div>
								</div>
        <?php endwhile;?>
        </div>
				<div style="text-align:center; margin-top:30px;">
				<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
				</div>
        <!----------------------- FIM NOTICIAS DESTAQUE ---------------------------------------------------------->

    </div><!-- lado-esquerdo -->

    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->

    <div class="clear"></div>

</div><!-- content -->



<?php get_footer(); ?>
