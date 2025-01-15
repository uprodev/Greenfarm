<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>

    <?php if (($field = get_field('top_h', 'option')) && is_array($field) && checkArrayForValues($field)): ?>
    <div class="top-line">
      <div class="content">
        <div class="wrap">

          <?php if ($field['text']): ?>
            <p><?= $field['text'] ?></p>
          <?php endif ?>
          
          <?php if (is_array($field['locations']) && checkArrayForValues($field['locations'])): ?>
          <div class="select-block ">
            <div class="nice-select" tabindex="0">

              <?php foreach ($field['locations'] as $index => $item): ?>
                <?php if ($index == 0 && $item['link']): ?>
                  <span class="current"><?= html_entity_decode($item['link']['title']) ?></span>
                <?php endif ?>
              <?php endforeach ?>

              <ul class="list">

                <?php foreach ($field['locations'] as $item): ?>
                  <?php if ($item['link']): ?>
                    <li class="option<?php if($index == 0) echo ' selected focus' ?>">
                      <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= html_entity_decode($item['link']['title']) ?></a>
                    </li>
                  <?php endif ?>
                <?php endforeach ?>

              </ul>
            </div>
          </div>
        <?php endif ?>

      </div>

      <?php if ($field['link']): ?>
        <div class="btn-wrap">
          <a href="<?= $field['link']['url'] ?>" class="btn-top-white"<?php if($field['link']['target']) echo ' target="_blank"' ?>>

            <?php if ($field['link_icon']): ?>
              <?= wp_get_attachment_image($field['link_icon']['ID'], 'full') ?>
            <?php endif ?>

            <?= html_entity_decode($field['link']['title']) ?>
          </a>
        </div>
      </div>
    <?php endif ?>

  </div>
</div>
<?php endif ?>

<div class="line-menu">
  <div class="content-width">

    <?php if ($field = get_field('logo_h', 'option')): ?>
      <div class="logo-wrap">
        <a href="<?= get_home_url() ?>">
          <?= wp_get_attachment_image($field['ID'], 'full') ?>
        </a>
      </div>
    <?php endif ?>
    
    <nav class="top-menu">

      <?php wp_nav_menu( array(
        'theme_location'  => 'header',
        'container'       => '',
        'items_wrap'      => '<ul>%3$s</ul>'
      )); ?>

      <div class="open-menu">
        <a href="#">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
    </nav>
  </div>
</div>
</header>

<div class="menu-responsive" id="menu-responsive" style="display: none">
  <div class="top">
    <div class="close-menu">
      <a href="#"><i class="fal fa-times"></i></a>
    </div>
  </div>
  <div class="wrap">

    <?php if ($field = get_field('logo_h', 'option')): ?>
      <div class="logo-wrap">
        <a href="<?= get_home_url() ?>">
          <?= wp_get_attachment_image($field['ID'], 'full') ?>
        </a>
      </div>
    <?php endif ?>
    
    <nav class="mob-menu-wrap">

      <?php wp_nav_menu( array(
        'theme_location'  => 'header',
        'container'       => '',
        'items_wrap'      => '<ul class="mob-menu">%3$s</ul>'
      )); ?>

    </nav>
  </div>
</div>

<main>