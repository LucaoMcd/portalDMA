<?php /** Template Name: Todas as Galerias de Imagens */ get_header(); ?>

<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">
        
        <!-- TODAS AS GALERIAS DE IMAGENS -->
        <h2>Galeria de imagens</h2>
        <?php $paged = (get_query_var('paged')); get_query_var('paged') ; ?>
       <!--- <?php query_posts('category_name=Album - HOME' .'&paged=' .$paged); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>     
        <?php endwhile;?> --->   
        <div style="text-align:center; margin-top:0px;">
<h5><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></h5>
</div>
        <!-- FIM DE TODAS AS GALERIAS DE IMAGENS -->
    
     <div class="clear"></div>
        
     
        <ul class="lista">
        	<li><a href="?page_id=3719">A&ccedil;&otilde;es da Superintend&ecirc;ncia de Infraestrutura</a></li>
            <li><a href="?page_id=24709">CIENTEC</a></li>
            <li><a href="?page_id=3233">Coleta Seletiva Solid&aacute;ria</a></li>
            <li><a href="?page_id=2549">Expedi&ccedil;&otilde;es</a></li>
            <li><a href="?page_id=2586">Exposi&ccedil;&otilde;es Itinerantes e Interativas</a></li>
            <li><a href="?page_id=2588">Semana de Meio Ambiente da UFRN - Sema</a></li>
            <!-- <li><a href="?page_id=2591">Paisagens do Campus</a></li> -->
            <li><a href="?page_id=3788">Programa de Arboriza&ccedil;&atilde;o</a></li>
            <li><a href="?page_id=3722">Programa de Controle de Qualidade da &Aacute;gua</a></li>
            <li><a href="?page_id=3730">Programa de Controle de Zoonoses</a></li>
			<li><a href="?page_id=12196">RIO +20</a></li>
            <li><a href="?page_id=32219">Sembragires</a></li>
            <li><a href="?page_id=33340">UFRN sem mosquito</a></li>
            <li><a href="?page_id=35492">Semana de Ecologia - UFRN</a></li>
         </ul>
    
    
    
    </div><!-- lado-esquerdo -->
    
    <div id="lado-direito">
    	<?php get_sidebar(); ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>
