<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $args['row']['is_options'] ? get_field($key . '_2', 'option') : $arg; ?>

  <section class="inst-block">
    <div class="content-width">
      <div class="title">

        <?php if ($title): ?>
          <h2><?= $title ?></h2>
        <?php endif ?>

        <?php if ($link): ?>
          <div class="link-wrap">
            <a href="<?= $link['url'] ?>"<?php if($link['target']) echo ' target="_blank"' ?>><?= html_entity_decode($link['title']) ?></a>
          </div>
        <?php endif ?>

      </div>

      <?php if($gallery): ?>
        <div class="content">
          <div class="swiper inst-slider">
            <div class="swiper-wrapper">

              <?php foreach($gallery as $image): ?>

                <div class="swiper-slide">
                  <figure>
                    <a href="<?= $image['url'] ?>" data-fancybox="gallery">
                      <?= wp_get_attachment_image($image['ID'], 'full') ?>
                    </a>
                  </figure>
                </div>

              <?php endforeach; ?>

            </div>
          </div>
          <div class="nav-wrap">
            <div class="swiper-pagination inst-pagination"></div>
            <div class="swiper-button-next inst-next swiper-btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow.svg" alt=""></div>
            <div class="swiper-button-prev inst-prev swiper-btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow.svg" alt=""></div>
          </div>
        </div>

      <?php endif; ?>

    </div>
  </section>

  <?php endif; ?>