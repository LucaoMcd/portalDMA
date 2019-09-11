<?php

// Tornar o template disponível para tradução
// A tradução pode ser feita em /languages/
load_theme_textdomain( 'your-theme', TEMPLATEPATH . '/languages' );
 
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable($locale_file) )
   require_once($locale_file);
 
// Puxar o número de página
function get_page_number() {
          if ( get_query_var('paged') ) {
              print ' | ' . __( 'Page ' , 'seu-template') . get_query_var('paged');
         }
 } // fim de get_page_number	
 
if ( function_exists('register_sidebar') )
    register_sidebar();
	
// inclusão dos thumbnails	
if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 140, 204, true );} // default Post Thumbnail dimensions (cropped) 
}

// ÁREA DE WIDGETS - PESQUISA
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'pesquisa',
'before_widget' => '<li>',
'after_widget' => '</li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

// ÁREA DE WIDGETS - SIDEBAR DA HOME
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebar-home',
'before_widget' => '<li>',
'after_widget' => '</li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

// ÁREA DE WIDGETS - SIDEBAR DE MULTIMIDIA
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebar-multimidia',
'before_widget' => '<li>',
'after_widget' => '</li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

// ÁREA DE WIDGETS - SIDEBAR DE MURAL
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebar-mural',
'before_widget' => '<li>',
'after_widget' => '</li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

// ÁREA DE WIDGETS - SIDEBAR DE CULTURA E LAZER
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebar-cultura-lazer',
'before_widget' => '<li>',
'after_widget' => '</li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

// ÁREA DE WIDGETS - SIDEBAR DE CIDADANIA
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebar-cidadania',
'before_widget' => '<li>',
'after_widget' => '</li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

// ÁREA DE WIDGETS - SIDEBAR DE PORTALZINHO
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'sidebar-portalzinho',
'before_widget' => '<li>',
'after_widget' => '</li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

// WIDGET DAS REDES SOCIAIS
wp_register_sidebar_widget ( 
	'widget-redes-sociais',		// ID
	'Texto: Redes Sociais',		// TÍTULO
	'redes_sociais'			// NOME DA FUNÇÃO
	);

function redes_sociais() {
	echo "
	<div class='clear' style='margin-bottom:0px;'></div>
	<h3>Redes sociais</h3>
	<ul class='sociais'>
	<li><a href='#' id='orkut'></a></li>
    <li><a href='http://pt-br.facebook.com/people/Portal-Ma-da-Ufrn/100001878621163' id='facebook' target='_blank'></a></li>
    <li><a href='http://twitter.com/#!/PortalMAmbiente' id='twitter' target='_blank'></a></li>
    <li><a href='http://www.meioambiente.ufrn.br/blogdadma/?p=326' id='blog' target='_blank'></a></li>
</ul>
<div class='clear' style='margin-bottom:10px;'></div>
";
	}
	
//	WIDGET DO BLOG DMA
wp_register_sidebar_widget('widget-blog-dma','texto: BLOG-DMA','blog_dma');
	
 function blog_dma(){
	echo "<div id='blog-dma'>   
       <h3>Blog da DMA</h3>";  
	   query_posts('category_name=Blog - HOME');
	   for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); 
	        the_content(); 
			echo "<div class='clear' style='margin-bottom:10px;'></div>";
       endfor;   
      echo "</div> <div class='clear' style='margin-bottom:10px;'></div>";
}

// WIDGET BANNERS GRANDES
wp_register_sidebar_widget('widget-banners-grandes','texto: Banners Grandes','banners_grandes');
	
function banners_grandes(){
	echo '<ul id="banners-grandes">';   
    query_posts('category_name=Banners grandes - HOME');
	for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); 
   		 the_content();  
   		 endfor;
   echo "</ul> <div class='clear' style='margin-bottom:10px;'></div>";
}

// WIDGET BANNERS GRANDES - MULTIMIDIA
wp_register_sidebar_widget('widget-banners-grandes-multimia','texto: Banners Grandes Multimidia','banners_grandes_multimidia');
	
function banners_grandes_multimidia(){
	echo '<div id="banners-grandes">';   
    query_posts('category_name=Banners grandes - MULTIMIDIA');
	for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); 
   		 the_content(); 
   		 endfor;
   echo "</div> <div class='clear' style='margin-bottom:10px;'></div>";
}

// WIDGET BANNERS GRANDES - MURAL
wp_register_sidebar_widget('widget-banners-grandes-mural','texto: Banners Grandes - Mural','banners_grandes');
	
function banners_grandes_mural(){
	echo '<div id="banners-grandes">';   
    query_posts('category_name=Banners grandes - MURAL');
	for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); 
   		 the_content(); 
   		 endfor;
   echo "</div> <div class='clear' style='margin-bottom:10px;'></div>";
}

// WIDGET BANNERS GRANDES - CULTURA E LAZER
wp_register_sidebar_widget('widget-banners-grandes-cultura','texto: Banners Grandes Cultura e Lazer','banners_grandes_cultura');
	
function banners_grandes_cultura(){
	echo '<div id="banners-grandes">';   
    query_posts('category_name=Banners grandes - CULTURA E LAZER');
	for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); 
   		 the_content(); 
   		 endfor;
   echo "</div> <div class='clear' style='margin-bottom:10px;'></div>";
}

// WIDGET BANNERS GRANDES - CIDADANIA
wp_register_sidebar_widget('widget-banners-grandes-cidadania','texto: Banners Grandes Cidadania','banners_grandes_cidadania');
	
function banners_grandes_cidadania(){
	echo '<div id="banners-grandes">';   
    query_posts('category_name=Banners grandes - CIDADANIA');
	for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); 
   		 the_content(); 
   		 endfor;
   echo "</div> <div class='clear' style='margin-bottom:10px;'></div>";
}

// WIDGET BANNERS GRANDES - PORTALZINHO
wp_register_sidebar_widget('widget-banners-grandes-portalzinho','texto: Banners Grandes Portalzinho','banners_grandes_portalzinho');
	
function banners_grandes_portalzinho(){
	echo '<div id="banners-grandes">';   
    query_posts('category_name=Banners grandes - PORTALZINHO');
	for ( $retranca = 1; $retranca <=2; $retranca++ ) : the_post(); 
   		 the_content(); 
   		 endfor;
   echo "</div> <div class='clear' style='margin-bottom:10px;'></div>";
}

// WIDGET DAS DICAS DE BLOG
wp_register_sidebar_widget('widget-dicas-blogs','texto: Dicas de blogs','dicas_de_blogs');
	
function dicas_de_blogs(){
	echo ' <h3>Dicas de blogs</h3> 
    <ul class="banners-pequenos">';   
    query_posts('category_name=Dicas de blogs - HOME');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   		 endfor;
   echo "</ul> <div class='clear' style='margin-bottom:10px;'></div>";
}

// WIDGET DAS DICAS DE PÁGINAS
wp_register_sidebar_widget('widget-dicas-de-paginas','texto: Dicas de paginas','dicas_de_paginas');
	
function dicas_de_paginas()
{
	echo ' <h3>Dicas de páginas</h3> 
    <ul class="banners-pequenos">';   
    query_posts('category_name=Dicas de paginas - HOME');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   		 endfor;
   echo "</ul> <div class='clear' style='margin-bottom:10px;'></div>";
}

// WIDGET BANNERS MOVIMENTOS AMBIENTAIS
wp_register_sidebar_widget('widget-movimentos-ambientais','texto: Movimentos Ambientais','movimentos_ambientais');
	
function movimentos_ambientais(){
	echo ' <h3></h3> 
    <ul class="box1">';   
    query_posts('category_name=Banners movimentos ambientais - HOME');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   		 endfor;
   echo "</ul> <div class='clear' style='margin-bottom:10px;'></div>";
}

// WIDGET BANNERS CAMPANHAS
wp_register_sidebar_widget('widget-campanhas','texto: Campanhas','campanhas');
	
function campanhas(){
	echo '<h3>Campanhas e Movimentos Ambientais</h3>
	<ul class="box1">';   
    query_posts('category_name=Banners campanhas e Movimentos - HOME');
	for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); 
   		 the_content(); 
   		 endfor;
   echo "</ul> <div class='clear' style='margin-bottom:10px;'></div>";
}

?>
