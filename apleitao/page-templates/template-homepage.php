<?php
/**
* Template Name: Homepage
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


				<section class="content-main content-main--padding">
					<div class="container container__content">

						<div class="container container--text">
							<h1 class="title title--main"><?php the_field('titulo_a_empresa'); ?></h1>
							<div class="text">
								<p><?php the_field('texto_a_empresa'); ?></p>
							</div>
						</div>
						<div class="content-main__logos">
							<?php

								if( have_rows('logotipos_empresa') ):

								    while ( have_rows('logotipos_empresa') ) : the_row(); ?>

										<?php $urls = get_sub_field('url_logotipo'); ?>

												<?php if( $urls ): ?>
													<a href="<?php the_sub_field('url_logotipo'); ?>" target="_blank">
												<?php endif; ?>

								        	<img src="<?php the_sub_field('imagem_logotipo'); ?>" alt="">

												<?php if( $urls ): ?>
												</a>
												<?php endif; ?>


								   <?php endwhile;

								endif;

								?>
						</div>
					</div>
	      </section>

				<section id="factory" class="content-main factory">
					<div class="factory__image">
						<img src="<?php the_field('imagem_fabrica'); ?>" alt="">
					</div>
					<div class="container container__content container__content--grey container__content--margintop1">
						<div class="container container--text">

							<h1 class="title title"><?php the_field('titulo_fabrica'); ?></h1>
							<div class="text">
								<p><?php the_field('texto_fabrica'); ?></p>
							</div>
						</div>
						<?php
							if( have_rows('linhas_fabrica') ):

							    while ( have_rows('linhas_fabrica') ) : the_row(); ?>

										<div class="factory__post" style="background-image: url(<?php the_sub_field('imagem_lateral'); ?>), url(<?php the_sub_field('imagem_de_fundo'); ?>); ">
											<div class="factory__text<?php if ( get_sub_field( 'cor_do_texto' ) ){ echo ' factory__text--white'; } ?>">
												<p><span class="factory__text factory__text--subtitle"><?php the_sub_field('subtitulo'); ?></span><br>
												<span class="factory__text factory__text--title"><?php the_sub_field('titulo'); ?></span></p>

												<p><?php the_sub_field('lista'); ?></p>
											</div>
										</div>


							  <?php  endwhile;

							endif;

							?>
						<!-- <div class="factory__post" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/marmore-home.png), url(<?php bloginfo('template_directory'); ?>/assets/images/marmore-home-img.jpg); ">
							<div class="factory__text">
								<p><span class="factory__text factory__text--subtitle">linha de</span><br>
								<span class="factory__text factory__text--title">Mármores</span></p>

								<p>Serragem<br>
								Resinagem<br>
								Acabamentos</p>
							</div>
						</div>
						<div class="factory__post" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/resinagem-home.png), url(<?php bloginfo('template_directory'); ?>/assets/images/resinagem-home-img.jpg); ">
							<div class="factory__text factory__text--white">
								<p><span class="factory__text factory__text--subtitle">linha de</span><br>
								<span class="factory__text factory__text--title">Resinagem</span></p>

								<p>Mármores<br>
								Granitos</p>
							</div>
						</div>
						<div class="factory__post" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/granitos-home.png), url(<?php bloginfo('template_directory'); ?>/assets/images/granitos-home-img.jpg); ">
							<div class="factory__text factory__text--white">
								<p><span class="factory__text factory__text--subtitle">linha de</span><br>
								<span class="factory__text factory__text--title">Granitos</span></p>
								<p>Serragem<br>
								Resinagem<br>
								Acabamentos<br>
								Multifios</p>
							</div>
						</div> -->
					</div>
	      </section>

				<section id="quarries" class="content-main quarries">
					<div class="container container__content">
						<div class="container container--text">
							<h1 class="title title"><?php the_field('titulo_pedreiras'); ?></h1>
							<div class="text">
								<p><?php the_field('texto_pedreiras'); ?></p>
							</div>
						</div>
					</div>
					<div class="quarries__image">
						<img src="<?php the_field('imagem_pedreiras'); ?>" alt="">
					</div>
					<div class="container container--text">
						<ul class="quarries__list">
							<?php
								if( have_rows('lista_de_pedreiras') ):

								    while ( have_rows('lista_de_pedreiras') ) : the_row(); ?>

										<li class="quarries__item">
											<div class="">
												<p class="quarries__text"><?php the_sub_field('subtitulo'); ?></p>
												<p class="quarries__title"><?php the_sub_field('titulo_pedreira'); ?></p>
											</div>
										</li>

								   <?php endwhile;

								endif;

								?>
							<!-- <li class="quarries__item">
								<p class="quarries__text">Pedreira 1</p>
								<p class="quarries__title">Lameiras</p>
							</li>
							<li class="quarries__item">
								<p class="quarries__text">Pedreira 2</p>
								<p class="quarries__title">Morelena</p>
							</li>
							<li class="quarries__item">
								<p class="quarries__text">Pedreira 3</p>
								<p class="quarries__title">Vila Viçosa</p>
							</li> -->
						</ul>
					</div>

	      </section>

				<section id="warehouses" class="content-main warehouses">
					<div class="container container__content">
						<div class="container container--text">
							<h1 class="title title--white"><?php the_field('titulo_armazens'); ?></h1>
							<div class="text text--white">
								<p><?php the_field('texto_armazens'); ?></p>
							</div>
						</div>
						<ul class="warehouses__list">
							<?php
								if( have_rows('lista_armazens') ):

								    while ( have_rows('lista_armazens') ) : the_row(); ?>

											<li class="warehouses__item">
												<p class="warehouses__text"><?php the_sub_field('subtitulo'); ?></p>
												<p class="warehouses__title"><?php the_sub_field('titulo'); ?></p>
											</li>

								   <?php endwhile;

								endif;

								?>
							<!-- <li class="warehouses__item">
								<p class="warehouses__text">Armazém</p>
								<p class="warehouses__title">Santo Tirso</p>
							</li>
							<li class="warehouses__item">
								<p class="warehouses__text">Armazém</p>
								<p class="warehouses__title">Albergaria-a-Velha</p>
							</li>
							<li class="warehouses__item">
								<p class="warehouses__text">Armazém</p>
								<p class="warehouses__title">Alcobaça</p>
							</li>
							<li class="warehouses__item">
								<p class="warehouses__text">Armazém</p>
								<p class="warehouses__title">Palmela</p>
							</li> -->
						</ul>
					</div>
	      </section>

				<section id="contacts" class="map">
					<div id="map" style="width: 100%; height: 635px;"></div>
	      </section>
				<!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWV01zUbDpNHwBV6E4hNWsUtb6StjK7Yg&callback=initMap">
    </script> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
