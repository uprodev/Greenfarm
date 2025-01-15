<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if (is_array($terms) && !empty($terms)): ?>
  <section class="page-banner">
    <div class="bg">
      <img src="<?= get_stylesheet_directory_uri() ?>/img/bg-5.jpg" alt="">
    </div>
    <div class="content-width">
      <div class="title">

        <?php if ($label): ?>
          <h6 class="label"><?= $label ?></h6>
        <?php endif ?>
        
        <?php if ($title): ?>
          <h1><?= $title ?></h1>
        <?php endif ?>
        
      </div>
      <div class="content">

        <?php foreach ($terms as $term): ?>

          <?php $url = get_field('url', 'term_' . $term->term_id) ?>

          <div class="item">
            <a href="<?= $url ?: get_term_link($term->term_id) ?>"<?php if($url) echo ' target="_blank"' ?>>

              <?php if ($field = get_field('icon', 'term_' . $term->term_id)): ?>
                <div class="icon-wrap">
                  <?= wp_get_attachment_image($field['ID'], 'full') ?>
                </div>
              <?php endif ?>
              
              <p><?= $term->name ?> <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-6.svg" alt=""></p>
            </a>
          </div>
        <?php endforeach ?>
        
      </div>
    </div>
  </section>
<?php endif ?>

<?php endif; ?>