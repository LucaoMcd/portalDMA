<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
<div class='clear' style='margin-bottom:0px;'></div>

<div class='clear' style='margin-bottom:10px;'></div>

<!-- INICIO BANNER DMA !-->
<div id="banners-grandes">  
    <?php query_posts('category_name=Banners Grandes - PROGIRES');
	the_post(); the_content(); ?>
</div> 

<div class='clear' style='margin-bottom:10px;'></div>
            
<!-- FIM BANNER DMA !-->




<div class='clear' style='margin-bottom:10px;'></div>

<h3>Dicas de páginas</h3> 
    <ul class="banners-pequenos">  
    <?php query_posts('category_name=Dicas de paginas - PROGIRES');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</ul> 

<div class='clear' style='margin-bottom:10px;'></div>

<div id="banners-grandes">  
    <?php query_posts('category_name=Banners grandes baixo - PROGIRES');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</div> 