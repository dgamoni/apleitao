<?php
/**
* Template Name: Pedras Naturais
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


				<section class="content-main content-main--padding">
					<div class="container container--text">

							<h1 class="title title--main"><?php the_field('titulo', 17); ?></h1>

							<div class="submenu">
								<a class="menu-button">menu</a>
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-pedrasnaturais',
										'menu_id'        => 'subs-menu',
									) );
								?>
							</div>
							<div class="container container--text">
							<div class="text">
								<?php the_field('texto', 17); ?>
							</div>
						</div>
					</div>
	      </section>

				<section id="matpedreira" class="content-main content-pedras">
					<?php $post_id = 56; ?>
					<?php $post_descr = 'matpedreiras'; ?>

					<div class="factory__image">
						<img src="<?php the_field('imagem_topo', $post_id); ?>" alt="">
					</div>

							<?php include( locate_template( 'template-parts/content-materials.php', false, false ) );  ?>

	      </section>

				<section id="granitosportugueses" class="content-main content-pedras">
					<?php $post_id = 59; ?>
					<?php $post_descr = 'granitosportugueses'; ?>

						<?php include( locate_template( 'template-parts/content-materials.php', false, false ) );  ?>

	      </section>

				<section id="granitosimportados" class="content-main content-pedras">
					<?php $post_id = 62; ?>
					<?php $post_descr = 'granitosimportados'; ?>

						<?php include( locate_template( 'template-parts/content-materials.php', false, false ) );  ?>

	      </section>

				<section id="calcarios" class="content-main content-pedras">
					<?php $post_id = 64; ?>
					<?php $post_descr = 'calcarios'; ?>

						<?php include( locate_template( 'template-parts/content-materials.php', false, false ) );  ?>

	      </section>

				<section id="marmoresimportados" class="content-main content-pedras">
					<?php $post_id = 66; ?>
					<?php $post_descr = 'marmoresimportados'; ?>

						<?php include( locate_template( 'template-parts/content-materials.php', false, false ) );  ?>

	      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
