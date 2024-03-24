<?php
/**
* Template Name: Projeto Virtual Cozinha
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


				<section class="content-main content-main--padding">

					<div class="container container--menu">

							<h1 class="title title--main"><?php the_field('titulo', 23); ?></h1>

							<div class="submenu">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-projetovirtual',
										'menu_id'        => 'projetovirtual-menu',
									) );
								?>
							</div>
							<div class="container container--text">
							<div class="text">
								<?php the_field('texto', 23); ?>
							</div>
						</div>
					</div>
	      </section>

				<div class="factory__image" style="font-size: 0;">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/pedrasnaturais-image1.jpg" alt="">
				</div>

				<div class="projetovirtual">
					<section id="sala" class="content-main content-projeto">
						<?php $post_id = 454; ?>
						<div class="container container__content projetovirtual__container">
							<div class="container container--text" style="margin-top: 40px;">
						    <h1 class="title"><?php the_field('titulo', $post_id); ?></h1>

						  </div>
								<div class="projetovirtual__images-all">
									<img class="projetovirtual__img main" src="<?php the_field('imagem_principal', $post_id); ?>" alt="">
									<div class="slide-space1-main">
									<?php

										if( have_rows('pares_revestimento1', $post_id) ):

										    while ( have_rows('pares_revestimento1', $post_id) ) : the_row(); ?>

												<div class="">
													<img class="projetovirtual__img space1" data-local="space1" src="<?php the_sub_field('imagem_aplicacao'); ?>" alt="">
												</div>


										   <?php endwhile;

										endif;

										?>

									</div>
									<div class="slide-space2-main">
									<?php

										if( have_rows('pares_revestimento2', $post_id) ):

										    while ( have_rows('pares_revestimento2', $post_id) ) : the_row(); ?>

												<div class="">
													<img class="projetovirtual__img space2" data-local="space2" src="<?php the_sub_field('imagem_aplicacao'); ?>" alt="">
												</div>


										   <?php endwhile;

										endif;

										?>

									</div>
								</div>

							</div>
		      </section>

					<section id="granitosportugueses" class="content-main content-projeto">


						<div class="container container__content">
							<div class="container container--text">
								<h1 class="title"><?php the_field('titulo_revest1', $post_id); ?></h1>

							</div>
							<div class="projetovirtual__materiais">
								<div id="arrows1" class="projetovirtual__arrows"></div>
								<div class="slide-space1">
									<?php

										if( have_rows('pares_revestimento1', $post_id) ):

												while ( have_rows('pares_revestimento1', $post_id) ) : the_row(); ?>

												<div style="margin: 0 10px;">

				                    <div class="materiais__image" style="background: url(<?php the_sub_field('imagem_material'); ?>) no-repeat center center; background-size: cover;">
				                    </div>
														<p class="materiais__label"><?php the_sub_field('nome'); ?></p>

												</div>

											 <?php endwhile;

										endif;

										?>

								</div>

							</div>

						</div>

						<div class="container container__content">

							<div class="container container--text">
								<h1 class="title"><?php the_field('titulo_revest2', $post_id); ?></h1>
							</div>
							<div class="projetovirtual__materiais">
								<div id="arrows2" class="projetovirtual__arrows"></div>
								<div class="slide-space2">

									<?php

										if( have_rows('pares_revestimento2', $post_id) ):

												while ( have_rows('pares_revestimento2', $post_id) ) : the_row(); ?>

												<div style="margin: 0 10px;">

				                    <div class="materiais__image" style="background: url(<?php the_sub_field('imagem_material'); ?>) no-repeat center center; background-size: cover;">
				                    </div>
														<p class="materiais__label"><?php the_sub_field('nome'); ?></p>

												</div>

											 <?php endwhile;


										endif;

										?>

								</div>

							</div>

						</div>

		      </section>
				</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
