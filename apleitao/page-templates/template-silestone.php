<?php
/**
* Template Name: Pedras Silestone
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

				<section class="content-main content-main--padding">
					<div class="container container--text">

							<h1 class="title title--main"><?php the_field('titulo', 19); ?></h1>

							<div class="submenu">
								<a class="menu-button">menu</a>
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-silestone',
										'menu_id'        => 'subs-menu',
									) );
								?>
							</div>
							<div class="container container--text">
							<div class="text">
								<?php the_field('texto', 19); ?>
							</div>
						</div>
					</div>
	      </section>

				<section class="video-wrap" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/silestone-top.jpg) no-repeat center center; background-size: cover;">
					<div class="container container--large">
						<div class="video-wrap__cover">
							<div class="video-wrap__play">
								<a href="<?php bloginfo('template_directory'); ?>/assets/videos/Silestone60_V7.mp4" data-rel="lightcase"><img src="<?php bloginfo('template_directory'); ?>/assets/images/play-video.png" alt="Play"></a>
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/video-silestone-cover.jpg" alt="">
						</div>
					</div>
				</section>

				<section id="eternal" class="content-main content-silestone">
					<?php $post_id = 190; ?>
					<?php $post_descr = 'eternal'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="iconic" class="content-main content-silestone">
					<?php $post_id = 266; ?>
					<?php $post_descr = 'iconic'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="ecoline" class="content-main content-silestone">
					<?php $post_id = 269; ?>
					<?php $post_descr = 'ecoline'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="custom" class="content-main content-silestone">
					<?php $post_id = 272; ?>
					<?php $post_descr = 'custom'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="nebulaalpha" class="content-main content-silestone">
					<?php $post_id = 275; ?>
					<?php $post_descr = 'nebulaalpha'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="nebula" class="content-main content-silestone">
					<?php $post_id = 278; ?>
					<?php $post_descr = 'nebula'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="nebulacode" class="content-main content-silestone">
					<?php $post_id = 281; ?>
					<?php $post_descr = 'nebulacode'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="stonium" class="content-main content-silestone">
					<?php $post_id = 284; ?>
					<?php $post_descr = 'stonium'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="platinum" class="content-main content-silestone">
					<?php $post_id = 287; ?>
					<?php $post_descr = 'platinum'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="basiq" class="content-main content-silestone">
					<?php $post_id = 290; ?>
					<?php $post_descr = 'basiq'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="life" class="content-main content-silestone">
					<?php $post_id = 294; ?>
					<?php $post_descr = 'life'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="zen" class="content-main content-silestone">
					<?php $post_id = 297; ?>
					<?php $post_descr = 'zen'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>

				<section id="rivers" class="content-main content-silestone">
					<?php $post_id = 300; ?>
					<?php $post_descr = 'rivers'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

	      </section>


				<section id="mithology" class="content-main content-silestone">
					<?php $post_id = 305; ?>
					<?php $post_descr = 'mithology'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

				</section>

				<section id="stone" class="content-main content-silestone">
					<?php $post_id = 309; ?>
					<?php $post_descr = 'stone'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

				</section>

				<section id="stellar" class="content-main content-silestone">
					<?php $post_id = 312; ?>
					<?php $post_descr = 'stellar'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

				</section>

				<section id="tropicalforest" class="content-main content-silestone">
					<?php $post_id = 315; ?>
					<?php $post_descr = 'tropicalforest'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

				</section>

				<section id="cielo" class="content-main content-silestone">
					<?php $post_id = 318; ?>
					<?php $post_descr = 'cielo'; ?>

						<?php include( locate_template( 'template-parts/content-materials-others.php', false, false ) );  ?>

				</section>





		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
