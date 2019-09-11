<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); get_page_number(); }
	elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title> <!--Title-->
	

	<!--<meta name="description" content="<?php /*bloginfo('description');*/?>" />-->


    <meta property="og:image" content="<?php echo site_url(); ?>/wp-content/themes/pma/pics/header_pma.jpg"/>

	
    <div style="visibility: hidden" itemscope itemtype="http://data-vocabulary.org/Organization">
	<span itemprop="name">Portal de Meio Ambiente (PMA)</span> 	
        <a href="<?php echo site_url(); ?>/" itemprop="url">meioambiente.ufrn.br</a> 
  	<span itemprop="address">Brasil - Natal,Rn - Campus UFRN</span> 	
    </div>



    <!--<meta name="decricao" content="Primeiro meio de comunicação eletrônica produzido pela DMA, o Portal de Meio Ambiente (PMA) da UFRN foi criado para ser um dos instrumentos de 	divulgação da Política de Meio Ambiente da UFRN implantada pela Diretoria de Meio Ambiente (DMA)" />     -->

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
    

    <!-- testando a fonte -->
    <!--<link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption' rel='stylesheet' type='text/css'>-->
    <!--<link href='http://fonts.googleapis.com/css?family=Telex' rel='stylesheet' type='text/css'>-->
    <!-- testando a fonte -->

    
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/flash.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.7.2.custom.min.js"></script>
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

<!-- alteração -->


<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<code><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.7.2.custom.min.js"></script>  
</code>  


<style type="text/css" >
	#featured .ui-tabs-panel .info{
		display:none;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured").tabs({fx:[{opacity: "toggle", duration: 'slow'}, {opacity: "toggle", duration: 'normal'}],
			show: function(event, ui){
				$('#featured .ui-tabs-panel .info').hide();
				var infoheight=$('.info', ui.panel).height();
				$('.info', ui.panel).css('height', '0px').animate({ 'height': infoheight }, 500);
			}
		}).tabs("rotate", 5000, true);
		$('#featured').hover(
			function(){ $('#featured').tabs('rotate', 0, true); },
			function(){ $('#featured').tabs('rotate', 5000, true); }
		);
		
	});
</script>
<!-- alteração -->

</head>

<div id="wrapper">

	<div id="header">
   	  <!--<a href="../index.php"><img src="<?php bloginfo('template_directory'); ?>/pics/titulo_index.png" alt="PMA - Portal de Meio Ambiente" name="logo" id="logo"  /></a>-->
      <!--<h1>Portal de Meio Ambiente da UFRN</h1>
      <img id="subtitle" 400px="" width:="" src="<?php echo site_url(); ?>/wp-content/themes/pma/pics/subtitle.png">-->
      
    <div id="animacao">     
     <a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/pics/header_pma.jpg" alt="PMA - Portal de Meio Ambiente" name="logo" id="animacao"  /></a>
    </div>  <!--animacao--> 
      
    <div id="menu">
    	<div id="primeiraLinha">
			<span id="data">
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
		    </span>
		</div>
		
		<div id="segundaLinha">
	        <ul class="menu">

		        <li class="item"><a href="<?php echo site_url(); ?>">Início</a></li>
		        <li class="item"><a href="<?php echo site_url(); ?>/?page_id=539">DMA</a></li>
		        <li class="item"><a>Programas</a>
		
			        <ul class="submenu">
		
				        <li class="subitem"><a href="<?php echo site_url(); ?>/?page_id=1359">DMAComunica</a></li>
				        <li class="subitem"><a href="<?php echo site_url(); ?>/?page_id=1361">ProARVORE</a></li>
				        <li class="subitem"><a href="<?php echo site_url(); ?>/?page_id=1363">ProGIRES</a></li>
				        <li class="subitem"><a href="<?php echo site_url(); ?>/?page_id=1365">ProAGUA</a></li>
				        <li class="subitem"><a href="<?php echo site_url(); ?>/?page_id=1371">ProCZ</a></li>
				        <li class="subitem"><a href="<?php echo site_url(); ?>/?page_id=1369">ProEE</a></li>
				        <li class="subitem"><a href="<?php echo site_url(); ?>/proea/">ProEA</a></li>
				        <li class="subitem"><a href="<?php echo site_url(); ?>/ete/">ETE</a></li>
				        <li class="subitem"><a href="<?php echo site_url(); ?>/?page_id=24051">A3P</a></li>
			
		
			        </ul>
		
		        </li>
		        <li class="item"><a>Interatividade</a>
	
			        <ul class="submenu">
		
				        <li class="subitem"><a href="<?php echo site_url(); ?>/?page_id=21175">Informativo DMA</a></li>
				        <!--<li class="subitem"><a target="_blank" href="<?php echo site_url(); ?>/blogdadma/">Blog da DMA</a></li>-->
				        <li class="subitem"><a target="_blank" href="https://www.facebook.com/dmacomunica">Facebook</a></li>
				        <li class="subitem"><a target="_blank" href="https://twitter.com/dmacomunicaufrn">Twitter</a></li>				
		
			        </ul>
	
		        </li>
		        <li class="item"><a target="_blank" href="http://www.infra.ufrn.br/">INFRA</a></li>
		        <li class="item"><a target="_blank" href="http://www.sistemas.ufrn.br/portal/PT/">UFRN</a></li>
		        <li class="item"><a>Vai dar praia?</a>
	
			        <ul class="submenu">
		
				        <li class="subitem"><a href="#" onclick="MM_openBrWindow('<?php bloginfo('template_directory'); ?>/previsao.html','Previsao','width=180,height=180')">Previsão do Tempo</a></li>
				        <li class="subitem"><a href="#" onclick="MM_openBrWindow('<?php bloginfo('template_directory'); ?>/mare.html','Mare','width=180,height=180')">Tábua de Maré</a></li>
						<li class="subitem"><a href="http://programaaguaazul.rn.gov.br/sobre/balneabilidade/" target="_blank">Praia Limpa</a></li>		
			        </ul>
	
		        </li>			
				
				<li><span id="pesquisa"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("pesquisa") ) : ?><?php endif; ?></span></li>
	        </ul>
	        
	        
	    </div>        
    </div><!--menu--> 
       
    </div><!-- header -->
