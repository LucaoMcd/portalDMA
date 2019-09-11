?<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/flash.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.lightbox-0.5.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tweet.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/resetDefaultValue.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/geral.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/circle.js"></script>
    <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
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

	<div id="header">
   	  <a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/pics/logo.png" alt="PMA - Portal de Meio Ambiente" name="logo" id="logo"  /></a>
      <h1>Portal de Meio Ambiente da UFRN</h1>
      
    <div id="animacao">
   	  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="366" height="178">
    	  <param name="movie" value="<?php bloginfo('template_directory'); ?>/Flash/animacao-portal.swf" />
    	  <param name="quality" value="high" />
    	  <param name="wmode" value="opaque" />
    	  <param name="swfversion" value="9.0.45.0" />
    	  <!-- Esta tag param solicita que os usuários com o Flash Player 6.0 r65 e versões posteriores baixem a versão mais recente do Flash Player. Exclua-o se você não deseja que os usuários vejam o prompt. -->
    	  <param name="expressinstall" value="Scripts/expressInstall.swf" />
    	  <!-- A tag object a seguir aplica-se a navegadores que não sejam o IE. Portanto, oculte-a do IE usando o IECC. -->
    	  <!--[if !IE]>-->
    	  <object type="application/x-shockwave-flash" data="<?php bloginfo('template_directory'); ?>/Flash/animacao-portal.swf" width="366" height="178">
    	    <!--<![endif]-->
    	    <param name="quality" value="high" />
    	    <param name="wmode" value="opaque" />
    	    <param name="swfversion" value="9.0.45.0" />
    	    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    	    <!-- O navegador exibe o seguinte conteúdo alternativo para usuários que tenham o Flash Player 6.0 e versões anteriores. -->
    	    <div>
    	      <h4>O conte&uacute;do desta p&aacute;gina requer uma vers&atilde;o mais recente do Adobe Flash Player.</h4>
    	      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obter Adobe Flash player" width="112" height="33" /></a></p>
  	      </div>
    	    <!--[if !IE]>-->
  	    </object>
    	  <!--<![endif]-->
  	  </object>
    </div>  <!--animacao--> 
      
    <div id="menu">
    	<ul id="linha1">
        	<li><a href="index.php">Início</a></li>
            <li><a href="http://www.meioambiente.ufrn.br/conteudo/multimidia/index.php">Multimídia</a></li>
            <li><a href="http://www.meioambiente.ufrn.br/conteudo/cultura/cultura.php">Cultura e Lazer</a></li>
            <li><a href="http://www.meioambiente.ufrn.br/conteudo/cidadania/index3.php">Cidadania</a></li>
            <li><a href="http://www.meioambiente.ufrn.br/conteudo/portalzinho/portalzinho.php">Portalzinho</a></li>
            <li><a href="http://www.meioambiente.ufrn.br/conteudo/paginas/paginas.php">Páginas Relacionadas</a></li>
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
            <li id="praia"><a href="http://www.cefetrn.br/programaaguaazul/balneabilidade.php" target="_blank">Praia Limpa</a></li>
        </ul>
        <span id="diretoria"><a href="#">Diretoria de Meio Ambiente</a></span>
        <a href="#" id="dma-logo"></a>
        <a href="#" id="sin-logo" target="_blank"></a>
        <a href="http://www.sistemas.ufrn.br/portalufrn/PT/;jsessionid=55A12FB2E4DA8E4E2A549DBA9C7F9189.sistemas2i2" target="_blank"; id="ufrn-logo"></a>
        <span id="pesquisa"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("pesquisa") ) : ?><?php endif; ?></span>
    </div><!--menu-->  
       
    </div><!-- header -->
    <script type="text/javascript">
swfobject.registerObject("FlashID");
    </script>