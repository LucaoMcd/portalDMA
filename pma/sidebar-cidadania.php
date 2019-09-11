<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
<div class='clear' style='margin-bottom:0px;'></div>
	

<div class='clear' style='margin-bottom:10px;'></div>

<div id='blog-dma'>   
       <h3>Blog da DMA</h3>  
	   <?php query_posts('category_name=Blog - HOME');
	   for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); 
	        the_content(); ?>
		<div class='clear' style='margin-bottom:10px;'></div>
       <?php endfor; ?>         
</div> 

<div class='clear' style='margin-bottom:10px;'></div>

<div id="banners-grandes">  
    <?php query_posts('category_name=Banners grandes - CIDADANIA');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</div> 

<!--<h3>Dicas de blogs</h3> 
    <ul class="banners-pequenos">  
    <?php query_posts('category_name=Dicas de blogs - CIDADANIA');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</ul>--> 

<h3>Dicas de páginas</h3> 
    <ul class="banners-pequenos">  
    <?php query_posts('category_name=Dicas de paginas - CIDADANIA');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</ul> 

<div id="banners-grandes">  
    <?php query_posts('category_name=Banners grandes baixo - CIDADANIA');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</div> 

<div class='clear' style='margin-bottom:10px;'></div>
