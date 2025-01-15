<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $args['row']['is_options'] ? get_field($key . '_1', 'option') : $arg; ?>

  <section class="careers-banner<?php if($background) echo ' order-banner' ?>">

    <?php if ($background): ?>
      <div class="bg">
        <?= wp_get_attachment_image($background['ID'], 'full') ?>
      </div>
    <?php endif ?>
    
    <div class="content-width">

      <?php if ($label): ?>
        <h6 class="label"><?= $label ?></h6>
      <?php endif ?>
      
      <?php if ($title): ?>
        <h1><?= $title ?></h1>
      <?php endif ?>

      <?php if ($image): ?>
        <figure>
          <?= wp_get_attachment_image($image['ID'], 'full') ?>
        </figure>
      <?php endif ?>

    </div>
  </section>

  <?php endif; ?>