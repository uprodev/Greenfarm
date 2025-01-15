<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $args['row']['is_options'] ? get_field($key . '_1', 'option') : $arg; ?>

  <section class="about-banner<?php if(is_page(257)) echo ' giveback-banner' ?>">

    <?php if ($video): ?>
      <div class="bg">
        <video loop muted autoplay><source src="<?= $video['url'] ?>" type='video/mp4'>
        </video>
      </div>
    <?php endif ?>
    
    <div class="content-width">

      <?php if ($label): ?>
        <h6 class="label"><?= $label ?></h6>
      <?php endif ?>

      <?php if ($title): ?>
        <h1><?= $title ?></h1>
      <?php endif ?>

      <?php if (($items = get_field('socials_f', 'option')) && is_array($items) && checkArrayForValues($items) && $is_socials): ?>
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
    <?php endif ?>

  </div>
</section>

<?php endif; ?>