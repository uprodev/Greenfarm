<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if (is_array($items) && checkArrayForValues($items)): ?>
  <section class="home-banner">
    <div class="bg">

      <?php foreach ($items as $index => $item): ?>
        <div class="bg-video bg-video-<?= $index + 1 ?>">

          <?php if ($item['video']): ?>
            <video loop muted><source src="<?= $item['video']['url'] ?>" type='video/mp4'>
            </video>
          <?php endif ?>
          
        </div>
      <?php endforeach ?>

    </div>
    <div class="content-width">
      <div class="slider-wrap">
        <div class="swiper banner-slider ">
          <div class="swiper-wrapper">

            <?php foreach ($items as $item): ?>
              <div class="swiper-slide<?php if($item['is_dark']) echo ' swiper-slide-dark"' ?>">

                <?php if ($item['title']): ?>
                  <h1><?= $item['title'] ?></h1>
                <?php endif ?>

                <?php if ($item['text']): ?>
                  <p><?= $item['text'] ?></p>
                <?php endif ?>

                <?php if ($item['link_1'] || $item['link_2']): ?>
                  <div class="btn-wrap">

                    <?php if ($item['link_1']): ?>
                      <a href="<?= $item['link_1']['url'] ?>" class="btn-default"<?php if($item['link_1']['target']) echo ' target="_blank"' ?>><?= html_entity_decode($item['link_1']['title']) ?></a>
                    <?php endif ?>

                    <?php if ($item['link_2']): ?>
                      <a href="<?= $item['link_2']['url'] ?>" class="btn-default btn-border"<?php if($item['link_2']['target']) echo ' target="_blank"' ?>><?= html_entity_decode($item['link_2']['title']) ?></a>
                    <?php endif ?>

                  </div>
                <?php endif ?>

              </div>
            <?php endforeach ?>

          </div>
        </div>
        <div class="swiper-button-prev banner-prev  swiper-btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow.svg" alt=""></div>
        <div class="swiper-pagination banner-pagination"></div>
        <div class="swiper-button-next banner-next  swiper-btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow.svg" alt=""></div>
      </div>
    </div>
  </section>
<?php endif ?>

<?php endif; ?>