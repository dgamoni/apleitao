<?php
/**
* Template Name: Pedras Avonite
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

				<section class="content-main content-main--padding">
					<div class="container container--text">

							<h1 class="title title--main"><?php the_field('titulo', 1673); ?></h1>

							<div class="submenu">
								<a class="menu-button">menu</a>
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-avonite',
										'menu_id'        => 'subs-menu',
									) );
								?>
							</div>
							<div class="container container--text">
							<div class="text">
								<?php the_field('texto', 1673); ?>
							</div>
						</div>
					</div>
	      </section>

				<section class="video-wrap" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/silestone-top.jpg) no-repeat center center; background-size: cover;">
					<div class="container container--large">
						<div class="video-wrap__cover">
							<div class="video-wrap__play">
								<a href="<?php bloginfo('template_directory'); ?>/assets/videos/Avonite.mp4" data-rel="lightcase"><img src="<?php bloginfo('template_directory'); ?>/assets/images/play-video.png" alt="Play"></a>
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/video-avonite-cover.jpg" alt="">
						</div>
					</div>
				</section>

				<section id="group0" class="content-main content-silestone">
					<?php $post_id = 1687; ?>
					<?php $post_descr = 'group0'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="group1" class="content-main content-silestone">
					<?php $post_id = 1690; ?>
					<?php $post_descr = 'group1'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="group2" class="content-main content-silestone">
					<?php $post_id = 1692; ?>
					<?php $post_descr = 'group2'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="group3" class="content-main content-silestone">
					<?php $post_id = 1694; ?>
					<?php $post_descr = 'group3'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="group4" class="content-main content-silestone">
					<?php $post_id = 1696; ?>
					<?php $post_descr = 'group4'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="group5" class="content-main content-silestone">
					<?php $post_id = 1698; ?>
					<?php $post_descr = 'group5'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="group6" class="content-main content-silestone">
					<?php $post_id = 1700; ?>
					<?php $post_descr = 'group6'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="group7" class="content-main content-silestone">
					<?php $post_id = 1702; ?>
					<?php $post_descr = 'group7'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();