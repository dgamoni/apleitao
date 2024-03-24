<?php
/**
* Template Name: Pedras Dekton
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

				<section class="content-main content-main--padding">
					<div class="container container--text">

							<h1 class="title title--main"><?php the_field('titulo', 21); ?></h1>

							<div class="submenu">
								<a class="menu-button">menu</a>
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-dekton',
										'menu_id'        => 'subs-menu',
									) );
								?>
							</div>
							<div class="container container--text">
							<div class="text">
								<?php the_field('texto', 21); ?>
							</div>
						</div>
					</div>
	      </section>

				<section class="video-wrap" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/silestone-top.jpg) no-repeat center center; background-size: cover;">
					<div class="container container--large">
						<div class="video-wrap__cover">
							<div class="video-wrap__play">
								<a href="<?php bloginfo('template_directory'); ?>/assets/videos/DektonTestPortugues1080.mp4" data-rel="lightcase"><img src="<?php bloginfo('template_directory'); ?>/assets/images/play-video.png" alt="Play"></a>
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/video-dekton-cover.jpg" alt="">
						</div>
					</div>
				</section>

				<section id="industrialcollection" class="content-main content-dekton">
					<?php $post_id = 323; ?>
					<?php $post_descr = 'industrialcollection'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="xglossbasiq" class="content-main content-dekton">
					<?php $post_id = 369; ?>
					<?php $post_descr = 'xglossbasiq'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="xglossnatural" class="content-main content-dekton">
					<?php $post_id = 372; ?>
					<?php $post_descr = 'xglossnatural'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="xglosssolid" class="content-main content-dekton">
					<?php $post_id = 375; ?>
					<?php $post_descr = 'xglosssolid'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>


				<section id="wildcollection" class="content-main content-dekton">
					<?php $post_id = 378; ?>
					<?php $post_descr = 'wildcollection'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="solidcollection" class="content-main content-dekton">
					<?php $post_id = 382; ?>
					<?php $post_descr = 'solidcollection'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="naturalcollection" class="content-main content-dekton">
					<?php $post_id = 385; ?>
					<?php $post_descr = 'naturalcollection'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="techcollection" class="content-main content-dekton">
					<?php $post_id = 388; ?>
					<?php $post_descr = 'techcollection'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
