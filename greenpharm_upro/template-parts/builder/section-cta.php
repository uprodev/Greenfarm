<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="bg-text<?php if($is_full_width) echo '-full'; if($is_left_text_block) echo ' bg-text-revers'; if($text_block_color == 'Grey') echo ' bg-text-grey'; ?>">

    <?php if ($is_background): ?>
      <div class="bg-img">
        <img src="<?= get_stylesheet_directory_uri() ?>/img/bg-4.png" alt="">
      </div>
    <?php endif ?>

    <div class="content-width">

      <?php if ($background_image): ?>
        <div class="bg">
          <?= wp_get_attachment_image($background_image['ID'], 'full') ?>
        </div>
      <?php endif ?>
      
      <div class="content">

        <?php if ($label): ?>
          <h6 class="label"><?= $label ?></h6>
        <?php endif ?>

        <?php if ($title): ?>
          <h2><?= $title ?></h2>
        <?php endif ?>

        <?= $text ?>

        <?php if ($link): ?>
          <div class="btn-wrap">
            <a href="<?= $link['url'] ?>" class="btn-default<?php if($text_block_color != 'White') echo ' btn-white' ?>"<?php if($link['target']) echo ' target="_blank"' ?>><?= html_entity_decode($link['title']) ?></a>
          </div>
        <?php endif ?>

      </div>
    </div>
  </section>

  <?php endif; ?>