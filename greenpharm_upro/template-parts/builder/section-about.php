<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php $is_left_links = $left['link_1'] || $left['link_2'] ?>

  <section class="text-img<?php if(!$is_left_links) echo ' text-img-center' ?>">
    <div class="bg">
      <img src="<?= get_stylesheet_directory_uri() ?>/img/bg-4.png" alt="">
    </div>
    <div class="content-width">

      <?php if (is_array($left) && checkArrayForValues($left)): ?>
      <div class="left">

        <?php if ($left['image_1']): ?>
          <figure>
            <?= wp_get_attachment_image($left['image_1']['ID'], 'full') ?>
          </figure>
        <?php endif ?>

        <div class="wrap">

          <?= $left['text'] ?>

          <?php if ($left['link_1'] || $left['link_2']): ?>
            <div class="btn-wrap">

              <?php if ($left['link_1']): ?>
                <a href="<?= $left['link_1']['url'] ?>" class="btn-default"<?php if($left['link_1']['target']) echo ' target="_blank"' ?>><?= html_entity_decode($left['link_1']['title']) ?></a>
              <?php endif ?>

              <?php if ($left['link_2']): ?>
                <a href="<?= $left['link_2']['url'] ?>" class="btn-default btn-border"<?php if($left['link_2']['target']) echo ' target="_blank"' ?>><?= html_entity_decode($left['link_2']['title']) ?></a>
              <?php endif ?>

            </div>
          <?php endif ?>

        </div>

        <?php if ($left['image_2']): ?>
          <figure>
            <?= wp_get_attachment_image($left['image_2']['ID'], 'full') ?>
          </figure>
        <?php endif ?>

      </div>
    <?php endif ?>

    <?php if (is_array($right) && checkArrayForValues($right)): ?>
    <div class="right">
      <div class="wrap">

        <?php if ($right['label']): ?>
          <h6 class="label"><?= $right['label'] ?></h6>
        <?php endif ?>

        <?php if ($right['title']): ?>
          <h2><?= $right['title'] ?></h2>
        <?php endif ?>

        <?= $right['text'] ?>

      </div>

      <?php if ($right['image']): ?>
        <figure>
          <?= wp_get_attachment_image($right['image']['ID'], 'full') ?>
        </figure>
      <?php endif ?>
      
    </div>
  <?php endif ?>

</div>
</section>

<?php endif; ?>