<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="products">
    <div class="content-width">

      <?php if ($title): ?>
        <h2><?= $title ?></h2>
      <?php endif ?>

      <?php if($products): ?>

        <div class="slider-wrap">
          <div class="swiper product-slider">
            <div class="swiper-wrapper">

              <?php foreach($products as $post): 

                global $post;
                setup_postdata($post); ?>
                <div class="swiper-slide">
                  <a href="<?php the_permalink() ?>">
                    <div class="bg-img">
                      <img src="<?= get_stylesheet_directory_uri() ?>/img/bg-1.png" alt="">
                    </div>

                    <?php if (has_post_thumbnail()): ?>
                      <figure>
                        <?php the_post_thumbnail('full') ?>
                      </figure>
                    <?php endif ?>

                  </a>
                </div>
              <?php endforeach; ?>

              <?php wp_reset_postdata(); ?>

            </div>
            <div class="nav-wrap">
              <div class="swiper-button-prev product-prev  swiper-btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow.svg" alt=""></div>
              <div class="swiper-button-next product-next  swiper-btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow.svg" alt=""></div>
            </div>
          </div>
        </div>

      <?php endif; ?>

      <?php if (is_array($links) && checkArrayForValues($links)): ?>
      <div class="link-wrap">
        <ul>

          <?php foreach ($links as $item): ?>
            <?php if ($item['link']): ?>
              <li<?php if($item['is_active']) echo ' class="is-active"' ?>>
                <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= html_entity_decode($item['link']['title']) ?></a>
              </li>
            <?php endif ?>
          <?php endforeach ?>

        </ul>
      </div>
    <?php endif ?>

    <?php if ($link): ?>
      <div class="btn-wrap">
        <a href="<?= $link['url'] ?>" class="btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><?= html_entity_decode($link['title']) ?></a>
      </div>
    <?php endif ?>

  </div>
</section>

<?php endif; ?>