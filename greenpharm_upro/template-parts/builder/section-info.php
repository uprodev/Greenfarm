<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $args['row']['is_options'] ? get_field($key . '_1', 'option') : $arg; ?>

  <section class="join<?php if($is_grey) echo ' join-grey' ?>">

    <?php if ($background_image): ?>
      <div class="bg">
        <?= wp_get_attachment_image($background_image['ID'], 'full') ?>
      </div>
    <?php endif ?>
    
    <div class="content-width">
      <div class="left">

        <?php if ($label): ?>
          <h6 class="label"><?= $label ?></h6>
        <?php endif ?>

        <?php if ($title): ?>
          <h2><?= $title ?></h2>
        <?php endif ?>

        <?php if ($link): ?>
          <div class="btn-wrap">
            <a href="<?= $link['url'] ?>" class="btn-default btn-white"<?php if($link['target']) echo ' target="_blank"' ?>><?= html_entity_decode($link['title']) ?></a>
          </div>
        <?php endif ?>

      </div>
      <div class="right">
        <?= $text ?>
      </div>
    </div>
  </section>

  <?php endif; ?>