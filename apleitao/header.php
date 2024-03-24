<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apleitao.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44801633-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44801633-1');
</script>

</head>

<body <?php body_class(); ?>>

<div id="sidr">
  <div class="sidr__logo">
  	<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-mobile.png" alt="">
  </div>
	<?php
		if ( is_page_template( 'page-templates/template-homepage.php' ) ) :
	?>
	<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
	?>
	<?php else : ?>

		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-pages',
				'menu_id'        => 'pages-menu',
			) );
		?>

	<?php endif; ?>
</div>


<div id="page" class="site">

	<nav class="languages-nav">
		<div class="container container--menu">
			<a id="simple-menu" href="#sidr">
				<img class="sidr__button" src="<?php bloginfo('template_directory'); ?>/assets/images/responsive-menu.png" alt="Responsive Menu">
			</a>
			<!-- <ul class="languages-nav__list">
				<li class="languages-nav__item">pt</li>
				<li class="languages-nav__item"><a href="#">eng</a></li>
				<li class="languages-nav__item"><a href="#">esp</a></li></li>
				<li class="languages-nav__item"><a href="#">fr</a></li></li>
			</ul> -->

			<?php languages_list_header(); ?>
		</div>
	</nav>
	<header id="masthead" class="site-header">
			<nav id="site-navigation" class="main-navigation">
				<div class="container container--menu">

				<?php
					if ( is_page_template( 'page-templates/template-homepage.php' ) ) :
				?>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
				<?php else : ?>

					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-pages',
							'menu_id'        => 'pages-menu',
						) );
					?>

				<?php endif; ?>
				</div>
			</nav><!-- #site-navigation -->

		<?php
			if ( is_page_template( 'page-templates/template-homepage.php' ) ) :
		?>
		<div class="header-slide">
			<!-- <div class="header-slide__image">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/slideshow-home/slide1.jpg" alt="">
			</div> -->
			<div class="header-slide__logo">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-header.png" alt="">
			</div>
			<div class="header-slide__arrows"></div>
			<div class="header-slide__dots"></div>
			<div class="slideshow-home" style="background: url(<?php the_field('main_image'); ?>) no-repeat center center; background-size: cover;">
				<?php

						// check if the repeater field has rows of data
						if( have_rows('slideshow') ):

						 	// loop through the rows of data
						    while ( have_rows('slideshow') ) : the_row(); ?>

								<div>
									<!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/slideshow-home/slide1.jpg" alt=""> -->
									<div class="slideshow-home__text">
										<?php the_sub_field('text'); ?>
									</div>
								</div>


						  <?php  endwhile;

						endif;

						?>
				<!-- <div>
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/slideshow-home/slide1.jpg" alt="">
					<div class="slideshow-home__text">
						50 anos de experiência e presentes em mais de 20 países são o resultado das melhores pedras e máxima competência.
					</div>
				</div>
				<div>
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/slideshow-home/slide1.jpg" alt="">
					<div class="slideshow-home__text">
						Capacidade produtiva e qualidade inegável nos granitos.
					</div>
				</div>
				<div>
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/slideshow-home/slide1.jpg" alt="">
					<div class="slideshow-home__text">
						Empresa de referência no mármore Estremoz.
					</div>
				</div>
				<div>
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/slideshow-home/slide1.jpg" alt="">
					<div class="slideshow-home__text">
						Lioz como génese da empresa.
					</div>
				</div>
				<div>
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/slideshow-home/slide1.jpg" alt="">
					<div class="slideshow-home__text">
						Distribuidores exclusivos Silestone.
					</div>
				</div>
				<div>
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/slideshow-home/slide1.jpg" alt="">
					<div class="slideshow-home__text">
						Amplia oferta de mármores importados.
					</div>
				</div> -->
			</div>
		</div>
		 <?php else : ?>
			 <div class="header-slide">
				 <div class="header-slide__logo">
	 				<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-header.png" alt="">
	 			</div>
				<div class="header-slide__hero" style="background: url(<?php the_field('imagem_header') ?>) no-repeat center center; background-size: cover;">
					<div class="slideshow-home__text"><?php the_field('texto_a_header') ?></div>
				</div>
			 </div>
		<?php
		endif;
		?>
	</header><!-- #masthead -->



	<div id="content" class="site-content">
