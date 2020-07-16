<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<title><?php bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!--llamada del icon-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/logo.png">
	<!--llamada de Stylos-->
	
 <?php wp_head();?>
</head>

<body class="body <?php body_class(); ?> ">
	
	<header class="Header" id="HeaderScroll">
	
		<div class="contenedor-titulo-web">
		<?php
			CoreWeb_the_custom_logo();
			?>
			<div class="texto-titulos">
				<H1 class="titulo"><?php bloginfo( 'name' );   bloginfo( 'version' );  ?> </H2>
				<p class="site-description" style="color:white;"><?php echo bloginfo( 'description' ); ?></p>
			</div>
		
		</div>

		
		
		<?php
		
			require("slidehow.php");
		
		?>

	
		<nav class="nav-item">
			<?php 
			 wp_nav_menu(
                array(
                'container'=>false,
                'items_wrap'=>'<ul>%3$s</ul>',
                'theme_locaton'=>'menu'

                )); 
				?>
		</nav>
		

		
<div id="social1">
	<ul>
		<li><a href="https://www.facebook.com" target="_blank" class="icon-facebook"></a></li>
		<li><a href="#" class="icon-twitter"></a></li>
		<li><a href="#" class="icon-google-plus"></a></li>
		<li><a href="#" class="icon-pinterest"></a></li>
	</ul>
</div>
		
	</header>