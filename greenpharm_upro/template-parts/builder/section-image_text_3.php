<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $args['row']['is_options'] ? get_field($key . '_1', 'option') : $arg; ?>

  <section class="text-img text-img-center text-img-only">

    <?php if ($background): ?>
      <div class="bg">
        <?= wp_get_attachment_image($background['ID'], 'full') ?>
      </div>
    <?php endif ?>
    
    <div class="content-width">

      <?php if ($image): ?>
        <div class="left">
          <figure>
            <?= wp_get_attachment_image($image['ID'], 'full') ?>
          </figure>
        </div>
      <?php endif ?>
      
      <div class="right">
        <div class="wrap">

          <?php if ($label): ?>
            <p class="label"><?= $label ?></p>
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
      </div>
    </div>
  </section>

  <?php endif; ?>