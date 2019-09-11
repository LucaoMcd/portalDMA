<?php /** Template Name: informativos 2012*/ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                <h2>Informativos DMA 2012</h2>

		<ul class="lista"> 
        <?php $paged = (get_query_var('paged')); get_query_var('paged') ; ?> 
        <?php query_posts('category_name=Informativos DMA 2012' 
.'&paged=' .$paged); while (have_posts()) : the_post(); ?>                      	
                <li><a target="_blank" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>            
        <?php endwhile;?>
        </ul>
				
				
<div style="text-align:center; margin-top:60px;">
<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
</div>		
		
	<h4>
		<a href="http://www.meioambiente.ufrn.br/?page_id=21175" style="margin-left:350px;">&#187; 2014</a>
		<a href="http://www.meioambiente.ufrn.br/?page_id=16367"> &#187; 2013</a>
		<a href="http://www.meioambiente.ufrn.br/?page_id=6312"> &#187; 2011</a>
		<a href="http://www.meioambiente.ufrn.br/?page_id=6305"> &#187; 2010</a>
		<a href="http://www.meioambiente.ufrn.br/?page_id=8237"> &#187; 2009</a>
		<a href="http://www.meioambiente.ufrn.br/?page_id=8392"> &#187; 2008</a>
		<a href="http://www.meioambiente.ufrn.br/?page_id=8414"> &#187; 2007</a>
	</h4>
		
    
    </div><!-- LADO ESQUERDO -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- LADO DIREITO -->
    
    <div class="clear"></div>
	
</div><!-- CONTENT -->



<?php get_footer(); ?>
