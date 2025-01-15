<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $args['row']['is_options'] ? get_field($key . '_1', 'option') : $arg; ?>

  <?php if($gallery): ?>

    <section class="gallery">
      <div class="content-width">

        <?php if ($title): ?>
          <h2><span><?= $title ?></span></h2>
        <?php endif ?>
        
        <div class="content">

          <?php foreach($gallery as $image): ?>

            <div class="item">
              <a href="<?= $image['url'] ?>" data-fancybox="1">
                <?= wp_get_attachment_image($image['ID'], 'full') ?>
              </a>
            </div>

          <?php endforeach; ?>

        </div>
      </div>
    </section>

  <?php endif; ?>

  <?php endif; ?>