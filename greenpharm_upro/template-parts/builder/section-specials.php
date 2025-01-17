<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if (is_array($items) && checkArrayForValues($items)): ?>
  <section class="online-specials">
    <div class="content-width">

      <?php if ($title): ?>
        <div class="title-wrap">
          <h2><?= $title ?></h2>
        </div>
      <?php endif ?>

      <div class="swiper specials-slider">
        <div class="swiper-wrapper">

          <?php foreach ($items as $item): ?>
            <div class="swiper-slide">

              <?php if ($item['image']): ?>
                <figure>

                  <?php if ($item['link']): ?>
                    <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
                    <?php endif ?>

                    <?= wp_get_attachment_image($item['image']['ID'], 'full') ?>

                    <?php if ($item['link']): ?>
                    </a>
                  <?php endif ?>

                </figure>
              <?php endif ?>
              
              <div class="text">

                <?php if ($item['title']): ?>
                  <h3 class="title">

                    <?php if ($item['link']): ?>
                      <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
                      <?php endif ?>

                      <?= $item['title'] ?>

                      <?php if ($item['link']): ?>
                      </a>
                    <?php endif ?>

                  </h3>
                <?php endif ?>

                <?php if ($item['text']): ?>
                  <p><?= $item['text'] ?></p>
                <?php endif ?>

                <?php if ($item['link']): ?>
                  <div class="btn-wrap">
                    <a href="<?= $item['link']['url'] ?>" class="btn-default"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= html_entity_decode($item['link']['title']) ?></a>
                  </div>
                <?php endif ?>

              </div>
            </div>
          <?php endforeach ?>

        </div>
      </div>
    </div>
  </section>
<?php endif ?>

<?php endif; ?>