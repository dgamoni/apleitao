<div class="container container__content">
  <div class="container container--text">
    <h1 class="title"><?php the_field('title', $post_id); ?></h1>
    <div class="text">
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
                    
                    <div class="materiais-lightbox__image-big"  style="background: url(<?php the_sub_field('main_image'); ?>) no-repeat center center; background-size: cover;">
                    </div>
                    <div class="materiais-lightbox__info">
                      <div class="materiais-lightbox__close">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/close-lightcase.jpg" alt="Close">
                      </div>
                      <h2 class="materiais-lightbox__title"><?php the_sub_field('nome'); ?></h2>
                        <div class="materiais-lightbox__info-wrap">
                          <div class="materiais-lightbox__title materiais-lightbox__title--nomargin  materiais-lightbox__title--sub">Descrição</div>
                          <p class="materiais-lightbox__text"><?php the_sub_field('descricao'); ?></p>
                        </div>
                        <div class="materiais-lightbox__info-wrap">
                          <div class="materiais-lightbox__title  materiais-lightbox__title--sub">Origem</div>
                          <p class="materiais-lightbox__text"><?php the_sub_field('origem'); ?></p>
                        </div>
                        <div class="materiais-lightbox__info-wrap">
                          <div class="materiais-lightbox__title materiais-lightbox__title--sub">Uso Recomendado</div>
                          <p class="materiais-lightbox__text"><?php the_sub_field('uso_recomendado'); ?></p>
                        </div>
                        <div class="materiais-lightbox__buttons">
                          <a href="#">PEDIR + INFO </a> / <a href="#"> PDF TÉCNICO</a>
                        </div>
                        <div class="materiais-lightbox__image">
                          <img src="<?php the_sub_field('imagem_secundaria'); ?>" alt="">
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
