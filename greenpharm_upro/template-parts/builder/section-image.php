<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="full-img">
    <div class="content-width">

      <?php if ($image): ?>
        <figure>
          <picture>
            <source srcset="<?= $image['url'] ?>" media="(min-width: 768px)">
              <source srcset="<?= $image['url'] ?>">
                <?= wp_get_attachment_image($image['ID'], 'full') ?>
              </picture>
            </figure>
          <?php endif ?>
          
          <?php if ($link): ?>
            <div class="btn-wrap">
              <a href="<?= $link['url'] ?>" class="btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><?= html_entity_decode($link['title']) ?></a>
            </div>
          <?php endif ?>

        </div>
      </section>

      <?php endif; ?>