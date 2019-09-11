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

// LIMITE CARACTERES EXCERPT
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}

