<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if($locations): ?>

    <section class="locations<?php if($args['index'] == 0) echo ' locations-banner'; if($type == 'Two columns') echo ' locations-2x'; if($type == 'Slider') echo ' locations-slider-block'; if($type == 'Two columns' && $is_more_button) echo ' locations-after'; ?>">
      <div class="bg">
        <img src="<?= get_stylesheet_directory_uri() ?>/img/bg-2.png" alt="">
      </div>
      <div class="content-width">

        <?php if ($args['index'] == 0): ?>
          <div class="title">

            <?php if ($title): ?>
              <h1><?= $title ?></h1>
            <?php endif ?>

            <?= $text ?>

          </div>
        <?php else: ?>

          <?php if ($title): ?>
            <h2><?= $title ?></h2>
          <?php endif ?>

        <?php endif ?>

        <?php if ($type == 'Slider'): ?>
          <div class="slider-wrap">
            <div class="swiper locations-slider">
              <div class="swiper-wrapper">
              <?php else: ?>
                <div class="content">
                <?php endif ?>

                <?php foreach($locations as $post): 

                  global $post;
                  setup_postdata($post); ?>

                  <?php if ($type == 'Slider'): ?>
                    <div class="swiper-slide">
                    <?php endif ?>

                    <div class="item">

                      <?php if (has_post_thumbnail()): ?>
                        <figure>
                          <?php the_post_thumbnail('full') ?>
                        </figure>
                      <?php endif ?>

                      <div class="wrap">
                        <h6 class="city"><?php the_title() ?></h6>
                        <ul>

                          <?php if ($field = get_field('address')): ?>
                            <li>
                              <div class="icon-wrap">
                                <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-1-1.svg" alt="">
                              </div>
                              <p><?= $field ?></p>
                            </li>
                          <?php endif ?>

                          <?php if ($field = get_field('phone')): ?>
                            <li>
                              <div class="icon-wrap">
                                <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-2.svg" alt="">
                              </div>
                              <p><a href="tel:+<?= preg_replace('/[^0-9]/', '', $field) ?>"><?= $field ?></a></p>
                            </li>
                          <?php endif ?>

                          <?php if (($field = get_field('schedule')) && $type == 'Two columns'): ?>      
                            <li>
                              <div class="icon-wrap">
                                <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-4.svg" alt="">
                              </div>
                              <p><?= $field ?></p>
                            </li>
                          <?php endif ?>

                        </ul>
                        <div class="btn-wrap">

                          <?php if ($field = get_field('shop_url')): ?>
                            <a href="<?= $field ?>" class="btn-default btn-white" target="_blank"><?php _e('shop now', 'Greenpharm') ?></a>
                          <?php endif ?>
                          
                          <?php if (get_post_type_object('location')->publicly_queryable): ?>
                            <a href="<?php the_permalink() ?>" class="btn-default btn-border btn-border-white"><?php _e('view location', 'Greenpharm') ?></a>
                          <?php endif ?>
                          
                        </div>

                        <?php if (($field = get_field('link')) && $type != 'Two columns'): ?>
                          <div class="link">
                            <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= html_entity_decode($field['title']) ?></a>
                          </div>
                        <?php endif ?>

                      </div>
                    </div>

                    <?php if ($type == 'Slider'): ?>
                    </div>
                  <?php endif ?>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>

                <?php if ($type == 'Slider'): ?>
                </div>
              </div>
              <div class="nav-wrap">
                <div class="swiper-button-prev locations-prev  swiper-btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow.svg" alt=""></div>
                <div class="swiper-button-next locations-next  swiper-btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow.svg" alt=""></div>
              </div>
            </div>
          <?php else: ?>
          </div>
        <?php endif ?>
        

      </div>

      <?php if ($type != 'Slider' && $is_more_button): ?>
        <div class="btn-wrap-full">
          <a href="#" class="btn-default btn-show">
            <span><?php _e('SEE MORE', 'Greenpharm') ?></span>
            <span><?php _e('HIDE', 'Greenpharm') ?></span>
          </a>
        </div>
      <?php endif ?>
      
    </section>

  <?php endif; ?>

  <?php endif; ?>