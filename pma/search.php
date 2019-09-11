<?php get_header(); ?>

<div class="clear"></div>

<div id="content">
	<div id="lado-esquerdo">
		<?php $rstds = array(); ?>
		<h2>Resultado da Busca</h2>
				<?php if(have_posts()){ ?>
        <ul class="lista">
        <?php while (have_posts()) : the_post(); ?>
					<?php array_push($rstds, [get_the_title(), get_the_permalink(), get_the_date('Y-m-d'), get_the_date()]); ?>
                <!--<li><a href="<?php //the_permalink() ?>"><?php //the_title(); ?> - <?php //the_date(); ?></a></li> -->
        <?php endwhile;?>
        <?php } else{ echo "<p>Não há resultados para sua busca!</p>";}?>
				<?php
						usort($rstds, "maiorData");
				 ?>
				<?php foreach ($rstds as $rstd) { ?>
						<li><a href="<?php echo $rstd[1]; ?>"><?php echo $rstd[0]; ?> - <?php echo $rstd[3]; ?></a></li>
				<?php }	?>
        </ul>
	 </div><!-- lado-esquerdo -->
	  <div id="lado-direito">
	  	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->

    <div class="clear"></div>

</div><!-- content -->

<?php
	function maiorData($a, $b){
		$data1 = date($a[2]);
		$data2 = date($b[2]);
		if ($data1 == $data2) $r = 0;
		else $r = ($data1> $data2) ? -1: 1;
		return $r;
	}
?>

<?php get_footer(); ?>
