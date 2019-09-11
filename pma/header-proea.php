<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title> <!--Title-->
    
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> <!--Metas-->
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /> <!--Style-->
    
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
     <?php wp_head(); ?>
     <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
     <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> <!--RSS-->
      
    <link rel="shortcut icon" href="pics/favicon.ico" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.tweet.css" />        
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.lightbox-0.5.css" media="screen" />     
    
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/pma/js/flash.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.lightbox-0.5.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tweet.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/resetDefaultValue.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/geral.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/circle.js"></script>
    
    <script type="text/javascript"> 
 
			function mostrar(nomeCamada){
 
				document.getElementById(nomeCamada).style.visibility = 'visible';
 
			}
 
			function ocultar(nomeCamada){
 
				document.getElementById(nomeCamada).style.visibility = 'hidden';
 
			}
 
		</script> 
        
        <script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>


</head>
<body>


<div id="wrapper">

	<div id="header2">
   	 <a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/pics/logo.png" alt="PMA - Portal de Meio Ambiente" name="logo" id="logo"  /></a>
     <img src="<?php bloginfo('template_directory'); ?>/pics/subtitle.png" id="subtitle" width:"400px" />
      <h1>Portal de Meio Ambiente da UFRN</h1>
      
    <div id="animacao">
   	  <a href="index.php"><img src="wp-content/themes/pma/pics/header_pma.jpg" alt="PMA - Portal de Meio Ambiente" name="logo" id="animacao"  /></a>
    </div>  <!--animacao--> 
      
    <div id="menu2">
        
        <ul id="linha1">
        	<li><a href="index.php">Início</a></li>
            <!--<li><a href="?page_id=527">Multimídia</a></li>
            <li><a href="?page_id=531">Cultura e Lazer</a></li>
            <li><a href="?page_id=533">Cidadania</a></li>
            <li><a href="?page_id=535">Portalzinho</a></li>
            <li><a href="?page_id=537">Páginas Relacionadas</a></li>-->
        </ul>
        
        <ul id="linha2">
   	    	<li id="data">
				<?php
                $meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => 										                "Novembro", 12 => "Dezembro");
                $diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
                $hoje = getdate();
                $dia = $hoje["mday"];
                $mes = $hoje["mon"];
                $nomemes = $meses[$mes];
                $ano = $hoje["year"];
                $diadasemana = $hoje["wday"];
                $nomediadasemana = $diasdasemana[$diadasemana];
                echo "$nomediadasemana, $dia de $nomemes de $ano";
                ?>
            </li>
            <li id="tempo"><a href="#" onclick="MM_openBrWindow('<?php bloginfo('template_directory'); ?>/previsao.html','Previsao','width=180,height=180')">Previsão do Tempo</a></li>
            <li id="mare"><a href="#" onclick="MM_openBrWindow('<?php bloginfo('template_directory'); ?>/mare.html','Mare','width=180,height=180')">Tábua de Maré</a></li>
			<li id="praia"><a href="http://programaaguaazul.rn.gov.br/sobre/balneabilidade/" target="_blank">Praia Limpa</a></li>
            <li>
            <ul class='sociais'>
	    <li><a href='http://pt-br.facebook.com/people/Portal-Ma-da-Ufrn/100001878621163' id='facebook' target='_blank'></a></li>
    	<li><a href='http://twitter.com/#!/PortalMAmbiente' id='twitter' target='_blank'></a></li>
    		</ul></li>
        </ul>
        <span id="diretoria"><a href="?page_id=539">Diretoria de Meio Ambiente</a></span>
        <a></a>
        <a href="http://www.infra.ufrn.br" id="sin-logo"></a>
        <a href="http://www.sistemas.ufrn.br/portalufrn/PT/;jsessionid=55A12FB2E4DA8E4E2A549DBA9C7F9189.sistemas2i2" target="_blank"; id="ufrn-logo"></a>
        <span id="pesquisa"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("pesquisa") ) : ?><?php endif; ?></span>
        
        <div class="clear"></div>
        
        <ul id="linha3">
        	<li><a href="?page_id=1359" id="bt01">DMAComunica</a></li>
            <li><a href="?page_id=1361" id="bt02">PROArvore</a></li>
            <li><a href="?page_id=1363" id="bt03">PROGires</a></li>
            <li><a href="?page_id=1365" id="bt04">PROAgua</a></li>
            <li><a href="proea/index.php" id="bt05">PROEA</a></li>
            <li><a href="?page_id=1369" id="bt06">PROEE</a></li>
            <li><a href="?page_id=1371" id="bt07">PROCZ</a></li>
            <li style="margin-right:0px !important;"><a href="http://www.meioambiente.ufrn.br/ete/" id="bt08">ETE</a></li>
        </ul>
        
    </div><!--menu-->  
       
    </div><!-- header -->
