</main>

<footer>
  <div class="content-width">
    <div class="logo-wrap">

      <?php if ($field = get_field('logo_f', 'option')): ?>
        <div class="wrap">
          <a href="<?= get_home_url() ?>">
            <?= wp_get_attachment_image($field['ID'], 'full') ?>
          </a>
        </div>
      <?php endif ?>

      <?php if ($field = get_field('text_under_logo_f', 'option')): ?>
        <p><?= $field ?></p>
      <?php endif ?>

      <?php if ($form = get_field('form_f', 'option')): ?>

        <?php if ($field = get_field('form_title_f', 'option')): ?>
          <h6><?= $field ?></h6>
        <?php endif ?>

        <?= do_shortcode('[contact-form-7 id="' . $form . '" html_class="footer-form"]') ?>

      <?php endif ?>

    </div>
    <nav class="footer-menu">

      <?php if ($locations = get_nav_menu_locations()): ?>

        <?php foreach ($locations as $index => $menu): ?>

          <?php if (str_contains($index, 'footer') && has_nav_menu($index)): ?>
          <div class="item item-collaps">
            <h6><?= wp_get_nav_menu_name($index) ?><span></span></h6>

            <?php wp_nav_menu( array(
              'theme_location'  => $index,
              'container'       => '',
              'items_wrap'      => '<ul>%3$s</ul>'
            ) ); ?>

          </div>
        <?php endif ?>

      <?php endforeach ?>

    <?php endif ?>

    <?php if (($items = get_field('socials_f', 'option')) && is_array($items) && checkArrayForValues($items)): ?>
    <div class="item">

      <?php if ($field = get_field('socials_title_f', 'option')): ?>
        <h6><?= $field ?></h6>
      <?php endif ?>
      
      <ul class="soc">

        <?php foreach ($items as $item): ?>
          <?php if ($item['icon'] && $item['link']): ?>
            <li>
              <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
                <i class="<?= $item['icon'] ?>"></i>
              </a>
            </li>
          <?php endif ?>
        <?php endforeach ?>
        
      </ul>
    </div>
  <?php endif ?>

</nav>


</div>

<?php if ($field = get_field('text_f', 'option')): ?>
  <div class="bottom">
    <div class="content-width">
      <div class="content">
        <p><?= $field ?></p>
      </div>
    </div>
  </div>
<?php endif ?>

</footer>

<?php wp_footer() ?>
</body>
</html>