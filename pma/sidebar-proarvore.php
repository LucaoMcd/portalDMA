<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
<div class='clear' style='margin-bottom:0px;'></div>

<div class='clear' style='margin-bottom:10px;'></div>

<!-- INICIO BANNER DMA !-->
<ul id="banners-grandes"> 
    <?php query_posts('category_name=Banners grandes - ProArvore');
	the_post(); 
   		 the_content();  
   	?>
</ul> 
      <div class='clear' style='margin-bottom:10px;'></div>

<!-- FIM BANNER DMA !-->


   
<!--<h3>Dicas de blogs</h3> 
    <ul class="banners-pequenos">  
    <?php query_posts('category_name=Dicas de blogs - HOME');
	for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</ul>--> 

<div class='clear' style='margin-bottom:10px;'></div>

<h3>Dicas de páginas</h3> 
    <ul class="banners-pequenos">   
    <?php query_posts('category_name=Dicas de paginas - PROARVORE');
	the_post(); 
   		 the_content(); 
   	?>
</ul> 

<h3>Espaço Amazônia</h3> 
<ul class="banners-pequenos"> 
    <?php  query_posts('category_name=Banners espaco Amazonia - HOME');
		 the_post(); 
   		 the_content(); ?>
</ul> 

<div id="banners-grandes">  
    <?php query_posts('category_name=Banners grandes baixo - HOME');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</div> 



