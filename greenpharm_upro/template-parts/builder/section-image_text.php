<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $args['row']['is_options'] ? get_field($key . '_1', 'option') : $arg; ?>

  <section class="img-text<?php if($left['number']) echo ' img-text-number' ?>">
    <div class="content-width">

      <?php if (is_array($left) && checkArrayForValues($left)): ?>
      <div class="left">

        <?php if ($left['image']): ?>
          <figure>
            <?= wp_get_attachment_image($left['image']['ID'], 'full') ?>
          </figure>
        <?php endif ?>
        
        <?= $left['text'] ?>

        <?php if ($left['number']): ?>
          <h2 class="number"><?= $left['number'] ?></h2>
        <?php endif ?>

      </div>
    <?php endif ?>
    
    <?php if (is_array($right) && checkArrayForValues($right)): ?>
    <div class="right">

      <?php if ($right['label']): ?>
        <p class="label"><?= $right['label'] ?></p>
      <?php endif ?>


      <?php if ($right['text']): ?>
        <?= add_class_content($right['text'], 'text') ?>
      <?php endif ?>
      
    </div>
  <?php endif ?>
  
</div>
</section>

<?php endif; ?>