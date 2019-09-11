<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
<div class='clear' style='margin-bottom:0px;'></div>
	
<div class='clear' style='margin-bottom:10px;'></div>

<ul id="banners-grandes"> 
    <?php query_posts('category_name=Banners grandes - HOME DMA');
	the_post(); 
   		 the_content();  
   	?>
</ul> 

<div class='clear' style='margin-bottom:10px;'></div>

<div id="banners-grandes">  
    <?php query_posts('category_name=Banners grandes - DMA');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</div> 

<!--<h3>Dicas de blogs</h3> 
    <ul class="banners-pequenos">  
    <?php query_posts('category_name=Dicas de blogs - HOME');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</ul>--> 
<div class='clear' style='margin-bottom:10px;'></div>

<h3>Dicas de páginas</h3> 
    <ul class="banners-pequenos">  
    <?php query_posts('category_name=Dicas de paginas - HOME');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</ul> 

<div id="banners-grandes">  
    <?php query_posts('category_name=Banners grandes baixo - DMA');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</div> 


