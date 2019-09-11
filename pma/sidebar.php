<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
<div class='clear' style='margin-bottom:10px;'></div>

<div class='clear' style='margin-bottom:10px;'></div>

<!-- INICIO BANNER DMA !-->
 
 
<ul id="banners-grandes"> 
    <?php query_posts('category_name=Banners grandes - HOME');
	the_post(); 
   		 the_content();  
   	?>
</ul> 
            <div class='clear' style='margin-top:10px;'></div>


<!-- FIM BANNER DMA !-->

 
<ul id="banners-grandes"> 
    <?php query_posts('category_name=Banners-blog grandes - HOME');
	the_post(); 
   		 the_content();  
   	?>
</ul> 
            

   
<div class='clear' style='margin-bottom:10px;'></div>  
   
<!-- <h3>Dicas de blogs</h3> 
    <ul class="banners-pequenos">  
    <?php query_posts('category_name=Dicas de blogs - HOME');
	for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</ul> --> 

<div class='clear' style='margin-bottom:10px;'></div>

<h3>Dicas de páginas</h3> 
    <ul class="banners-pequenos">   
    <?php query_posts('category_name=Dicas de paginas - HOME');
	the_post(); 
   		 the_content(); 
   	?>
</ul> 

<div class='clear' style='margin-bottom:10px;'></div>

<h3>Espaço Amazônia</h3> 
<ul class="banners-pequenos"> 
    <?php  query_posts('category_name=Banners espaco Amazonia - HOME');
		 the_post(); 
   		 the_content(); ?>
</ul> 

<div class='clear' style='margin-bottom:0px;'></div>

<div id="banners-grandes">  
    <?php query_posts('category_name=Banners grandes baixo - HOME');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   	endfor;?>
</div> 


