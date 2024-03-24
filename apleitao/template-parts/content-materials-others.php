<div class="container container__content">
  <div class="container container--text">
    <h1 class="title title"><?php the_field('title', $post_id); ?></h1>
    <div class="text text">
      <p><?php the_field('text', $post_id); ?></p>
    </div>
  </div>
  <div class="materiais">

      <?php

        if( get_field('materiais', $post_id) ) : ?>

            <ul class="materiais__list">

            <?php

            $i = 0;

            while( the_repeater_field('materiais', $post_id) ): ?>
                <?php $i++; ?>

                <li class="materiais__item">
                  <a href="#inline-<?php echo $post_descr; ?>-<?php echo $i; ?>" data-rel="lightcase:<?php echo $post_descr; ?>">
                    <div class="materiais__image" style="background: url(<?php the_sub_field('main_image'); ?>) no-repeat center center; background-size: cover;">
                    </div>
                  </a>
                  <p class="materiais__text materiais__text"><?php the_sub_field('nome'); ?></p>
                  <div id="inline-<?php echo $post_descr; ?>-<?php echo $i; ?>" class="materiais-lightbox" style="display: none;">
                    <?php

                    // vars
                    $field = get_sub_field_object('cor_de_fundo');
                    $value = $field['value'];
                    $label = $field['choices'][ $value ];

                    ?>

                      <div class="materiais-lightbox_wrap">

                          <div class="materiais-lightbox__bg materiais-lightbox__bg--<?php echo $value; ?>"></div>

                          <div class="materiais-lightbox__image-big materiais-lightbox__image-big--siles" style="background: url(<?php the_sub_field('main_image'); ?>) no-repeat center center; background-size: cover;">
                            <!-- <img src="<?php the_sub_field('main_image'); ?>" alt=""> -->
                          </div>

                          <div class="materiais-lightbox__close materiais-lightbox__close--others mobile">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/close-lightcase.jpg" alt="Close">
                          </div>

                          <div class="materiais-lightbox__info materiais-lightbox__info--siles">
                            <div class="materiais-lightbox__close materiais-lightbox__close--others desktop">
                              <img src="<?php bloginfo('template_directory'); ?>/assets/images/close-lightcase.jpg" alt="Close">
                            </div>

                            <div class="">
                              <h5 class="materiais-lightbox__title materiais-lightbox__title--nomargin materiais-lightbox__title--small"><?php the_sub_field('nome_geral'); ?></h5>
                              <h2 class="materiais-lightbox__title materiais-lightbox__title--nomargin materiais-lightbox__title--big"><?php the_sub_field('nome'); ?></h2>
                            </div>
                            <div class="materiais-lightbox__logo">
                              <?php if ( is_page_template( 'page-templates/template-silestone.php' ) ) : ?>

                                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/silestone-logo2.png" alt="Silestone">
                              
                              <?php elseif ( is_page_template( 'page-templates/template-avonite.php' ) ) : ?>
                              
                                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-avonite2.png" alt="Avonite">

                              <?php else :  ?>

                                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-dekton2.png" alt="Dekton">
                              
                               <?php endif; ?>

                              <!-- <p>Distribuidor exclusivo em Portugal</p> -->
                            </div>
                          </div>

                      </div>

                  </div>
                </li>
            <?php endwhile; ?>

            </ul>
        <?php endif;

       ?>
  </div>
</div>
