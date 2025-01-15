<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="text-img-round<?php if($is_left_image) echo ' text-img-round-revers'; if($is_padding_top) echo ' pt-130'; if($is_padding_bottom) echo ' pb-130'; ?>">
    <div class="content-width">
      <div class="content">
        <div class="text">

          <?php if ($label): ?>
            <h6 class="label"><?= $label ?></h6>
          <?php endif ?>
          
          <?php if ($title): ?>
            <h2><?= $title ?></h2>
          <?php endif ?>

          <?= $text ?>

          <?php if ($link): ?>
            <div class="btn-wrap">
              <a href="<?= $link['url'] ?>" class="btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><?= html_entity_decode($link['title']) ?></a>
            </div>
          <?php endif ?>

        </div>

        <?php if ($image): ?>
          <figure>
            <?= wp_get_attachment_image($image['ID'], 'full') ?>
          </figure>
        <?php endif ?>

      </div>
    </div>
  </section>

  <?php endif; ?>